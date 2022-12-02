function escolhanao() {
//	alert('aaa');
	document.getElementById('sobesobe').innerHTML = "<p class='textvalid'>Sem acesso ao site. Obrigado</>";
}

function trocfund() {
	document.getElementById('primeibloco').style.background = "url(images/fu01abc-2.jpg) no-repeat";
	document.getElementById('moldursvg').setAttribute('data', 'images/molduraabcsemlupulos.svg');
}

function moveprod(direc, largura, distaandar, divmasq) {
	divamexer = document.getElementById(divmasq);
	divamexer.style.position = 'relative'; 
	divamexerPosEsq = divamexer.offsetLeft;
	divamexerPosDir = divamexerPosEsq+divamexer.offsetWidth;
	larguramendist = largura - distaandar;
	posicaofinal = (divamexerPosEsq + distaandar * direc) + 'px';
	if (direc < 0 && divamexerPosDir > larguramendist) {
		animDesloc(divamexer, divamexerPosEsq, distaandar, direc);
//		divamexer.style.left = posicaofinal;
	}
	if (direc > 0 && divamexerPosEsq < 0){
		animDesloc(divamexer, divamexerPosEsq, distaandar, direc);
//		divamexer.style.left = posicaofinal;
	}
}

function animDesloc(proDiv, proPosIn, disPix, dirAnd) {
	clearInterval(nIntervId);
	durAnim = 1000;
	var animAcao = null,
		tempIni = (new Date).getTime(),
		tempPassou = null,
		movim = null;
	animAcao = setInterval(function() {
		tempPassou = (new Date).getTime() - tempIni;
		
		if( tempPassou < durAnim ) { // Fazer a animação
			passApass = tempPassou / durAnim * disPix;
			posFinal = proPosIn + (passApass*dirAnd);
			proDiv.style.left = posFinal + 'px';

		} else { // Parar a animação
			clearInterval(animAcao);
			proDiv.style.left = (proPosIn+disPix*dirAnd) + 'px';
		}

	}, 5);
	corrocImg();
}


function popups(cervej) {
//	alert(cervej);
	divconteu = document.getElementById('janelafull');
	divconteu.style.display = "block";
	document.getElementById('contudomasq').style.left = cervej + 'px';
	return true;
}

function popupsfe() {
	divconteu = document.getElementById('janelafull');
	divconteu.style.display = "none";
	return true;
}

function produtloja(prodmostr) {
	document.getElementById('lojaprodnum1').style.display = "none";
	document.getElementById('lojaprodnum2').style.display = "none";
	document.getElementById('lojaprodnum3').style.display = "none";
	document.getElementById('lojaprodnum4').style.display = "none";
	document.getElementById('lojaprodnum5').style.display = "none";
	document.getElementById('lojaprodnum6').style.display = "none";
	produto = prodmostr.replace('lojaprodnum','');
	document.getElementById(prodmostr).style.display = "block";
//	console.log(produto);
//	alert(prodmostr);
	
}

function iniciacesto() {
	cesto = [[]];
	caixas = 1;
	caixacorr = 1;
	valorcesto = 0;
}

function actuCaixaVal(prdrt) {
	var prcprd = document.getElementById('preco' + prdrt);
	valorcesto = somaDecimal(valorcesto, ((numTroqVirPont(prcprd.value))*-1) ,2);
	valrcestimp = numTroqPontVir(valorcesto.toString());
	document.getElementById('totlcomp').innerHTML = valrcestimp + "€";
	console.log(valorcesto);
	console.log(valrcestimp);
}

function actuCaixa() {
	for ( i = 0; i < 24; i++ ) {
		poscaixa = "garraf" + (i+1);
		divAactua = document.getElementById(poscaixa).getElementsByTagName("div")[0];
//		divAactua = document.getElementById(poscaixa).childNodes[1];
		divAactua.style.left = "0px";
//		console.log(poscaixa);
//		console.log(divAactua);
	}
	cesto[caixacorr-1].forEach(function (item, index) {
		poscaixa = "garraf" + (index+1);
		divAactua = document.getElementById(poscaixa).getElementsByTagName("div")[0];
		posprod = (item*20*-1) + "px";
		divAactua.style.left = posprod;
//		console.log(poscaixa);
//		console.log(item, index);
	});
}

function adicionaprod(prodnum) {
	var qt = document.getElementById('ljprdqts' + prodnum);
	var prc = document.getElementById('preco' + prodnum);
//	console.log(qt.value + '\n' + prodnum + '\n' + prc.value + '\n' + prc.value*qt.value + '\n' + numTroqPontVir(prc.value));
	if (qt.value == "" || qt.value == null || isNaN(qt.value)) {console.log("não fazer nada!");}
	else {
		for (var i = 0; i < qt.value; i++) {
			if ((cesto[caixacorr-1].length+1) < 25) {
				cesto[caixacorr-1].push(prodnum);
				valorcesto = somaDecimal(valorcesto, numTroqVirPont(prc.value) ,2);
				console.log(cesto[caixacorr-1] + "\n" + numTroqVirPont(prc.value) + "\n" + valorcesto + "\n" + (cesto[caixacorr-1].length));
			}
		}
//	document.getElementById('nrCaixas').innerHTML = "caixote<br>ou dois";
//	valorcesto = numTroqPontVir(valorcesto.toString());
	valrcestimp = numTroqPontVir(valorcesto.toString());
	document.getElementById('totlcomp').innerHTML = valrcestimp + "€";
//	console.log("cena feita.");
	}
	qt.value = "";
	actuCaixa();
}

function retirarprod(elemento) {
	var parente = elemento.parentNode;
	prodret = +(parente.id.replace("prod", ""));
	posgarraf = +(parente.parentNode.parentNode.id.replace("garraf", ""))-1;
	cesto[caixacorr-1].splice(posgarraf,1);
// 	console.log(parente.id);
// 	console.log(parente.parentNode.id);
// 	console.log(parente.parentNode.parentNode.id);
// 	console.log(prodret);
// 	console.log(posgarraf);
	actuCaixaVal(prodret);
	actuCaixa();
}

function compra() {
//	var cesto = [1, 2, 3, 4, 5, 6, 7];
//	cesto.push([]);
//	console.log(cesto.join('\n'));
	var campmens = document.getElementById("mensag");
	var mens = "";
	if (cesto.length > 1 && cesto[cesto.length-1].length == 0) {
		cesto.splice(cesto.length-1,1); 
		console.log("maior que 1");
	}
	if (cesto[cesto.length-1].length < 12) {
		mens = "A Caixa " + cesto.length + " só tem " + cesto[cesto.length-1].length + " unidades.";
		campmens.innerHTML = mens;
		return;
	}

	var nrcampo = 1;
	var elmpracrelm = document.getElementById("compraform");
	cesto.forEach(function (item, index) {
			var input = document.createElement("input");
				input.type = "hidden";
				input.name = "caixa";
				input.id = "caixa";
				input.value = index+1;
				elmpracrelm.appendChild(input);
		
		item.forEach(function (item, index) {
			var prcval = document.getElementById('preco' + item);
				prcval = numTroqVirPont(prcval.value);
			var input = document.createElement("input");
				input.type = "hidden";
				input.name = "prod" + (index+1) + "_" + item;
				input.id = "prod" + (index+1) + "_" + item;
				input.value = prcval;
				elmpracrelm.appendChild(input);
		});
	});
	
			var input = document.createElement("input");
				input.type = "hidden";
				input.name = "total";
				input.id = "total";
				input.value = valorcesto;
				elmpracrelm.appendChild(input);
	
	if (nrcampo == 0) {
		mens = "cheguei aqui"; campmens.innerHTML = mens; return;
	}
	document.forms["compraform"].submit();
}

function regista() {
	var mensa = "";
	camp1 = document.forms["fichaclinte"]["nome"].value;
	camp2 = document.forms["fichaclinte"]["morada"].value;
	camp3 = document.forms["fichaclinte"]["codpost"].value;
	camp4 = document.forms["fichaclinte"]["telmvel"].value;
	camp5 = document.forms["fichaclinte"]["email"].value;
	camp6 = document.forms["fichaclinte"]["nif"].value;
	camp7 = document.forms["fichaclinte"]["guardardad"].checked;
	camp8 = document.forms["fichaclinte"]["utilizad"].value;
	camp9 = document.forms["fichaclinte"]["paswod"].value;
	
// 	^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,63}$
	
	
	var email_re = new RegExp(/[A-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[A-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|gov|mil|biz|info|mobi|name|aero|jobs|museum)\b/i);
	if (!email_re.test(camp5)) {
		mensa = "Email incorrecto.<br>";
	}
	
	if (mensa != "") {
		document.getElementById("comprfcmens").style = "color: #f00";
		document.getElementById("comprfcmens").innerHTML = mensa;
	} else {
		document.getElementById("comprfcmens").style = "color: #447f3b";
		document.getElementById("comprfcmens").innerHTML = "Tudo OK";
	}
	console.log("regista   " + camp8 + "\n" + camp7);
	console.log(mensa);
}

function verifDadosEnc() {
	var mensa = "";
	camp1 = document.forms["fichaclinte"]["nome"].value;
	camp2 = document.forms["fichaclinte"]["morada"].value;
	camp3 = document.forms["fichaclinte"]["codpost"].value;
	camp4 = document.forms["fichaclinte"]["telmvel"].value;
	camp5 = document.forms["fichaclinte"]["email"].value;
	camp6 = document.forms["fichaclinte"]["nif"].value;
	
// 	^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,63}$
	
	
	var email_re = new RegExp(/[A-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[A-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|gov|mil|biz|info|mobi|name|aero|jobs|museum)\b/i);
	if (!email_re.test(camp5)) {
		mensa = "Email incorrecto.<br>";
	}
	
	if (mensa != "") {
		mensa +="<br> Corrija os erros e submenta outra vez, por favor.";
		document.getElementById("comprfcmens").style = "color: #f00";
		document.getElementById("comprfcmens").innerHTML = mensa;
	} else {
		document.getElementById("comprfcmens").style = "color: #447f3b";
		document.getElementById("comprfcmens").innerHTML = "Tudo OK";
	}
	console.log(mensa);
}


function numTroqVirPont(num) { //transforma em numero de javascript que usa o (.) como separador decimal
	return +(num.replace(",", "."));
}

function numTroqPontVir(numero) { //transforma um numero com ponto decimal em texto com virgula decimal
	return numero.replace(".", ",");
}

function somaDecimal(a, b, precision) { // precision é no número de casas decimais da soma
	var x = Math.pow(10, precision || 2);
	return (Math.round(a * x) + Math.round(b * x)) / x;
}

document.getElementById('janelafull').onclick = function(e) {
	if(e.target != document.getElementById('setaesqmod') && e.target != document.getElementById('setadirmod')) {
//		alert('You clicked outside.');
		popupsfe();
	}
}


var nIntervId;
var homeImgId = 1;

function corrocImg() {
	clearInterval(nIntervId);
	nIntervId = setInterval(mudaImag, 10000);
}

function mudaImag() {
	var imgActu = "homeimg" + homeImgId;
	var imgNov = "homeimg" + (homeImgId+1 > 3 ? 1 : homeImgId+1);
//	console.log(homeImgId+"\n");
	oElem = document.getElementById(imgActu);
	oElemNov = document.getElementById(imgNov);

	animOpaci();

	for ( i = 1; i < 4; i++ ) {
		var bolaOn = imgNov.slice(-1);
		var bolaById = "bolhom" + i;
		i == bolaOn ? document.getElementById(bolaById).className = "bolashome": document.getElementById(bolaById).className = "bolashomeOff" ;
	}
	
	homeImgId = homeImgId+1 > 3 ? homeImgId = 1 : homeImgId+1;
//	console.log(imgActu + "\n" + imgNov + "\n" + homeImgId);
}

function mudaImagMan(man) {
	var imgActu = "homeimg" + homeImgId;
	var imgNov = "homeimg" + man;
//	console.log(homeImgId+"\n");
	oElem = document.getElementById(imgActu);
	oElemNov = document.getElementById(imgNov);

	animOpaci();

	for ( i = 1; i < 4; i++ ) {
		var bolaOn = imgNov.slice(-1);
		var bolaById = "bolhom" + i;
		i == bolaOn ? document.getElementById(bolaById).className = "bolashome": document.getElementById(bolaById).className = "bolashomeOff" ;
	}
	
	homeImgId = man;
//	console.log(imgActu + "\n" + imgNov + "\n" + homeImgId);
}



function animOpaci() {
	clearInterval(nIntervId);
	quantidade = 1;
	duracao = 3000;
	var animador = null,
		horaComeco = (new Date).getTime(),
		quantPassou = null,
		fraccao = null,
		apArece = null,
		apAga = null;
//		console.log(horaComeco + "\n" + quantPassou + "\n");
	animador = setInterval(function() {
		quantPassou = (new Date).getTime() - horaComeco;
//		console.log(horaComeco + "\n" + quantPassou + "\n");
		if( quantPassou < duracao ) { // Fazer a animação
			fraccao = quantPassou / duracao * quantidade;
			apArece = fraccao;
			apAga = 1-fraccao;
			oElem.style.opacity = apAga;
			oElemNov.style.opacity = apArece;
//			console.log(apAga + "\n" + apArece + "\n");
		} else { // Parar a animação
			clearInterval(animador);
			oElem.style.opacity = 0;
			oElemNov.style.opacity = 1;
		}
	}, 5);
	corrocImg();
}

function stopcorrocImg() {
	clearInterval(nIntervId);
}


function vaiParaNaJanela(sitio) {
	var cordJan = Number(sitio);
	console.log(sitio, cordJan);
	window.scrollTo(0, cordJan);
	console.log(window.scrollY);
}

function focusOnElement(element_id) {
	$('#div_' + element_id).goTo(); // need to 'go to' this element
}

function burger() {
    var x = document.getElementById("mynavi");
    if (x.className === "navi") {
        x.className += " responsive";
    } else {
        x.className = "navi";
    }
}

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("topbtn").style.display = "block";
    } else {
        document.getElementById("topbtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	var elmnt = document.getElementById("primeibloco");
    // elmnt.scrollIntoView();
    // elmnt.scrollIntoView(false);
	// elmnt.scrollIntoView({block: "top"});
	elmnt.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
    // document.body.scrollTop = 0;
    // document.documentElement.scrollTop = 0;
}

function scrollToTop() {
    var elmnt = document.getElementById("segundbloco");
    // elmnt.scrollIntoView();
    // elmnt.scrollIntoView(false);
	// elmnt.scrollIntoView({block: "top"});
	elmnt.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
}

function scrollToTop1() {
    var elmnt = document.getElementById("terceibloco");
    // elmnt.scrollIntoView();
    // elmnt.scrollIntoView(false);
	// elmnt.scrollIntoView({block: "top"});
	elmnt.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
}

function scrollToTop2() {
    var elmnt = document.getElementById("quartbloco");
    // elmnt.scrollIntoView();
    // elmnt.scrollIntoView(false);
	// elmnt.scrollIntoView({block: "top"});
	elmnt.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
}

function scrollToTop3() {
    var elmnt = document.getElementById("quatmeiobloco");
    // elmnt.scrollIntoView();
    // elmnt.scrollIntoView(false);
	// elmnt.scrollIntoView({block: "top"});
	elmnt.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
}

function scrollToTop4() {
    var elmnt = document.getElementById("cincbloco");
    // elmnt.scrollIntoView();
    // elmnt.scrollIntoView(false);
	// elmnt.scrollIntoView({block: "top"});
	elmnt.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
}

function scrollToTop5() {
    var elmnt = document.getElementById("copyright");
    // elmnt.scrollIntoView();
    // elmnt.scrollIntoView(false);
	// elmnt.scrollIntoView({block: "top"});
	elmnt.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
}

//// Sobre page Animation

$(document).ready(function(){
	var blocos = "#primeibloco, #segundbloco, #terceibloco, #quartbloco, #quatmeiobloco, #cincbloco, #seisbloco";
	var animate = "animated fadeOutRight";
	var anisobre = "animated fadeInDown";
	$("#contsegund a").click(function(){
		var frontpage = $(blocos).addClass(animate);
		setTimeout(() => {
			$(blocos).css("display", "none");
			$(blocos).removeClass(animate);
		topFunction();

		}, 1000);
		$(".sobre").css("display", "block");
		setTimeout(() => {
			$(".sobre").addClass(anisobre);
		}, 1000);
		setTimeout(() => {
			$(".sobre").removeClass(anisobre);
		}, 2000);
	});
});
$(document).ready(function(){
	var blocos = "#primeibloco, #segundbloco, #terceibloco, #quartbloco, #quatmeiobloco, #cincbloco, #seisbloco";
	$("#homebtn").click(function(){
		$(".sobre").addClass("animated fadeOutUp");
		setTimeout(() => {
			$(".sobre").css("display", "none");
			$(blocos).css("display", "block");
			$(".sobre").removeClass("animated fadeOutUp");
		}, 1000);
		setTimeout(() => {
			$(blocos).addClass("animated fadeInRight");
		}, 1000);
		setTimeout(() => {
			$(blocos).removeClass("animated fadeInRight");
			$(".sobre").removeClass("animated fadeOutUp");
			topFunction();
		}, 2000);
	});
});

//// Sobre page Animation END

//// Blocks Animation

$(document).ready(function(){
	var time = 1000;
	var animate = "animated fadeInDown";
	$(".navileft li:nth-child(1)").click(function(){
		var header = $("#segundbloco").addClass(animate);
		setTimeout(function() {
			header.removeClass(animate);
		}, time);
	});
	$(".navileft li:nth-child(2)").click(function(){
		var header = $("#terceibloco").addClass(animate);
		setTimeout(function() {
			header.removeClass(animate);
		}, time);
	});
	$(".navileft li:nth-child(3)").click(function(){
		var header = $("#quartbloco").addClass(animate);
		setTimeout(function() {
			header.removeClass(animate);
		}, time);
	});
	$(".navileft li:nth-child(4)").click(function(){
		var header = $("#quatmeiobloco");
		setTimeout(function() {
			header.addClass(animate);
		}, 200);
		setTimeout(function() {
			header.removeClass(animate);
		}, 1400);
	});
	$(".naviright li:nth-child(1)").click(function(){
		var header = $("#cincbloco");
		setTimeout(function() {
			header.addClass("animated fadeInDown");
		}, 400);
		setTimeout(function() {
			header.removeClass(animate);
		}, 1500);
	});
	$(".naviright li:nth-child(2)").click(function(){
		var header = $(".ljrdpeh");
		setTimeout(function() {
			header.addClass("animated fadeInDown");
		}, 500);
		setTimeout(function() {
			header.removeClass(animate);
		}, 1600);
	});
});