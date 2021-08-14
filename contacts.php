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
<a name="Контакти"><b>Контакти</b></a>:
                <p>
                   ЕТ Роза 1 -Стоян Георгиев<br>
                   гр. Бургас ул. "Странджа" №32<br>
                   Производствен Цех:<br>
                   гр. Бургас, ж.к. Изгрев, бл. 153<br>
                   моб.: 0899 941 646<br>
                   тел.: 056 521 155<br>
                   mail: veriga_roza@abv.bg<br>
                   Банкова сметка<br>
                   ЕТ Роза 1 - Стоян Георгиев<br>
                   Райфайзенбанк<br>
                   IBAN BG57 RZBB 9155 1086 1574 19 BGN<br>
                   BIC RZBBBGSF<br>
                 </p>
</center>
<hr>
</header>
</body>
OUTPUT;
echo $output;