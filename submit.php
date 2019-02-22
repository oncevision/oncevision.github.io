<?php
$response=$_POST["response"];
$url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret"&response=".$response;
$verify=file_get_contents(Surl);
echo $verify;
?>
