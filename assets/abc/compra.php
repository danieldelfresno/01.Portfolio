<?php
	session_start();
	if ($_SESSION['idade'] != "min18")
	{
	header ("location: index.php");
	}
	
	$vemdopost = $_POST;
	$produtos = array("1" => "Melro Azul", "2" => "Raposa Vermelha", "3" => "Doninha Castanha", "4" => "Coruja Branca", "5" => "Petisca", "6" => "Falcão Cinzento");
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
	<div id="comprasbloco">
	<div class="zeraestilos"></div>
		<div id="contloja">
			<div id="compracont">
				<h1>A Sua Encomenda ABC!</h1>
				<?php 
					$conta = 0;
					foreach ( $vemdopost as $entrada => $valor)
					{
						$retirar = "prod" . $conta . "_";
						$prod = str_replace($retirar,"",$entrada);
						// echo ( $retirar . "\n\r");
						if (!$produtos[$prod]) { 
							if ($entrada == "caixa") {
								if ($valor != 1) {
				?>
									</table>
				<?php
								}
				?>
							<table id="caixastab">
								<tr>
									<td id="cxtabprd">
										<p>
											<?php echo "<br>" . strtoupper($entrada) . "  " . $valor . "<br><br>"; ?>
										</p>
									</td>
									<td>
										<p>
										</p>
									</td>
									<td>
										<p>
										</p>
									</td>
								</tr>
				<?php
								
							} else {
				?>
									<tr>
										<td id="cxtabprd">
											<p>
												<?php echo "<br>" . strtoupper($entrada); ?>
											</p>
										</td>
										<td>
											<p>
											</p>
										</td>
										<td id="cxtabprec">
											<p>
												<?php echo "<br>" . $valor . "€" . "<br><br>"; ?>
											</p>
										</td>
									</tr>
								</table>
				<?php
							}
						} else {
				?>
									<tr>
										<td id="cxtabprd">
											<p>
												<?php echo ($produtos[$prod]); ?>
											</p>
										</td>
										<td id="cxtabsep">
											<p>
											</p>
										</td>
										<td id="cxtabprec">
											<p>
												<?php echo ($valor . "€") ?>
											</p>
										</td>
									</tr>
				<?php
						}
						// echo ( str_replace($retirar,"",$entrada) . "  " . $valor );
						$conta ++;
					}
				?>
				<h1>Introduza os Seus dados</h1>
				<div id="comprfc">
					<form id="fichaclinte" method="post" action="">
							<p class="encmditm">
								<input type="text" name="nome" id="nome" placeholder="NOME E APELIDO" class="fichclicmp" />
							</p>
							<p class="encmditm">
								<input type="text" name="morada" id="morada" placeholder="MORADA" class="fichclicmp" />
							</p>
							<p class="encmditm">
								<input type="text" name="codpost" id="codpost" placeholder="COD. POSTAL" class="fichclicmp fichclicmpcp" />
								<input type="text" name="localid" id="localid" placeholder="LOCALIDADE" class="fichclicmp fichclicmplc" />
							</p>
							<p class="encmditm">
								<input type="number" name="telmvel" id="telmvel" placeholder="TELEMÓVEL" class="fichclicmp" />
							</p>
							<p class="encmditm">
								<input type="text" name="email" id="email" placeholder="EMAIL" class="fichclicmp" />
							</p>
							<p class="encmditm">
								<input type="number" name="nif" id="nif" placeholder="NIF" class="fichclicmp" />
							</p>
<!-- 
							<p class="encmditm">
								<input id="guardardad" class="checkbox-custom" name="guardardad" type="checkbox">
								<label for="guardardad" class="checkbox-custom-label">Guardar os meus dados (requer utilizador e password).</label>
							</p>
							<p class="encmditm">
								<input type="text" name="utilizad" id="utilizad" placeholder="UTILIZADOR" class="fichclicmp" />
							</p>
							<p class="encmditm">
								<input type="password" name="paswod" id="paswod" placeholder="PASSWORD" class="fichclicmp" />
							</p>
 -->
					</form><!-- fichaclinte -->
					<div id="fichabutas">
						<a href="#" onClick="verifDadosEnc();">Finalizar</a>
					</div><!-- fichabutas -->
					<br><br>
				</div><!-- comprfc -->
				<div id="comprfcsep">
					&nbsp;
				</div><!-- comprfcsep -->
				<div id="comprfcmens">
					&nbsp;
				</div><!-- comprfcmens -->
			</div><!-- compracont -->

		<div class="zeraestilos"></div>
		</div><!-- contloja -->
	</div>
	<div class="zeraestilos"></div>
<script src="rodscripts/jquery-1.11.3.min.js"></script>
<script src="rodscripts/abc_rodscript.js"></script>
<script>
var $_POST = <?php echo json_encode($vemdopost); ?>;

function listAllProperties(o){     
	var objectToInspect;     
	var result = [];
	
	for(objectToInspect = o; objectToInspect !== null; objectToInspect = Object.getPrototypeOf(objectToInspect)){  
		result = result.concat(Object.getOwnPropertyNames(objectToInspect));  
	}
	
	return result; 
}

console.log(listAllProperties($_POST));
//document.write($_POST["caixa"]);
//console.log($_POST.join('\n'));
 console.log($_POST.caixa);
// console.log(Object.getPrototypeOf($_POST));
// console.log(Object.keys($_POST));
// console.log(Object.getOwnPropertyNames($_POST));
// console.log(Object.valueOf($_POST));
// console.log(Object.getOwnPropertyDescriptor($_POST));
</script>
</body>
</html>
