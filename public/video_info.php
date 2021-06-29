<?php
header('Content-Type: application/json');
require('../vendor/autoload.php');

$url = isset($_GET['url']) ? $_GET['url'] : null;

function send_json($data)
{
    header('Content-Type: application/json');
    echo json_encode($data, JSON_PRETTY_PRINT);
    exit;
}

if (!$url) {
    send_json([
        'error' => 'No URL provided!'
    ]);
}

$youtube = new \YouTube\YouTubeDownloader();

try {
    $links = $youtube->getDownloadLinks($url);
    $titles = $youtube->getDownloadTitle($url);
    $best = $links->getBestCombinedFormat();

    
        $result = ['Admin' =>"@GGGGw", 'links' => [$best->url],'title'=>$titles
];
    send_json($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    } 
