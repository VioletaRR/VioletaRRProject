<?php
$output = <<<OUTPUT
<lang="en"> 
<head> 
<title>Сладкарска верига РОЗА</title> 
<meta charset="utf-8">
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

</body>
		<center><img src="dt/logo/logo.png" alt="Сладкарска верига Роза" height="350px" width="350px" /></center>
		
<center>
    <div style="background-color:pink;">
    <a href="index.php">Начало</a>
	<a href="images_cake.php">Видове торти</a>
    <a href="information.php">Доставка</a>
    <a href="contacts.php">Контакти</a>
	</div>
</div>	

<br> 

<div class="container">

  <img src="dt/welcome_image/welcome_image.jpg" alt="Cake" style="width:90%;">
  <div class="text-block" style="width:40%;">
    <h3>ЕТ „Роза-1 Стоян Георгиев”</h3>
    <p>е частна семейна фирма, създадена през 1991 г. С основен предмет на дейност производство и търговия на сладкарски изделия. Фирмата предлага широка гама от продукти: торти, рула, пасти, кремове, сиропирани и дребни сладки, кексове, целувки, бутикови торти и др. За изработването им се ползват само продукти със сертификат и доказано качество</p>
  </div>
</div>

<br> 



<div class="container">
  <img src="dt/welcome_image/welcome_gif.gif" alt="Cupcake" style="width:90%;">
  <div class="bottom-left">Достъпни цени</div>
  <div class="top-left">Най-добро качество</div>
  <div class="top-right">Прясно и натурално</div>
  <div class="bottom-right">Доставка до адрес</div>
  <div class="centered">Защо да изберете нас?</div>
</div>

<hr>
<div class="sticky">Свържене се с нас: +359000000000 или не се колебайте да ни изпратите запитване</div>
<div style="padding-bottom:10px"></div> 

<div class="container2">
  <form action="/action_page.php">
  
    <label for="">Тема</label>
    <select id="theme" name="theme">
      <option value="choose">-- Изберете --</option>
      <option value="service">Обслужване на клиенти</option>
      <option value="problem">Технически проблем</option>
    </select>
    

    <label for="email">Имейл адрес</label>
    <input type="text" id="email" name="email" placeholder="Вашият e-mail..">

    <label for="number">Номер на поръчка</label>
    <input type="text" id="number" name="number" placeholder="Номер на поръчка..">

    <label for="message">Съобщение</label>
    <textarea id="message" name="message" placeholder="Напишете нещо.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
<hr> 

<br>

<img src="dt/vizitka/vizitka.jpg" alt="Визитка" class="picLeft"/>
<br>
<h2><b>Модерно Европейско Сладкарство в Сладкарница "Роза" от 01/11/2018г.</b></h2>
<h4>Уважаеми клиенти и скъпи приятели,<br> с много любов и вдъхновение ще Ви представим новата ни колекция от бутикови сладкарски изделия "Модерно Европейско Сладкарство", изработени изцяло от натурални продукти - истинско пиршество за сетивата с изтънчен дизайн и вкус!
Заповядайте от 01.11.2018г. -10:00ч. в Сладкарница "Роза" - ул. Ал.Богориди 26 и опитайте вкуса на "Модерното Европейско Сладкарство". Ще Ви представим и нашия специален шедьовър - едноименната торта "Роза" - нежно съчетание от рози, панакота и малини.
Бутикова колекция "Модерно Европейско Сладкарство" от 01.11.2018 - 10:00ч. в Сладкарница "Роза" - ул. Ал.Богориди 26  </h4>


</center>
</header>
</body>
OUTPUT;
echo $output;