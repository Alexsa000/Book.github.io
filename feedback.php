<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин "Книжный мир"</title>
</head>
<body>
	<div class="container">
        <img src="главная.jpg" WIDTH=1270 HEIGHT=400 class="image">
        <div class="text"><h1><I><P ALIGN="center">Отзывы</P></I><h1></div>
        </div> 
      <div class="container2">
		<div class="container3">
		<A HREF="index.html"><h3>Главная<h3></A>
        </div>
        <div class="container4">
		<A HREF="каталог.html"><h3>Каталог<h3></A>
        </div>
		<div class="container5">
		<A HREF="отзыв.html"><h3>Отзывы<h3></A>
        </div>
	</div>
	<div class="container3.6">
        <label for="name"><P ALIGN="center">Ваше имя:</P></label><br>
        <input type="text" id="name" class="input-field"><br>
        <label for="review"><P ALIGN="center">Ваш отзыв:</P></label><br>
        <textarea id="review" class="textarea-field"></textarea>
    </div>
 <div class="container3.7">
        <button class="btn-submit">Отправить</button>
    </div>
	<main>
<h2><i>ОБРАТНАЯ СВЯЗЬ:</i></h2>
<form name="form1" method="post" action="test.php"><p> 
Имя: <input type="text" name="sirname"></p><p> 
<p> Сообщение 
<textarea name="message"></textarea> (поле сообщения) </p>
<p><input type="submit" name="send" value="Отправить"></p>
</form>

<?php
/* Подключаемся к базе данных */
  $link = mysqli_connect("localhost", "root", "");
  mysqli_select_db($link, "База данных");

/* Выбираем данные */
$sql="SELECT name, message FROM Отзыв";
$result=mysqli_query($link, $sql);

while ($line=mysqli_fetch_row($result)) {
echo "<b>Имя:</b>".$line[0]."<br>";
echo "<b>Сообщение:</b>".$line[2]."<br><br>";
}
?>

</main>
	<link rel="stylesheet" href="styles.css">
</body>
</html>