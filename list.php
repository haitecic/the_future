<html>
<head>
    <meta charset="utf-8">
</head>
<body>	
<?php
require_once "config/db_connect.php";//連結到本機端資料庫project_resource

$results=mysql_query("SELECT candidate.name, count(*) as number FROM ballot LEFT JOIN candidate ON candidate.id=ballot.candidate_id GROUP BY candidate.id order by number DESC");
$num_candidate=mysql_num_rows($results);
for($i=0; $i<$num_candidate; $i++)
   {
   echo mysql_result($results, $i, 'name');
   echo mysql_result($results, $i, 'number');
   echo "<br>";
   }
?>
</body>
</html>