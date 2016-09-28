<?php
/**
 * Created by PhpStorm.
 * User: Luke
 * Date: 28/09/2016
 * Time: 12:55
 */
if (isset($_POST["subit"])) {
    $theirEmail = $_POST['email'];
    $message = $_POST['comment'];

    $from = "Demo";
    $to = "lukewaugh12@gmail.com";
    $subject = "Message from Portfolio";

    $body = "From: $theirEmail\n Message: $message";


    mail($to, $subject, $body, $from);
}

header('Location: index.php');
?>