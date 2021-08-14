<?php
$output = <<<OUTPUT
<lang="en">
<head> 
<title>Сладкарска верига РОЗА</title> 
<meta charset="utf-8">
<head>
<link rel="stylesheet" type="text/css" href="info.css">
</head>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_badem.jpg" alt="torta_badem" style="width:100%">
        <p>Бадемови платки, варен бадемов крем, млечно-шоколадова заливка, бадеми</p>
		<pre>
	14п.-29,90лв
	12п.-25,50лв
	8п.-17лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_postna.jpg" alt="torta_postna" style="width:100%">
        <p>Постен блат, конфитюр, ягода, ябълки, пшеничен грис, орехи, бадеми, декорация</p>
		<pre>
	14п.-30,10лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_rafaelo.jpg" alt="torta_rafaelo" style="width:100%">
        <p>Кокосови платки, крем Рафаело, кокосови стърготини</p>
		<pre>
	16п.-23,50лв
	8п.- 12,30лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column1'>
       <div class="text"> 
		<img src="dt/torta_mlechen_put.jpg" alt="torta_mlechen_put" style="width:100%">
        <p>Пандишпанови платки, крем валиния с вкус на карамел, шампанско и какао, ганаш, заливка, декорация</p>
		<pre>
	14п.-25,10лв
	8п.-13,60лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column1'>
       <div class="text"> 
        <img src="dt/torta_tropik.jpg" alt="torta_tropik" style="width:100%">
        <p>Пандишпанови платки, плодов крем ягода и лимон, плодове, плодова глазура</p>
		<pre>
	14п.-42,40лв
	8п.-21,20лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column1'>
       <div class="text"> 
        <img src="dt/torta_eklerova.jpg" alt="torta_eklerova" style="width:100%">
        <p>Бял блат, варен крем брюле, еклерчета с шоколадов крем брюле, заливка бял ганаш, декорация</p>
		<pre>
	14п.-42,40лв
	8п.-21,20лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_moka.jpg" alt="torta_moka" style="width:100%">
        <p>Шоко блат, крем с вкус на кафе, бяла и какаова глазура, декорация</p>
		<pre>
	14п.-19,90лв
	12п.-16,90лв
	8п.-10,80лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_shoko.jpg" alt="torta_shoko" style="width:100%">
        <p>Какаов блат, какаов крем, ганаш заливка, декорация</p>
		<pre>
	12п.-17,20лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_bella.jpg" alt="torta_bella" style="width:100%">
        <p>Бял блат, заквасена сметана, бял крем, ягодово сладко, ганаш заливка</p>
		<pre>
	14п.-47,60лв
	8п.-24,70лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column1'>
       <div class="text"> 
        <img src="dt/torta_biskvitena.jpg" alt="torta_biskvitena" style="width:100%">
        <p>Бисквити Закуска, варен крем Панакота, ганаш от натурален Белгийски шоколад, декорация</p>
		<pre>
	14п.-43,90лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column1'>
       <div class="text"> 
        <img src="dt/torta_cheresha.jpg" alt="torta_cheresha" style="width:100%">
        <p>Шоко блат, крем йогурт, сладко от череши, черешова глазура</p>
		<pre>
	14п.-32,90лв 
	8п.- 18,80лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column1'>
       <div class="text"> 
        <img src="dt/torta_chernomorec.jpg" alt="torta_chernomorec" style="width:100%">
        <p>Орехови платки, какаов крем, портокалови кори, хрупкави вафлени пурички, млечен белгийски шоколад</p>
		<pre>
	16п.-54,90лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_eklerova.jpg" alt="torta_eklerova" style="width:100%">
        <p>Бял блат, варен крем брюле, еклерчета с шоколадов крем брюле, заливка бял ганаш, декорация</p>
		<pre>
	14п.-35,70лв 
	8п.-19,60лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_frenska_selska.jpg" alt="torta_frenska_selska" style="width:100%">
        <p>Медени платки, маслен крем, варен сладкарски крем, орехови ядки</p>
		<pre>
	14п.-36,60лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_garash.jpg" alt="torta_garash" style="width:100%">
        <p>Орехови платки, крем гараш, какаова глазура, кокосови стърготини</p>
		<pre>
	16п.-35,30лв
	8п.-16,10лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column1'>
       <div class="text"> 
        <img src="dt/torta_gorski_plod.jpg" alt="torta_gorski_plod" style="width:100%">
        <p>Бял блат, бял ганаш, крем чийзкейк, боровинки, декорация</p>
		<pre>
	14п.-54,40лв 
	8п.-28,30лв 
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column1'>
       <div class="text"> 
        <img src="dt/torta_iogurt.jpg" alt="torta_iogurt" style="width:100%">
        <p>Пандишпанови платки, йогурт крем, бишкоти, ягоди, декорация</p>
		<pre>
	14п.-32,40лв 
	8п.-18,40лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column1'>
       <div class="text"> 
        <img src="dt/torta_kazablanka.jpg" alt="torta_kazablanka" style="width:100%">
        <p>Тъмен шоко блат, крем ванилия, какаово-лешников крем, ганаш крем, фъстъчен крокант, какао</p>
		<pre>
	14п.-29,90лв
	12п.-25,50лв 
	8п.-17лв 
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_malinova_fantaziq.jpg" alt="torta_malinova_fantaziq" style="width:100%">
        <p>Бял блат, крем чийзкейк, малини, малинова глазура, декорация</p>
		<pre>
	14п.-39,90лв
	8п.-19,90лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_morkovena.jpg" alt="torta_morkovena" style="width:100%">
        <p>Блат с моркови, заквасена сметана, портокалови кори, филиран фъстък, декорация</p>
		<pre>
	14п.-35,30лв
	8п.-19,60лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_panakota.jpg" alt="torta_panakota" style="width:100%">
        <p>Пандишпанови платки, варен крем Панакота, бадеми, заливка с бял ковър крем, декорация</p>
		<pre>
	14п.-45,90лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column1'>
       <div class="text"> 
        <img src="dt/torta_qbulkova_s_karamel.jpg" alt="torta_qbulkova_s_karamel" style="width:100%">
        <p>Блат с ябълки и орехи, заквасена сметана, крем маскарпоне, дели карамел, филиран фъстък</p>
		<pre>
	14п.-43,40лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column1'>
       <div class="text"> 
        <img src="dt/torta_relefna.jpg" alt="torta_relefna" style="width:100%">
        <p>Пандишпанови платки, плодов крем, ягоди(малини) в плодово желе</p>
		<pre>
	14п.-40,70лв
	8п.-20,60лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column1'>
       <div class="text"> 
        <img src="dt/torta_roql.jpg" alt="torta_roql" style="width:100%">
        <p>Шоко блат, шоколадов и ванилов крем парфе, фъстъчен крокант, ганаш декорация</p>
		<pre>
	14п.-28,20лв
	8п.-16,40лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_shokoladovo_kadife.jpg" alt="torta_shokoladovo_kadife" style="width:100%">
        <p>Наситен какаов блат, какаов крем с крема сирене, какао</p>
		<pre>
	14п.-43,70лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_trufel.jpg" alt="torta_trufel" style="width:100%">
        <p>Какаов блат, какаов крем, ганаш заливка, трюфели с различна панировка</p>
		<pre>
	14п.-24,50лв
	12п.-20,80лв
	8п.-14,60лв
		</pre>
	</div>
</div>

<div> 
   <div class="row">
     <div class='column0'>
       <div class="text"> 
        <img src="dt/torta_winter.jpg" alt="torta_winter" style="width:100%">
        <p>Блат със моркови и ябълки, маслен крем, крем сирене, мед, сушени плодове, портокалови корички, ганаш</p>
		<pre>
	14п.-31,00лв
		</pre>
	</div>
</div>
</header>
</body>
OUTPUT;
echo $output;