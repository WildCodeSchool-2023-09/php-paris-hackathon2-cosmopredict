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
        $nextPageToken = null;

        do {
            $params = [
                'q' => 'maquillage',
                'maxResults' => 1,
                'type' => 'video',
                'pageToken' => $nextPageToken,
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
            $nextPageToken = $searchResponse->getNextPageToken();
        } while ($nextPageToken);

        return $videos;
    }
}
