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
	<li class="menu5op"><a href="index.php#cinco">Novidades & Dicas</a></li>
	<li><div class="separador2">&nbsp;</div></li>
	<li class="menu6op"><a href="index.php#seis">Contacto</a></li>
	<li><div class="separador2">&nbsp;</div></li>
	<li class="menu7op"><a href="#">LogIn</a></li>
	<li><div class="separador2">&nbsp;</div></li>
	<li class="menu8op"><a href="#">pt</a>|<a href="#">eng</a></li>
</ul>
</nav>
	<div id="moldurpeq">
		<object type="image/svg+xml" data="images/molduraabcred.svg" width="985px" height="36px"> </object> 
	</div><!-- moldurpeq -->
</hgroup>
	<div id="sobrebloco">
	<div class="zeraestilos"></div>
		<div id="contlojas">
			<h1>ONDE ENCONTRAR O SABOR ABC</h1>
			<p>&nbsp;</p>
			<div id="ljcentro">
				<h1>CENTRO</h1>
				<h2>Nome</h2>
				<p>Morada | Telefone</p>
				<p><a href="http://www.website.pt">www.website.pt</a> | GPS 38.4444° N, 9.1014° W</p>
				<h2>Nome</h2>
				<p>Morada | Telefone</p>
				<p><a href="http://www.website.pt">www.website.pt</a> | GPS 38.4444° N, 9.1014° W</p>
				<h2>Nome</h2>
				<p>Morada | Telefone</p>
				<p><a href="http://www.website.pt">www.website.pt</a> | GPS 38.4444° N, 9.1014° W</p>
				<h2>Nome</h2>
				<p>Morada | Telefone</p>
				<p><a href="http://www.website.pt">www.website.pt</a> | GPS 38.4444° N, 9.1014° W</p>
				<h2>Nome</h2>
				<p>Morada | Telefone</p>
				<p><a href="http://www.website.pt">www.website.pt</a> | GPS 38.4444° N, 9.1014° W</p>
				<h2>Nome</h2>
				<p>Morada | Telefone</p>
				<p><a href="http://www.website.pt">www.website.pt</a> | GPS 38.4444° N, 9.1014° W</p>
				<h2>Nome</h2>
				<p>Morada | Telefone</p>
				<p><a href="http://www.website.pt">www.website.pt</a> | GPS 38.4444° N, 9.1014° W</p>
			</div>
			<div id="ljnortsul">
				<div id="ljnort">
				<h1>NORTE</h1>
				<h2>Em fermentação</h2>
				</div>
				<div id="ljsul">
				<h1>SUL</h1>
				<h2>Em fermentação</h2>
				</div>
			</div>
		</div>
		<div id="ljrdpeh">
			<p>(Para entrar na rede, contacte a ABC através do e-mail <a href="mailto:comercial@arrabidabeercompany.pt">comercial@arrabidabeercompany.pt</a>)</p>
		</div>
	</div>
	<div class="zeraestilos"></div>
<script src="rodscripts/jquery-1.11.3.min.js"></script>
<script src="rodscripts/abc_rodscript.js"></script>
</body>
</html>
