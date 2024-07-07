<?php
$scrapingHostDomain = "https://www.123-hd.com/";
$scrapingHostPage = 1;
$scrapingHostCatagory = "ดูหนังออนไลน์";
$url = $scrapingHostDomain.$scrapingHostCatagory."/page/".$scrapingHostPage;

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$response = curl_exec($curl);

$dom = new DOMDocument;
@$dom->loadHTML($response);
$xpath = new DOMXPath($dom);

$movieContainer = $xpath->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' halim-thumb ')]");
$movieImage = $xpath->query("//img[contains(concat(' ', normalize-space(@class), ' '), ' blur-up img-responsive ')]");

$movieTitleArr = array();
$movieUrlArr = array();
$movieImageArr = array();

foreach ($movieContainer as $node) {
    $movieTitle = $node->getAttribute('title');
    array_push($movieTitleArr, $movieTitle);
}

foreach ($movieContainer as $node) {
    $movieUrl = $node->getAttribute('href');
    array_push($movieUrlArr, $movieUrl);
}

foreach ($movieImage as $node) {
    $src = str_replace("/", "", $scrapingHostDomain).$node->getAttribute('data-src');
    array_push($movieImageArr, $src);
}

curl_close($curl);
?>