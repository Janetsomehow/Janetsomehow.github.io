<?php
if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $title = $_POST['subject'];
    $message = $_POST['message'];

    
    echo $name."<br>";
    echo $email."<br>";
    echo $title."<br>";
    echo $message."<br>";
    echo '<script>alert("Thank you, your form has been submitted");</script>';
    
}
?>