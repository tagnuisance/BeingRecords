<?php

require_once ('database.php');
require_once ('rest.php');

$releases = get_all_releases();

?>

<!DOCTYPE html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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

    <div class="row" id="releaseDisplay">
        <?php foreach ($releases as $release): ?>
            <div class="col-md-3 col-sm-4">
                        <img src="<?php echo $release['imageURL']?>">
                        <div class="caption">
                            <h4><?php echo $release['releaseName'] ?></h4>
                            <p><?php echo $release['artistName'] ?></p>
                            <p><a href="<?php echo $release['purchaseURL'] ?>" class="btn btn-primary" role="button">Purchase</a></p>
                        </div>
                    </div>
        <?php endforeach; ?>
        <br>
    </div>

</body>

</html>