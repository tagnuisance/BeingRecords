<?php

require_once ('database.php');
require_once ('rest.php');

$releases = get_all_releases();

?>

<!DOCTYPE html>

<head>
    <title>Releases</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
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

<h1>Releases</h1>

<div id="releaseDisplay">
    <table>
        <tr>
            <th>ID</th>
            <th>Artist</th>
            <th>Release</th>
            <th>Year</th>
        </tr>
        <?php foreach ($releases as $release): ?>
            <tr>
                <td><?php echo $release['releaseID']; ?></td>
                <td><a href="artists.php?artistName=<?php echo $release['artistName']; ?>">
                    <?php echo $release['artistName']; ?></a></td>
                <td><?php echo $release['releaseName']; ?></td>
                <td><?php echo $release['releaseYear']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<a href="add_release_form.php">Add Release</a>

</body>
</html>
