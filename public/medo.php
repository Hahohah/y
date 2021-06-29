<?php
$url = isset($_GET['url']) ? $_GET['url'] : null;
use YouTube\YouTubeDownloader;

$yt = new YouTubeDownloader();

$links = $yt->getDownloadLinks("$url");

var_dump($links);
