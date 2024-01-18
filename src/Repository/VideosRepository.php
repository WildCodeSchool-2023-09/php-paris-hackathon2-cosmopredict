<?php

namespace App\Repository;

use App\Entity\Videos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\YoutubeService;
use Doctrine\ORM\EntityManager;

/**
 * @extends ServiceEntityRepository<Videos>
 *
 * @method Videos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Videos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Videos[]    findAll()
 * @method Videos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Videos::class);
    }

    public function insertVideos(): void
    {
        $youtubeService = new YoutubeService();
        $videos = $youtubeService->getVideoInfo();

        foreach ($videos as $video) {
            $videoEntity = new Videos();
            $videoEntity->setUploadDate($video['uploadDate']);
            $videoEntity->setDescription($video['description']);
            $this->getEntityManager()->persist($videoEntity);
        }

        $this->getEntityManager()->flush();
    }
}
