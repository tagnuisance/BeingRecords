<?php

require_once ('database.php');
require_once ('rest.php');

$releases = get_all_releases();

?>

<!DOCTYPE html>

<head>
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <title>Being Records - Established 2015</title>
</head>

<body>

    <div id="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="artists.php">Artists</a></li>
            <li><a href="releases.php">Releases</a></li>
            <li><a href="contact.php">Contact</a>
        </ul>
    </div>

    <h1>Being Records</h1>
<!--    <h2>Established 2015</h2>-->

    <div id="releaseDisplay">
        <table>
            <tr>
                <th>Artist</th>
                <th>Release</th>
                <th>Year</th>
            </tr>
        <?php foreach ($releases as $release): ?>
        <tr>
            <td><?php echo $release['artistName']; ?></td>
            <td><?php echo $release['releaseName']; ?></td>
            <td><?php echo $release['releaseYear']; ?></td>
        </tr>
        <?php endforeach; ?>
        </table>
    </div>

</body>

</html>