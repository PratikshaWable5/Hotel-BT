<?php
if(isset($_POST['submit']))
{
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Message = $_POST['message'];

    $fp = fopen("data.txt","a");
    fwrite($fp,$Name);
    fwrite($fp,$Email);
    fwrite($fp,$Message);


    fclose($fp);

}
?>