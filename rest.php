<?php
require_once ('database.php');
require_once ('functions.php');

//Process Client Request
function deliver_response($status, $status_message, $data)

{
    header("HTTP/1.1 $status $status_message");
    header("Content-Type: application/json");
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;

    $json_response = json_encode($response);
    echo $json_response;
}

if (isset($_GET["action"])) {

    switch ($_GET["action"]) {
        //If action is to find artist information
        case "artist":
            //Get Artist Information for Specified Artist
            if (isset($_GET['artistName'])) {
                $value = get_artist_by_name($_GET['artistName']);
                if ($value != NULL) {
                deliver_response(200, "Artist Found", $value);
                } else {
                deliver_response(200, "No Artists with this Name", $value);
                }
            }
            else {
            //Get All Artist Information if none is Specified
                $value = get_all_artists();
                deliver_response(200, "No Artist Specified", $value);
            };
            break;

        //If action is to find release information
        case "release":
            //Get Releases By Certain Artist
            if (isset($_GET['artistName'])) {
                $value = get_all_releases_by_artist_name($_GET['artistName']);
                if ($value != NULL) {
                    deliver_response(200, "Releases Found", $value);
                } else {
                    deliver_response(200, "No Artists with this Name", $value);
                }

            }
            else {
            //Get All Release Information if None is Specified
                $value = get_all_releases();
                deliver_response(200, "All Releases", $value);
            }
            break;

    }

}

?>