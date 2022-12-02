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
			<object class="corrig" type="image/svg+xml" data="images/degabc_tonone.svg" width="100%" max-width="1182px" height="auto"> </object> 
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
	<div id="lojasbloco">
	<div class="zeraestilos"></div>
		<div id="contloja">
			<h1>PREENCHA A SUA CAIXA ABC</h1>
			<div id="lojaseleccx">
				<div id="lojaselecsetcx">
					<div id="lojaselecsetesq">
						<a href="#" onclick="return false;">
							<img src="images/transp.png" width="15px" height="25px" />
						</a>
					</div><!-- lojaselecsetesq -->
				</div><!-- lojaselecsetcx -->
				<div id="lojaselec">
					<a onclick="produtloja('lojaprodnum3');">
						<div id="lojaselecerv">
							<img src="images/ImagensGarrafasDoninhaCastanhaPeq.png" />
							<p>Doninha Castanha</p>
						</div>
					</a>
					<a onclick="produtloja('lojaprodnum1');">
						<div id="lojaselecerv">
							<img src="images/ImagensGarrafasMelroAzulPeq.png" />
							<p>Melro Azul</p>
						</div>
					</a>
					<a onclick="produtloja('lojaprodnum4');">
						<div id="lojaselecerv">
							<img src="images/ImagensGarrafasCorujaBrancaPeq.png" />
							<p>Coruja Branca</p>
						</div>
					</a>
					<a onclick="produtloja('lojaprodnum2');">
						<div id="lojaselecerv">
							<img src="images/ImagensGarrafasRaposaVermelhaPeq.png" />
							<p>Raposa Vermelha</p>
						</div>
					</a>
					<a onclick="produtloja('lojaprodnum6');">
						<div id="lojaselecerv">
							<img src="images/ImagensGarrafasFalcaoCinzentoPeq.png" />
							<p>Falcão Cinzento</p>
						</div>
					</a>
					<a onclick="produtloja('lojaprodnum5');">
						<div id="lojaselecerv">
							<img src="images/ImagensGarrafasPetiscaPeq.png" />
							<p>Petisca</p>
						</div>
					</a>
					<a onclick="produtloja('lojaprodnum6');">
						<div id="lojaselecerv">
							<img src="images/ImagensGarrafasTritaoPeq.png" />
							<p>Petisca</p>
						</div>

					</a>
				</div><!-- lojaselec -->
				<div id="lojaselecsetcx">
					<div id="lojaselecsetdir">
						<a href="#" onclick="return false;">
							<img src="images/transp.png" width="15px" height="25px" />
						</a>
					</div><!-- lojaselecsetdir -->
				</div><!-- lojaselecsetcx -->
			</div><!-- lojaselecsetcx -->
		</div><!-- contloja -->
	<div class="zeraestilos"></div>
			<div id="lojaprodcx">
				<div id="lojaprod">
					<div id="lojaprodnum1">
							<div id="lojaprodimg">
							<img src="images/ImagensGarrafasMelroAzul.jpg" />
							</div><!-- lojaseleccx -->
									<div id="lojaprodtext">
										<h3>MELRO AZUL <span class="subtitlojaprodtxt">Slow Wheat</span></h3>
										<p class="lojprodcorptxt">Cerveja de Trigo, do dourado ao amarelo palha na cor, de aparência turva. O trigo clareia o sabor global para que aromas subtis possam emergir das cepas de leveduras utilizadas como a banana.</p>
										<p class="sublinhalojprod"></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<p class="lojprodcorptxt">Características</p>
										<p></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Tipo:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Trigo</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Álcool % Vol:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">5.3%</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Plato:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">12.5%</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Ingredientes:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Água, Malta de Trigo e Cevada, Lúpulo e Levedura. <br>Sem filtragem e pasteurização.</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Volume/qtd.:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">0,33cl</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Tipo de tampa:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Tipo porcelana</div><!-- lojaprodtxtcx2 -->
										<p class="sublinhalojprod"></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<h4>2,54€</h4>
										<form id="lojaprodqts">
											<input type="hidden" name="preco1" id="preco1" value="2.54" />
											<input type="number" min="1" max="24" name="ljprdqts1" id="ljprdqts1" placeholder="00" class="lojaprdinpt" />
										</form>
										<div id="lojaprdbutas"><a href="#" onClick="adicionaprod('1');">Adicionar</a>
										</div>
									</div><!-- lojaprodtext -->
					</div><!-- lojaprodnum1 -->
					<div id="lojaprodnum2" style="display: none;">
							<div id="lojaprodimg">
							<img src="images/ImagensGarrafasRaposaVermelha.jpg" />
							</div><!-- lojaseleccx -->
									<div id="lojaprodtext">
										<h3>Raposa Vermelha <span class="subtitlojaprodtxt">Smart Ale</span></h3>
										<p class="lojprodcorptxt">Aparência âmbar bronze, de espuma cremosa e espessa. “Dry-Hopping” em combinação com carácter intenso a malte, numa composição de aromas complexos. Para degustadores.</p>
										<p class="sublinhalojprod"></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<p class="lojprodcorptxt">Características</p>
										<p></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Tipo:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Ale</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Álcool % Vol:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">5.9%</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Plato:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">13.8%</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Ingredientes:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Água, Malte de Cevada, Lúpulo e Levedura. Sem filtragem e pasteurização.</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Volume/qtd.:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">0,33cl</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Tipo de tampa:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Tipo porcelana</div><!-- lojaprodtxtcx2 -->
										<p class="sublinhalojprod"></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<h4>3,54€</h4>
										<form id="lojaprodqts">
											<input type="hidden" name="preco2" id="preco2" value="3.54" />
											<input type="number" min="1" max="24" name="ljprdqts2" id="ljprdqts2" placeholder="Qtds" class="lojaprdinpt" />
										</form>
										<div id="lojaprdbutas"><a href="#" onClick="adicionaprod('2');">Adicionar</a>
										</div>
									</div><!-- lojaprodtext -->
					</div><!-- lojaprodnum2 -->
					<div id="lojaprodnum3" style="display: none;">
							<div id="lojaprodimg">
							<img src="images/ImagensGarrafasDoninhaCastanha.jpg" />
							</div><!-- lojaseleccx -->
									<div id="lojaprodtext">
										<h3>Doninha Castanha <span class="subtitlojaprodtxt">Clever Pilsner</span></h3>
										<p class="lojprodcorptxt">Coloração ouro claro, de espuma branca e persistente. Agradável aroma de lúpulos nobres que contrasta com um toque amargor subtil. Corpo leve, perfeita para um aperitivo.</p>
										<p class="sublinhalojprod"></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<p class="lojprodcorptxt">Características</p>
										<p></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Tipo:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Pilsner</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Álcool % Vol:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">4.9%</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Plato:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">11.9%</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Ingredientes:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Água, Malte de Cevada, Lúpulo e Levedura. Sem filtragem e pasteurização.</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Volume/qtd.:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">0,33cl</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Tipo de tampa:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Tipo porcelana</div><!-- lojaprodtxtcx2 -->
										<p class="sublinhalojprod"></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<h4>1,54€</h4>
										<form id="lojaprodqts">
											<input type="hidden" name="preco3" id="preco3" value="1.54" />
											<input type="number" min="1" max="24" name="ljprdqts3" id="ljprdqts3" placeholder="Qtds" class="lojaprdinpt" />
										</form>
										<div id="lojaprdbutas"><a href="#" onClick="adicionaprod('3');">Adicionar</a>
										</div>
									</div><!-- lojaprodtext -->
					</div><!-- lojaprodnum3 -->
					<div id="lojaprodnum4" style="display: none;">
							<div id="lojaprodimg">
							<img src="images/ImagensGarrafasCorujaBranca.jpg" />
							</div><!-- lojaseleccx -->
									<div id="lojaprodtext">
										<h3>Coruja Branca<span class="subtitlojaprodtxt">Porter Spirit</span></h3>
										<p class="lojprodcorptxt">Típica Porter inglesa, atractivamente escura. Com característica encorporada e paladar seco, o seu aroma lembra avelã e café torrado. Colarinho espesso e cremoso.</p>
										<p class="sublinhalojprod"></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<p class="lojprodcorptxt">Características</p>
										<p></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Tipo:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Porter</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Álcool % Vol:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">5.3%</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Plato:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">12.9%</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Ingredientes:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Água, Malte de Cevada, Lúpulo e Levedura. Sem filtragem e pasteurização.</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Volume/qtd.:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">0,33cl</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Tipo de tampa:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Tipo porcelana</div><!-- lojaprodtxtcx2 -->
										<p class="sublinhalojprod"></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<h4>2,34€</h4>
										<form id="lojaprodqts">
											<input type="hidden" name="preco4" id="preco4" value="2.34" />
											<input type="number" min="1" max="24" name="ljprdqts4" id="ljprdqts4" placeholder="Qtds" class="lojaprdinpt" />
										</form>
										<div id="lojaprdbutas"><a href="#" onClick="adicionaprod('4');">Adicionar</a>
										</div>
									</div><!-- lojaprodtext -->
					</div><!-- lojaprodnum4 -->
					<div id="lojaprodnum5" style="display: none;">
						<div id="lojaprodimg">
						<img src="images/ImagensGarrafasPetisca.jpg" />
						</div><!-- lojaseleccx -->
								<div id="lojaprodtext">
									<h3>ABC Petisca<span class="subtitlojaprodtxt">Thyme Lager</span></h3>
									<p class="lojprodcorptxt">Lager com tomilho, de coloração cobre e espuma cremosa. Encorporada, o seu aroma lembra a ervas aromáticas, de malte ligeiramente intenso, harmonizada com o amargor do lúpulo.</p>
									<p class="sublinhalojprod"></p>
								</div><!-- lojaprodtext -->
								<div id="lojaprodtext">
									<p class="lojprodcorptxt">Características</p>
									<p></p>
								</div><!-- lojaprodtext -->
								<div id="lojaprodtext">
									<div id="lojaprodtxtcx1">Tipo:</div><!-- lojaprodtxtcx1 -->
									<div id="lojaprodtxtcx2">Lager</div><!-- lojaprodtxtcx2 -->
								</div><!-- lojaprodtext -->
								<div id="lojaprodtext">
									<div id="lojaprodtxtcx1">Álcool % Vol:</div><!-- lojaprodtxtcx1 -->
									<div id="lojaprodtxtcx2">5.1%</div><!-- lojaprodtxtcx2 -->
								</div><!-- lojaprodtext -->
								<div id="lojaprodtext">
									<div id="lojaprodtxtcx1">Plato:</div><!-- lojaprodtxtcx1 -->
									<div id="lojaprodtxtcx2">12.9%</div><!-- lojaprodtxtcx2 -->
								</div><!-- lojaprodtext -->
								<div id="lojaprodtext">
									<div id="lojaprodtxtcx1">Ingredientes:</div><!-- lojaprodtxtcx1 -->
									<div id="lojaprodtxtcx2">Água, Malte de Cevada, Lúpulo, Tomilho e Levedura. Sem filtragem e pasteurização.</div><!-- lojaprodtxtcx2 -->
								</div><!-- lojaprodtext -->
								<div id="lojaprodtext">
									<div id="lojaprodtxtcx1">Volume/qtd.:</div><!-- lojaprodtxtcx1 -->
									<div id="lojaprodtxtcx2">0,33cl</div><!-- lojaprodtxtcx2 -->
								</div><!-- lojaprodtext -->
								<div id="lojaprodtext">
									<div id="lojaprodtxtcx1">Tipo de tampa:</div><!-- lojaprodtxtcx1 -->
									<div id="lojaprodtxtcx2">Tipo porcelana</div><!-- lojaprodtxtcx2 -->
									<p class="sublinhalojprod"></p>
								</div><!-- lojaprodtext -->
								<div id="lojaprodtext">
									<h4>4,54€</h4>
									<form id="lojaprodqts">
										<input type="hidden" name="preco5" id="preco5" value="4.54" />
										<input type="number" min="1" max="24" name="ljprdqts5" id="ljprdqts5" placeholder="Qtds" class="lojaprdinpt" />
									</form>
									<div id="lojaprdbutas"><a href="#" onClick="adicionaprod('5');">Adicionar</a>
									</div>
								</div><!-- lojaprodtext -->
				</div><!-- lojaprodnum5 -->
					<div id="lojaprodnum6" style="display: none;">
							<div id="lojaprodimg">
							<img src="images/ImagensGarrafasFalcaoCinzento.jpg" />
							</div><!-- lojaseleccx -->
									<div id="lojaprodtext">
										<h3>Falcão Cinzento <span class="subtitlojaprodtxt">Hunter Pale Ale</span></h3>
										<p class="lojprodcorptxt">De coloração cobre e dourada, espuma cremosa e persistente. Aroma frutado e sabor ligeiramente malteado, equilibrado com a frescura do lúpulo. Amargor subtil com alto poder refrescante.</p>
										<p class="sublinhalojprod"></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<p class="lojprodcorptxt">Características</p>
										<p></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Tipo:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Ale</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Álcool % Vol:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">5.2%</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Plato:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">12.5%</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Ingredientes:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Água, Malte de Cevada, Lúpulo e Levedura. Sem filtragem e pasteurização.</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Volume/qtd.:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">0,33cl</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Tipo de tampa:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Tipo porcelana</div><!-- lojaprodtxtcx2 -->
										<p class="sublinhalojprod"></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<h4>3,54€</h4>
										<form id="lojaprodqts">
											<input type="hidden" name="preco6" id="preco6" value="3.54" />
											<input type="number" min="1" max="24" name="ljprdqts6" id="ljprdqts6" placeholder="Qtds" class="lojaprdinpt" />
										</form>
										<div id="lojaprdbutas"><a href="#" onClick="adicionaprod('6');">Adicionar</a>
										</div>
									</div><!-- lojaprodtext -->
					</div><!-- lojaprodnum6 -->
					<div id="lojaprodnum7" style="display: none;">
							<div id="lojaprodimg">
							<img src="images/ImagensGarrafasTritaoLaranja.jpg" />
							</div><!-- lojaseleccx -->
									<div id="lojaprodtext">
										<h3>Tritao Laranja <span class="subtitlojaprodtxt">Flashy IPA</span></h3>
										<p class="lojprodcorptxt">De coloração cobre e dourada, espuma cremosa e persistente. Aroma frutado e sabor ligeiramente malteado, equilibrado com a frescura do lúpulo. Amargor subtil com alto poder refrescante.</p>
										<p class="sublinhalojprod"></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<p class="lojprodcorptxt">Características</p>
										<p></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Tipo:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Ale</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Álcool % Vol:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">5.2%</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Plato:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">12.5%</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Ingredientes:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Água, Malte de Cevada, Lúpulo e Levedura. Sem filtragem e pasteurização.</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Volume/qtd.:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">0,33cl</div><!-- lojaprodtxtcx2 -->
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<div id="lojaprodtxtcx1">Tipo de tampa:</div><!-- lojaprodtxtcx1 -->
										<div id="lojaprodtxtcx2">Tipo porcelana</div><!-- lojaprodtxtcx2 -->
										<p class="sublinhalojprod"></p>
									</div><!-- lojaprodtext -->
									<div id="lojaprodtext">
										<h4>3,54€</h4>
										<form id="lojaprodqts">
											<input type="hidden" name="preco6" id="preco6" value="3.54" />
											<input type="number" min="1" max="24" name="ljprdqts6" id="ljprdqts6" placeholder="Qtds" class="lojaprdinpt" />
										</form>
										<div id="lojaprdbutas"><a href="#" onClick="adicionaprod('6');">Adicionar</a>
										</div>
									</div><!-- lojaprodtext -->
					</div><!-- lojaprodnum7 -->
				</div><!-- lojaprod -->
				<div id="lojaprodsep">
				
				</div><!-- lojaprodsep -->
				<div id="lojacompr">
					<div id="lojacomprcx1">
						<h3>CAIXA DE 24 UNIDADES</h3>
						<p class="lojcompcorptxt"><a a href="#" onClick="return false;"><img src="images/i_informacao.svg" class="nalinha" width="11px" height="11px" onmouseover="document.getElementById('inf').style.visibility='visible';" onmouseout="document.getElementById('inf').style.visibility='hidden';"></a> PREENCHA A SUA CAIXA ABC</p>
						<div id="inf">Clicar em cima da garrafa <br>na caixa para removê-la.</div>
						<p class="lojcompcorptxt"><br>Através deste website poderá encomendar o mínimo de 12 até 24 unidades de cervejas ABC por caixa. Componha uma ou mais caixas ABC ao seu gosto, proceda a encomenda e receberá os dados para pagamento via Multibanco, Visa ou Mastercard.</p>
						<p class="lojcompcorptxt">&nbsp;</p>
						<p class="lojcompcorptxt">&nbsp;</p>
						<p class="lojcompcorptxt">&nbsp;</p>
						<p class="lojcompcxtxt" id="nrCaixas" >1 caixa</p>
						<p class="lojcompcorptxt">&nbsp;</p>
						<p class="lojcompcorptxt">&nbsp;</p>
						<p class="lojcompcorptxt">Preço total:</p>
						<h5 id="totlcomp">000,00€</h5>
						<p class="lojcompiva">Inclui IVA à taxa legal em vigor.</p>
						<p class="lojcompiva">Portes já incluídos para Portugal Continental.</p>
						<div id="lojacmprbutas">
							<a href="#" onClick="compra();">Concluir</a>
						</div><!-- lojacmprbutas -->
						<form id = "compraform" method="post" action="compra.php">
						</form>
					</div><!-- lojacomprcx1 -->
					<div id="lojacomprcx2">
						<h3>Caixa <span id="nrcxcorr">1</span> de <span id="qtcx">1</span></h3>
						<p id="mensag" class="ljcmpmens">&nbsp;</p>
							<div id="ljcmpset">
								<div id="lojacompsetesq">
									<a href="#" onClick="return false;">
										<img src="images/transp.png" width="15px" height="25px" />
									</a>
								</div><!-- lojacompsetesq -->
							</div><!-- ljcmpset -->
						<div id="ljcmprgrade">
							<div id="garraf1">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf1 -->
							<div id="garraf2">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf2 -->
							<div id="garraf3">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf3 -->
							<div id="garraf4">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf4 -->
							<div id="garraf5">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf5 -->
							<div id="garraf6">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf6 -->
							<div id="garraf7">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf7 -->
							<div id="garraf8">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf8 -->
							<div id="garraf9">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf9 -->
							<div id="garraf10">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf10 -->
							<div id="garraf11">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf11 -->
							<div id="garraf12">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf12 -->
							<div id="caixcentro"></div><!-- caixacentro -->
							<div id="garraf13">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf13 -->
							<div id="garraf14">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf14 -->
							<div id="garraf15">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf15 -->
							<div id="garraf16">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf16 -->
							<div id="garraf17">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf17 -->
							<div id="garraf18">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf18 -->
							<div id="garraf19">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf19 -->
							<div id="garraf20">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf20 -->
							<div id="garraf21">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf21 -->
							<div id="garraf22">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf22 -->
							<div id="garraf23">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf23 -->
							<div id="garraf24">
								<div id="cervejas">
									<div id="nenhuma">
									</div><!-- nenhuma -->
									<div id="prod1" style="float: left; width: 20px; height: 19px; background: url(images/baseMelrAzul.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod1 -->
									<div id="prod2" style="float: left; width: 20px; height: 19px; background: url(images/baseRaposVermelh.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod2 -->
									<div id="prod3" style="float: left; width: 20px; height: 19px; background: url(images/baseDoninhCasth.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod3 -->
									<div id="prod4" style="float: left; width: 20px; height: 19px; background: url(images/baseCorujBranc.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod4 -->
									<div id="prod5" style="float: left; width: 20px; height: 19px; background: url(images/basePetisca.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod5 -->
									<div id="prod6" style="float: left; width: 20px; height: 19px; background: url(images/baseFalCinz.png) 2px 2px no-repeat;">
										<a href="#" onclick="retirarprod(this);">
											<img src="images/transp.png" width="20px" height="19px" />
										</a>
									</div><!-- prod6 -->
								</div><!-- cervejas -->
							</div><!-- garraf24 -->
						</div><!-- ljcmprgrade -->
							<div id="ljcmpset">
								<div id="lojacompsetdir">
									<a href="#" onClick="return false;">
										<img src="images/transp.png" width="15px" height="25px" />
									</a>
								</div><!-- lojacompsetdir -->
							</div><!-- ljcmpset -->
					</div><!-- lojacomprcx2 -->
				</div><!-- lojacompr -->
			</div><!-- lojaprodcx -->
	</div><!-- lojasbloco -->
	<div class="zeraestilos"></div>
<script src="rodscripts/jquery-1.11.3.min.js"></script>
<script src="rodscripts/abc_rodscript.js"></script>
<script type="text/javascript">
	iniciacesto();
</script>
</body>
</html>
