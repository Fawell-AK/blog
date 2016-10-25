<!DOCTYPE HTML>
<html>
<head>
  <link charset="utf-8">
       <link rel="stylesheet" href="css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fawell first blog</title>
</head>
<body>
<header>
    <h1>Blog for news</h1>
</header>

<section>

<?php

$connection = mysqli_connect("localhost", "db_user", "admin123");

$db = mysqli_select_db("my_db");
mysqli_set_charset("utf-8");

if(!$connection || !$db)
{
	exit(mysqli_error());
}

    $result = mysqli_query("
                               SELECT * FROM news
                               ORDER BY id DESC;
                               ");
mysqli_close();
?>
<?php

    while($row = mysqli_fetch_array($result))
        echo $row ['title']."<br>"

?>
<h1><?php $row['title']?></h1>
<p><?php $row['text']?></p>
<p><?php $row['img']?></p>
<p>Дата:<?php $row['data']?></p>
<p>Автор новости:<?php $row['author']?></p> 
<hr/>

</section>

</body>
</html>