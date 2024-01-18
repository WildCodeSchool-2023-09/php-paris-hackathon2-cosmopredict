<?php

namespace App\Repository;

use App\Entity\Videos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\YoutubeService;
use Doctrine\ORM\EntityManager;
use Faker\Factory;

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
    public const BRANDS = [
        "L'Oréal",
        "Channel",
        "Dior",
        "Clarins",
        "Yves Saint-Laurent",
        "Guerlain",
        "Caudalie",
        "La Roche-Posay",
        "Vichie",
        "Nuxe",
    ];

    public const PRODUCTS = [
        "Fond de teint",
        "Mascara",
        "Rouge à lèvres",
        "Crème hydratante",
        "Fard à paupières",
        "Soin anti-âge",
        "Exfoliant",
        "Soin solaire",
        "Eau micellaire",
    ];

    //

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Videos::class);
    }

    public function insertVideos(): void
    {
        // $youtubeService = new YoutubeService();
        // $videos = $youtubeService->getVideoInfo();

        // foreach ($videos as $video) {
        //     $videoEntity = new Videos();
        //     $videoEntity->setUploadDate($video['uploadDate']);
        //     $videoEntity->setDescription($video['description']);
        //     $this->getEntityManager()->persist($videoEntity);
        // }

        for ($jaj = 0 ; $jaj < 500 ; $jaj++) {
            $this->lesDonerDesVideo();
            $this->getEntityManager()->flush();
        }
    }

    public function lesDonerDesVideo(): void
    {
        $faker = Factory::create();

        for ($i = 0 ; $i < 5 ; $i++)
        {
            $video = new Videos();
            $video->setUploadDate($faker->dateTimeThisDecade->format("Y-m-d"));

            $description = '';

            for ($i = 0 ; $i < rand(1, 4) ; $i++) {
                $description .= ' ;' . static::BRANDS[array_rand(static::BRANDS)];
            }
            $description .= ' 🍆';
            for ($y = 0 ; $y < rand(1, 4) ; $y++) {
                $description .= ' ;' . static::PRODUCTS[array_rand(static::PRODUCTS)];
            }

            $video->setDescription($description);

            $this->getEntityManager()->persist($video);
        }
    }

    public function avoirLlesdOoneerpArmOi($debout, $faim)
    {
        $query = $this->createQueryBuilder('v')
            ->where('v.uploadDate > :debout')
            ->andWhere('v.uploadDate < :faim')
            ->orderBy('v.uploadDate')
            ->setParameter('debout', $debout)
            ->setParameter('faim', $faim)
            ->getQuery();

        return $query->getResult();
    }

}
