<!DOCTYPE HTML>
<html>
<head>
  <link charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <title>Fawell first blog</title>
</head>
<body>

<?php

$ connection = mysql_connect("localhost", "db_user", "admin123");
$db = mysql_select_db("my_db");
mysql_set_charset("utf-8");

if(!$connection || !db)
{
	exit(mysql_error());
	
}

$result = mysql_query(" 
                       SELECT * FROM news
					   ORDER BY id DESC
                       ");

mysql_close();

while($row = mysql_fetch_assoc($result)){
	echo $row ['title']."<br>";
}  
?>
<?php
<h1><?php $row['title']?></h1>
<p><?php $row['text']?></p>
<p><?php $row['img']?></p>
<p>Дата:<?php $row['data']?></p>
<p>Автор новости:<?php $row['author']?></p> 
<hr/>

?>
</body>
</html>