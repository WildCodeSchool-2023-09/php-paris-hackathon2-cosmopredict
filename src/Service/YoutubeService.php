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

        $searchResponse = $youtube->search->listSearch('snippet', $params);

        $videos = [];
        foreach ($searchResponse->items as $item) {
            $videoId = $item->id->videoId;
            $videoDetails = $youtube->videos->listVideos('snippet', ['id' => $videoId]);
            $videos[] = [
                'description' => $videoDetails[0]->snippet->description,
                'uploadDate' => $videoDetails[0]->snippet->publishedAt,
            ];
        }
        return $videos;
    }
}
