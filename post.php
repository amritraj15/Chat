<?php
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
    date_default_timezone_set('Asia/Kolkata'); 
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fp);
}
?>