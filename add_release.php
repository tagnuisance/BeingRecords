<?php

require_once ('rest.php');

//Get Request Values - USING filter_input for secure transfer of request/response data.
$artist_name = filter_input(INPUT_POST, 'artist_name');
$release_name = filter_input(INPUT_POST, 'release_name');
$release_year = filter_input(INPUT_POST, 'release_year');
$purchase_url = filter_input(INPUT_POST, 'purchase_url');
$image_url= filter_input(INPUT_POST, 'image_url');

echo $purchase_url;

add_release($artist_name, $release_name, $release_year, $purchase_url, $image_url);

include('releases.php');

?>