<?php

include('setting.php');

if(!session_id())
    session_start();

if(isset($_SESSION['auth']))
{
    session_destroy();
    die("Key: $key");
}
else
{
    session_destroy();
    header('Location: index.php?msg=尚未登入');
}
