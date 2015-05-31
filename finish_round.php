<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
require_once "config/db_connect.php";
mysql_query("insert into ballot (candidate_id, ballot) value ('{$_GET['candidate']}' ,'1')");
echo "success";
?>
</body>
</html>