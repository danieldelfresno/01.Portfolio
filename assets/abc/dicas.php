<?php
	session_start();
	if ($_SESSION['idade'] != "min18")
	{
	header ("location: index.php");
	}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="cache-control" content="no-cache">
	<title>ABC - Sobre a Arrábida Beer Company</title>
	<meta name="description" content="Kraft Beer Portuguesa. Cervejas fabricadas pelo método artesanal.">
		<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
		<link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="stylesheet" href="rodcss/abc_rodstyles.css?v=1.0">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript">

//   var _gaq = _gaq || [];
//   _gaq.push(['_setAccount', 'UA-34487454-1']);
//   _gaq.push(['_setDomainName', 'portugalia.pt']);
//   _gaq.push(['_trackPageview']);
// 
//   (function() {
//     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
//     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
//     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
//   })();

</script>

</head>
<body>
		<div id="degrad">
			<object class="corrig" type="image/svg+xml" data="images/degabc_tonone.svg" width="1182px" height="350px"> </object> 
		</div><!-- degrad -->
<hgroup>
<nav id="menuprincipal">
<ul class="menuprinc">
	<li class="menu1op"><a href="index.php#um">Home</a></li>
	<li><div class="separador">&nbsp;</div></li>
	<li class="menu2op"><a href="index.php#dois">sobre</a></li>
	<li><div class="separador">&nbsp;</div></li>
	<li class="menu3op"><a href="index.php#tres">As Nossas Cervejas</a></li>
	<li><div class="separador">&nbsp;</div></li>
	<li class="menu4op"><a href="index.php#quatro">Loja</a></li>
	<li><div class="logomenu">
	<object type="image/svg+xml" data="images/logoabcmenu.svg" width="114px" height="114px"> </object></div></li>
	<li class="menu45op"><a href="index.php#quatmeio">Tap House</a></li>
	<li><div class="separador2">&nbsp;</div></li>
	<li class="menu5op"><a href="index.php#cinco">Novidades & Dicas</a></li>
	<li><div class="separador2">&nbsp;</div></li>
	<li class="menu6op"><a href="index.php#seis">Contacto</a></li>
	<li><div class="separador2">&nbsp;</div></li>
	<li class="menu8op"><a href="#">pt</a>|<a href="#">eng</a></li>
</ul>
</nav>
	<div id="moldurpeq">
		<object type="image/svg+xml" data="images/molduraabcred.svg" width="985px" height="36px"> </object> 
	</div><!-- moldurpeq -->
</hgroup>
	<div id="dicasbloco">
	<div class="zeraestilos"></div>
		<div id="contdicas">
			<h1>AS NOSSAS DICAS</h1>
			<p>&nbsp;</p>
			<div id="coldicas">
					<a><img src="images/abc_simbolos_comonasce_verd.svg" width="156px" height="156px" onmouseover="this.src='images/abc_simbolos_comonasce.svg';document.getElementById('coldicastxt1').style.display = 'block';" onmouseout="this.src='images/abc_simbolos_comonasce_verd.svg';document.getElementById('coldicastxt1').style.display = 'none';" /></a>
				<h2>COMO NASCE <br>UMA ABC?<br><br></h2>
			</div>
			<div id="sepcoldicas" >&nbsp;
			</div>
			<div id="coldicas">
				<a><img src="images/abc_simbolos_copoideal_verd.svg" width="156px" height="156px" onmouseover="this.src='images/abc_simbolos_copoideal.svg';document.getElementById('coldicastxt2').style.display = 'block';" onmouseout="this.src='images/abc_simbolos_copoideal_verd.svg';document.getElementById('coldicastxt2').style.display = 'none';" /></a>
				<h2>CRAFT BEER:<br>O COPO IDEAL<br><br></h2>
			</div>
			<div id="sepcoldicas" >&nbsp;
			</div>
			<div id="coldicas">
				<a><img src="images/abc_simbolos_cervejasaude_verd.svg" width="156px" height="156px" onmouseover="this.src='images/abc_simbolos_cervejasaude.svg';document.getElementById('coldicastxt3').style.display = 'block';" onmouseout="this.src='images/abc_simbolos_cervejasaude_verd.svg';document.getElementById('coldicastxt3').style.display = 'none';" /></a>
				<h2>CERVEJA É <br>SAÚDE<br><br></h2>
			</div>
			<div id="sepcoldicas" >&nbsp;
			</div>
			<div id="coldicas">
				<a><img src="images/abc_simbolos_biersomellier_verd.svg" width="156px" height="156px" onmouseover="this.src='images/abc_simbolos_biersomellier.svg';document.getElementById('coldicastxt4').style.display = 'block';" onmouseout="this.src='images/abc_simbolos_biersomellier_verd.svg';document.getElementById('coldicastxt4').style.display = 'none';" /></a>
				<h2>O QUE É UM DIPLOM BIERSOMMELIER?<br><br></h2>
			</div>
			<div id="zeraestilos"></div>
			<div id="coldicastxt1">
					<p>A produção das cervejas ABC tem como base o padrão de qualidade criado na Alemanha em 1516 (“Reinheitsgebot”), uma lei secular que determina o uso específico de água, malte e lúpulo para a produção das cervejas. Uma Craft Beer ABC segue o método tradicional de fabrico em série que garante o mesmo sabor e textura em cada garrafa, proporcionando uma bebida com corpo, sabor e aroma únicos, só possível através da não pasteurização e não filtragem da cerveja. Neste processo só são utilizados ingredientes de alta qualidade, com uma apurada gestão de misturas e controlo de fermentação que garantem uma experiência completamente nova e de sabor incomparável. </p>
			</div>
			<div id="coldicastxt2">
				<p>Mais do que um belo efeito visual, os copos para degustar uma boa cerveja possuem padrões e formatos adequados para acentuar o sabor, o aroma e outras características que marcam a diferença. A forma de um copo também tem influencia na temperatura e na interação dos ingredientes de cada cerveja. Cada ABC possui um copo especial.</p>
			</div>
			<div id="coldicastxt3">
				<p>Ingerida de forma moderada, a cerveja pode ter benefícios para a sua saúde. Várias investigações internacionais garantem que ajuda a prevenir a doença de Alzheimer e outras demências. Para começar, uma boa cerveja não possui ingredientes químicos prejudiciais à saúde. Uma garrafa de cerveja é produzida a partir de elementos naturais como água, grãos de cevada maltados e lúpulo. Este último é o grande responsável pelo sabor e aroma desta bebida, com um teor e equilíbrio alcoólico muito menos agressivo. Por norma, uma verdadeira cerveja artesanal não tem corantes nem conservantes. 
<br>Veja aqui algumas informações úteis (Fonte:SAPOLifeStyle):
<br>•	Rica em silício, um mineral vital exigido pelo organismo para as articulações fortes e flexíveis, a cerveja torna os ossos mais fortes. A conclusão é de um estudo da Universidade de Tufts, EUA, publicado em 2009.
<br>•	Mais de 100 estudos internacionais garantem que esta bebida, consumida moderadamente, diminui a probabilidade de doenças cardiovasculares. A redução média situa-se entre os 25% e os 40%.
<br>•	Um estudo finlandês demonstrou que os homens que ingerem cerveja regularmente têm menos 40% de probabilidades de desenvolver cálculos renais. O forte teor de água desta bebida também favorece o funcionamento dos rins.
<br>•	Como impede a formação de coágulos sanguíneos, esta bebida à base de cereais ajuda a prevenir acidentes vasculares cerebrais, também conhecidos por AVC
<br>•	Quem bebe cerveja (moderadamente) tem menos possibilidades de desenvolver problemas de hipertensão arterial.<br><br><span class="bold">Agora basta encomendar uma ABC e saúde!</span></p>
			</div>
			<div id="coldicastxt4">
				<p>É um sommelier e ao mesmo tempo um embaixador de cerveja. Um profissional treinado e certificado que trabalha na indústria de bebidas alcoólicas especializada na produção e desenvolvimento da arte da cerveja. O conhecimento necessário para a certificação inclui uma compreensão de estilos, fabricação, ingredientes, história, vidros e embalagens, serviço e produção, projetos de sistemas, degustação e desenvolvimento de alimentos. A profissão é relativamente nova, mas crescente em todo o mundo. O Diplom Biersommelier Oficial da ABC é o seu fundador, o austríaco Reinhard Resel, residente em Sesimbra.</p>
			</div>
		</div>
	</div>
	<div class="zeraestilos"></div>
<script src="rodscripts/jquery-1.11.3.min.js"></script>
<script src="rodscripts/abc_rodscript.js"></script>
</body>
</html>
