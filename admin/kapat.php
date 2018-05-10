<?php
session_start();
session_destroy();
$url ="./";
header('Location: ' . $url, true, $permanent ? 301 : 302);
?>