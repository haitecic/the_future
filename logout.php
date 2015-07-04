<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['token']);
session_destroy();
?>