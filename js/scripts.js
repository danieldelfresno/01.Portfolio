'strict'

const date = new Date()
let year = date.getFullYear()
const yeartxt = document.querySelector('.year')

yeartxt.innerHTML = year

const headeritems = document.querySelectorAll('.navitem a p')
// header.addEventListener("click", neondown);

headeritems.forEach((e) => e.addEventListener('click', neondown))
let currentitem = 'Home'
var nav = document.querySelectorAll('.navitem a')
const homesect = document.querySelector('.home')
const portfoliosect = document.querySelector('.portfolio')
const aboutmesect = document.querySelector('.aboutme')
const contactsect = document.querySelector('.contacts')
const header = document.querySelector('.header')
const footer = document.querySelector('footer')

// menuburger.addEventListener("click", () => {
//   header.classList.toggle("menuopened");
// });

// document.addEventListener("click", () => {
//   if (header.classList.contains("menuopened")) {
//     header.classList.toggle("menuopened");
//   }
// });

function neondown(e) {
  for (var navitem of headeritems) {
    navitem.classList.remove('selected')
  }
  e.target.classList.toggle('selected')
  if (currentitem === e.target.innerHTML) {
    e.target.classList.toggle('blink')
    setTimeout(() => {
      e.target.classList.toggle('blink')
    }, 500)
  } else {
    let headertimeout = 800
    if (header.classList.contains('headerhalf')) {
      headertimeout = 0
    }
    headerfooterwink()
    if (e.target.innerHTML === 'Home') {
      setTimeout(() => {
        homesect.style.display = 'block'
        portfoliosect.style.display = 'none'
        aboutmesect.style.display = 'none'
        contactsect.style.display = 'none'
      }, headertimeout)
      currentitem = 'Home'
    }
    if (e.target.innerHTML === "What I've done") {
      setTimeout(() => {
        homesect.style.display = 'none'
        portfoliosect.style.display = 'block'
        aboutmesect.style.display = 'none'
        contactsect.style.display = 'none'
      }, headertimeout)
      currentitem = "What I've done"
    }
    if (e.target.innerHTML === 'About Me') {
      setTimeout(() => {
        homesect.style.display = 'none'
        portfoliosect.style.display = 'none'
        aboutmesect.style.display = 'block'
        contactsect.style.display = 'none'
      }, headertimeout)
      currentitem = 'About Me'
    }
    if (e.target.innerHTML === 'Contacts') {
      setTimeout(() => {
        homesect.style.display = 'none'
        portfoliosect.style.display = 'none'
        aboutmesect.style.display = 'none'
        contactsect.style.display = 'block'
      }, headertimeout)
      currentitem = 'Contacts'
    }
  }
}

function headerfooterwink() {
  if (!header.classList.contains('headerhalf')) {
    header.classList.add('headerhalf')
    var closetimeout = 800
  } else {
    var closetimeout = 400
  }
  setTimeout(() => {
    header.classList.remove('headerhalf')
  }, closetimeout)
}

// Open header to see hidden carrousel
const arrowdown = document.querySelector('.openheader')

arrowdown.addEventListener('click', () => {
  header.classList.toggle('headerhalf')
  arrowdown.classList.toggle('up')
})

const menuburger = document.querySelector('.menuburger')

menuburger.addEventListener('click', () => {
  header.classList.toggle('headerhalf')
  menuburger.classList.toggle('open')
})

// Background Carousel Random colors
const carrouselsquares = document.querySelectorAll('.cube li')
for (var square of carrouselsquares) {
  square.style.boxShadow = `0px 0px 15px #${Math.floor(Math.random() * 16777215).toString(16)}`
}

// Portfolio Items box-shadow Random colors
// const portfolioitems = document.querySelectorAll(".portfolio-item");
// for (var portitem of portfolioitems) {
//   portitem.style.boxShadow = `0px 0px 35px #${Math.floor(Math.random() * 16777215).toString(16)}`;
// }
