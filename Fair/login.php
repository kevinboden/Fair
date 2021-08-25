<?php
$password = $_POST["psw"];

if ($password==="Verena")
{
    # weiterleitung auf die seite nach erfolgreichem login
    header('location: DeveloperPage.php');
    exit(1);
}
else
{
     # weiterleitung auf die Login-seite ...
     header('location: StartPage.php');
     exit();
}