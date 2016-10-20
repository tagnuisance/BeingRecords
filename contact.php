<?php
if(isset($_POST['submit'])){
    $to = "tyler.agnew@gmail.com"; // this is your Email address

    //Using strip_tags here for secure coding practices...

    $from = strip_tags($_POST['email']); // this is the sender's Email address
    $first_name = strip_tags($_POST['first_name']);
    $last_name = strip_tags($_POST['last_name']);


    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <title>Contact</title>
</head>

<title>Contact</title>

<body>

<div id="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="artists.php">Artists</a></li>
        <li><a href="releases.php">Releases</a></li>
        <li><a href="contact.php">Contact</a>
    </ul>
</div>

<h1>Contact</h1>

</body>

</html>

<div class="addForm">

        <form action="" method="post">

            <label>Name</label>
            <input type="text"name="artistName"><br>

            <label>Email</label>
            <input type="text" name="artistBio"><br>

            <label>Message</label>
            <br><textarea rows="5" name="message" cols="30"></textarea><br>

            <input class="addButton" type="submit" value="Submit Email"><br>

        </form>
</div>

</body>
</html>
