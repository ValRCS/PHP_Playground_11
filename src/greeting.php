<?php
session_start();
echo "Now we know your name Mr. " . $_SESSION['myname'];
require_once 'stats.php';
