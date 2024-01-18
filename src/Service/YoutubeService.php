<?php

namespace App\Service;

use Google\Client;
use Google\Service\YouTube;

class YoutubeService
{
    private string $apiKey = 'AIzaSyDBscxValt9PzTe2jjxwYJFRvZvdXgshkU';

    public function __construct()
    {
        $this->apiKey = 'AIzaSyDBscxValt9PzTe2jjxwYJFRvZvdXgshkU';
    }

    public function getVideoInfo(): array
    {
        $client = new Client();
        $client->setDeveloperKey($this->apiKey);
        $youtube = new YouTube($client);

        $params = [
            'q' => 'maquillage',
            'maxResults' => 55,
            'type' => 'video',
        ];

        // Effectuer la recherche
        $searchResponse = $youtube->search->listSearch('snippet', $params);

        // Récupérer les descriptions des vidéos
        $descriptions = [];
        foreach ($searchResponse->items as $item) {
            $videoId = $item->id->videoId;
            $video = $youtube->videos->listVideos('snippet', ['id' => $videoId]);
            $description = $video->items[0]->snippet->description;
            $descriptions[$videoId] = $description;
        }

        return $descriptions;
    }
}
