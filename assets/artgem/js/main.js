var myVar;

// function pageLoader() {
//   myVar = setTimeout(showPage, 500);
// }

// function showPage() {
//   // document.getElementById("loader").style.display = "none";
//   for (var i = 1; i < 5; ++i) {
//     document.getElementById("show" + [i]).style.display = "block";
//   }
// }

$(document).ready(function () {
  $(".search input:nth-child(2)").click(function () {
    $(this).parent().toggleClass("searchopenned");
  });
});

$(document).ready(function () {
  $("#checkoutbt").click(function () {
    $(".zigzagdown").addClass("rotatedown");
    $(".zigzagup").addClass("rotateup");
    $(this).toggle(500);
    $("#userform").toggle(500);
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $("#userform").offset().top,
      },
      1500
    );
  });
});

$(".regular").slick({
  dots: true,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
});

// $(".slider").slick({
//   // normal options...
//   infinite: false,
//   // the magic
//   responsive: [{
//       breakpoint: 1024,
//       settings: {
//         slidesToShow: 3,
//         infinite: true
//       }
//     }, {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 2,
//         dots: true
//       }
//     }, {
//       breakpoint: 300,
//       settings: "unslick" // destroys slick
//     }]
// });

$("#burger").click(function () {
  $(".menulinks,.login,.basket,.search").toggle(100);
});

$("#cart, .shopping-cart").hover(function () {
  $(".shopping-cart").toggle();
});

$("#logindrop, .loginmenu").hover(function () {
  $(".loginmenu").toggle();
});

var portraits = [
  {
    image: "assets/portraits/1ikylk2edjk01.jpg",
    name: "Japanese Fighter",
    reference: 891723465,
    price: "14,99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/portraits/2svl1bb5jqd31.jpg",
    name: "Megan Williams",
    reference: 765675785,
    price: "19,99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/portraits/327b82e7e104a1724c94042dd9c9fcb6.jpg",
    name: "Emily Johnson",
    reference: 876786786,
    price: "19,99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/portraits/Chunli_SFV_1.jpg",
    name: "Jessica Miller",
    reference: 876867867,
    price: "14,99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/portraits/marvel-comics1t.jpg",
    name: "Rebecca Smith",
    reference: 453453543,
    price: "19,99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/portraits/Pepper_Freedom_2.jpg",
    name: "Elizabeth Blaese",
    reference: 089767476,
    price: "14,99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/portraits/Pepper_Sunkiss_2.jpg",
    name: "Hannah Davis",
    reference: 345689968,
    price: "11,99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/portraits/PepperLove2016_2.jpg",
    name: "Lauren Taylor",
    reference: 134689867,
    price: "19,99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/portraits/PepperMuse2.jpg",
    name: "Katherine Moore",
    reference: 235687545,
    price: "14,99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/portraits/PepperSpin2.jpg",
    name: "Amber Wilson",
    reference: 909867345,
    price: "11,99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/portraits/supergirl_20.jpg",
    name: "Danielle Brown",
    reference: 345634563,
    price: "14,99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/portraits/PepperSummer2.jpg",
    name: "Pepper Summer",
    reference: 128904737,
    price: "11,99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
];

var frames = [
  {
    image: "assets/frames/2eefc4b3-61d4-4fb0-8f2a-5cb10bc4811d_rw_19202.jpg",
    name: "Wonder Woman",
    reference: 198470129,
    price: "29.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/frames/93ead7a9-da53-4980-9ffd-0a010cf4447a_rw_19202.jpg",
    name: "Knight Archer",
    reference: 908273458,
    price: "29.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/frames/182ddf4c-0d41-4ab7-88cb-a9042e6b3bcf_rw_19202.jpg",
    name: "Sword Armer",
    reference: 982346576,
    price: "29.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/frames/catwoman-artgerm-15-header.jpg",
    name: "Cat Woman",
    reference: 923986746,
    price: "29.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/frames/ComicsGallery_DC2.jpg",
    name: "Super Girl",
    reference: 9184578645,
    price: "29.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/frames/marvel-comics-1000-artgerm-set1.jpg",
    name: "Storm",
    reference: 09027348579,
    price: "29.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
];

var posters = [
  {
    image: "assets/posters/0be6c9babe179518-StanleyLau_first.jpg",
    name: "Forest Babe",
    reference: 09782340890,
    price: "24.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/posters/3b9.jpg",
    name: "Chun-Li Style",
    reference: 7651213498,
    price: "24.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/posters/5d433d69c2c0e.jpg",
    name: "Lindsay Clover",
    reference: 1092638726,
    price: "24.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/posters/327b82e7e104a1724c94042dd9c9fcb6.jpg",
    name: "Wonder Woman",
    reference: 20978349083,
    price: "24.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/posters/38493zsnojw01.jpg",
    name: "Super Girl",
    reference: 4980438590,
    price: "24.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/posters/1767540_xl2.jpg",
    name: "Dark Woman",
    reference: 7980234890,
    price: "24.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/posters/CW11b.jpg",
    name: "Cat Woman",
    reference: 88127367868,
    price: "24.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/posters/DkcgRCkUUAEnrE3.jpg",
    name: "Super Witch",
    reference: 12837913478,
    price: "24.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/posters/DryKA8GV4AA_v0V2.jpg",
    name: "Disco Girl",
    reference: 7263748676,
    price: "24.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/posters/elsa_s_new_dress_by_artgerm_dbde71g-pre.jpg",
    name: "Elsa",
    reference: 83748923478,
    price: "24.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/posters/sep190513__29562.1567435011.jpg",
    name: "Warrior Girl",
    reference: 09723489754,
    price: "24.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
  {
    image: "assets/posters/supergirl_20_by_artgerm_dc994b6-fullview.jpg",
    name: "Super Girl",
    reference: 09234768888,
    price: "24.99€",
    sizes: ["2000X1500", "1500X1000", "800X350"],
  },
];
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    var myArr = JSON.parse(this.responseText);
    document.getElementById("demo").innerHTML = myArr;
  }
};
xmlhttp.open("GET", "products.json", true);
xmlhttp.send();

function addgrid() {
  var grid = document.getElementById("grid-container");
  grid.innerHTML +=
    '<a class="image1" href="details.html?ref=' +
    posters[1].reference +
    '"><img src=' +
    posters[1].image +
    ' alt=""></img></a>';
  for (g = 3; g < 11; ++g) {
    grid.innerHTML +=
      "<a class=\"image'" +
      [g] +
      '" href="details.html?ref=' +
      portraits[g].reference +
      '"><img src=' +
      portraits[g].image +
      ' alt=""></img>';
  }
  grid.innerHTML +=
    '<a class="image10" href="details.html?ref=' +
    posters[2].reference +
    '"><img src=' +
    posters[2].image +
    ' alt=""></img>';
}

var databases = [frames, portraits, posters];
var urlQueryString = new URLSearchParams(window.location.search);
var ref = urlQueryString.get("ref");
// var ref = GetParameterValues('ref'); /////jquery
function additem() {
  var y = 0;
  while (y < databases.length) {
    for (var x = 0; x < databases[y].length; ++x) {
      if (ref == databases[y][x].reference) {
        if (databases[y] == frames) {
          var element = document.getElementById("traitimg");
          element.classList.add("nodibimg");
          var element = document.getElementById("traitinfo");
          element.classList.add("nodibinfo");
        }
        document.getElementById("traitimg").innerHTML +=
          "<img src=" + databases[y][x].image + ' alt=""></img>';
        var det = document.getElementById("traitinfo");
        det.innerHTML += "<h1>" + databases[y][x].name + "</h1>";
        det.innerHTML += "<p>Article nr: " + ref + "</p>";
        det.innerHTML += "<h3>Starts from " + databases[y][x].price + "</h3>";
        det.innerHTML += "<h2>Sizes</h2>";
        det.innerHTML += "<p>2000X1500cm - 1500X1000cm - 800X350cm</p>";
        det.innerHTML += "<button>Add to Basket</button>";
      }
    }
    ++y;
  }
}

var refdb = urlQueryString.get("db");
var usedb = window[refdb];

function addproducts() {
  for (var h = 0; h < usedb.length; ++h) {
    if (usedb == portraits || usedb == posters) {
      document.getElementById("posts").innerHTML += '<div class="col"></div>';
    } else {
      document.getElementById("posts").innerHTML += '<div class="col2"></div>';
    }
  }
  for (var c = 0; c < usedb.length; ++c) {
    var ins = document.getElementById("posts").childNodes[c + 1];
    ins.innerHTML +=
      '<a id="insimg' +
      [c + 1] +
      '" href="details.html?ref=' +
      usedb[c].reference +
      '"></a>';
    ins.innerHTML += "<h3>" + usedb[c].name + "</h3>";
    ins.innerHTML += "<h4>" + usedb[c].price + "</h4>";
  }
  for (var k = 0; k < usedb.length + 1; k++) {
    document.getElementById("insimg" + [k + 1]).innerHTML +=
      "<img src=" + usedb[k].image + ' alt="">';
  }
}
