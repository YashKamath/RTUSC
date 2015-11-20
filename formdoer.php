<?php
if($_POST["message"]) {
    mail("reviewteamusc@gmail.com", "Form to email message", $_POST["message"], "From: reviewteamusc@gmail.com");
}
?>
