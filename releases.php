<?php

require_once ('database.php');
require_once ('rest.php');

$releases = get_all_releases();

?>

<!DOCTYPE html>

<head>
    <title>Releases</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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

<div class="row" id="releaseDisplay">
    <?php foreach ($releases as $release): ?>
        <div class="col-md-3 col-sm-4">
            <img src="<?php echo $release['imageURL']?>">
            <div class="caption">
                <h4><?php echo $release['releaseName'] ?></h4>
                <p><?php echo $release['artistName'] ?></p>
                <div>
                    <a href="<?php echo $release['purchaseURL'] ?>" class="btn btn-primary" role="button">Purchase</a>
                        <form action="delete_release.php" method="post">
                            <input type="submit" value="Delete"> </input>
                            <input type="hidden" name="release_id" class="deleteButton" value="<?php echo $release['releaseID']; ?>">
                        </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </br>
    </br>
</div>

<!--    @TODO - this should be added on for only admins-->
<p></p>
<h2><a href="add_release_form.php">Add Release</a></h2>

</body>
</html>
