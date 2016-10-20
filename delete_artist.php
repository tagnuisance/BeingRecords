<?php

require_once ('rest.php');

//Get Request Values - USING filter_input for secure transfer of request/response data.
$artist_id = filter_input(INPUT_POST, 'artist_id');

delete_artist_by_id($artist_id);

include('artists.php');

?>