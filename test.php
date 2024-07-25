<?php
/* Принимаем данные из формы */
  $name = $_POST["sirname"]; 
  $text_message = $_POST["message"];

/* Подключаемся к базе данных */
  $link = mysqli_connect("localhost", "root", "");
  mysqli_select_db($link, "База данных");

/* Записывает данные */ 
$sql = "INSERT INTO Отзыв(name, message) VALUES ('$name', '$text_message')";
$result=mysqli_query($link, $sql);

/* Делаем редирект обратно */
header("Location: ".$_SERVER["HTTP_REFERER"]); 
exit;
?>
