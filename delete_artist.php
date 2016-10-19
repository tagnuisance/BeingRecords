<?php

require_once ('rest.php');

$artist_id = filter_input(INPUT_POST, 'artist_id');

delete_artist_by_id($artist_id);

include('artists.php');

?>