<?php
session_start();
if(isset($_SESSION['userid'])){
$winner=$_POST['winner'];
$_SESSION['winner']=$winner;
}
?>