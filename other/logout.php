<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['token']);
unset($_SESSION['winner']);
session_destroy();
?>