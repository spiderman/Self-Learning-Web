<?php
session_start();
echo "old    seesion id: ".session_id()."<br>";

/*
if (!isset($_SESSION['initiated']))
{
    session_regenerate_id();
    $_SESSION['initiated'] = 1;

    echo "new0    seesion id: ".session_id()."<br>";

}*/

echo "new1    seesion id: ".session_id()."<br>";


if (!isset($_SESSION['count'])) $_SESSION['count'] = 0;
else ++$_SESSION['count'];
echo $_SESSION['count'];
echo "new 2    seesion id: ".session_id()."<br>";



