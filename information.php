<?php
$output = <<<OUTPUT
<lang="en"> 
<head> 
<title>Сладкарска верига РОЗА</title> 
<meta charset="utf-8">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <link rel="stylesheet" type="text/css" href="info.css">
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Начало">Начало</button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<header> 

		<center><img src="dt/logo/logo.png" alt="Сладкарска верига Роза" height="350px" width="350px" /></center>
		
<center>
    <div style="background-color:pink;">
    <a href="index.php">Начало</a>
	<a href="images_cake.php">Видове торти</a>
    <a href="information.php">Доставка</a>
    <a href="contacts.php">Контакти</a>
	</div>
</center>                    
<hr>
<center>
<a name="Доставка"><b>Доставка</b></a>:
<p>

        <b>БЕЗПЛАТНА ДОСТАВКА</b> до всички сладкарници „Роза“ и Детски парти центрове от партньорската мрежа на Сладкарска верига "Роза".
        Доставките се осъществяват от понеделник до събота от 11:00-13:00ч.
</p>
</center>
<hr>
<center>
<a name="Партньори"><b>Детски центрове</b></a>:

<p>
<br>

Детски парти център „Буболече“  - гр. Бургас, ул. Янко Комитов 16А<br>
Детски парти център "M&M Kidland" - гр. Бургас, ж.к. Славейков, бл. 122<br>
Детски парти център "Корабчето" - гр. Бургас, ж.к. Славейков, бл. 177 <br>
Детски парти център "Лудотека" - гр. Бургас, ж.к. Славейков, бл. 147<br>
Детски парти център "Junior" - гр. Бургас, ж.к. Славейков, бл. 124<br>
Детски парти център "Happy Day" - гр. Бургас, ж.к. Славейков, бл.118 <br>
Детски парти център "Миньоните" - гр. Бургас, ж.к. Изгрев, бл. 163<br>
Детски парти Център "Щастливко" - гр. Бургас, ж.к. Зорница, бл. 75<br>
Детски център "Слънце" - гр. Бургас, ж.к. Братя Миладинови,бл. 39, вх.4<br>
Детски център "Фънки Мънки" - гр. Бургас, ул. Перущица 37<br>
Детски парти център "Миньоните" 2 - гр. Бургас, ж.к. Лазур, бл.77, вх.4<br>
Детски център "SunShine" - гр. Бургас, ул. Пробуда 27<br>
Детски парти център "Щуромания" - гр. Бургас, ул. Апсотол Карамитев 4<br>
Детски караоке център "Щуромания" - гр. Бургас, ул. Ал. Велики 8<br>
Детски център Пуф-Паф - гр. Бургас, Опера<br>
Детски парти център "Лъки" - гр. Бургас, ул. Княз Борис 79<br>
Детски парти център "Зайо Байо" - гр. Бургас, ж.к. Меден Рудник, Поща<br>
Детски парти център "ММ" - гр. Бургас, ж.к. Меден Рудник, бл.601<br>
Плувен Басейн - гр. Бургас, ж.к. Меден Рудник<br>
Детски център "Neverland" - гр.Бургас, жк. Меден Рудник, до 4-то РПУ<br>
Детски център "ПарКът" - гр. Бургас, ж.к. Меден Рудник, бл.70<br>
<hr>
</p>


</center>

</header>
</body>
OUTPUT;
echo $output;