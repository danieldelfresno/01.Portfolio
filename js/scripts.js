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
    var closetimeout = 0
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

// Color Themes Code
document.addEventListener('DOMContentLoaded', () => {
  let theme = localStorage.getItem('data-theme')
  const changeThemeToDark = () => {
    document.documentElement.setAttribute('data-theme', '') // set theme to dark
    localStorage.setItem('data-theme', 'dark') // save theme to local storage
  }

  const changeThemeToLight = () => {
    document.documentElement.setAttribute('data-theme', 'light') // set theme light
    localStorage.setItem('data-theme', 'light') // save theme to local storage
  }

  // Get the element based on ID
  const checkbox = document.querySelector('.switch')
  // Apply retrived them to the website
  checkbox.addEventListener('change', () => {
    console.log('changed')
    let theme = localStorage.getItem('data-theme') // Retrieve saved them from local storage
    if (theme === 'dark') {
      changeThemeToLight()
    } else {
      changeThemeToDark()
    }
  })

  const projectdb = [
    {
      title: 'House Market-Place',
      subtitle: 'React Course Project',
      role: 'Backend & Frontend',
      year: 2022,
      website: false,
      tools: ['javascript', 'react', 'mongodb'],
      background: './img/projects/house-marketplace.png',
    },
    {
      title: 'Git-Hub Finder',
      subtitle: 'React Course Project',
      role: 'Backend & Frontend',
      year: 2022,
      website: false,
      tools: ['javascript', 'react'],
      background: './img/projects/github-finder.png',
    },
    {
      title: 'Pig Game',
      subtitle: 'Javascript Course Project',
      role: 'Javascript Algorithm',
      year: 2021,
      website: './assets/piggame/index.html',
      tools: ['javascript'],
      background: './img/projects/piggame.png',
    },
    {
      title: 'Recuperar Portugal',
      subtitle: 'State Website for Economical Growth',
      role: 'Front-end',
      year: 2021,
      website: 'https://recuperarportugal.gov.pt',
      tools: ['html', 'css', 'wordpress', 'javascript'],
      background: './img/projects/recuperar-portugal.png',
    },
    {
      title: 'ArtGem Store',
      subtitle: 'Front-End Course Project',
      role: 'The whole thing',
      year: 2019,
      website: './assets/artgem/index.html',
      tools: ['html', 'css', 'sass', 'javascript'],
      background: './img/projects/artgem.png',
    },
    {
      title: 'TapHouse',
      subtitle: 'Restaurant at Sesimbra Portugal',
      role: 'The whole thing',
      year: 2018,
      website: 'https://www.taphouse.pt/',
      tools: ['html', 'css', 'javascript'],
      background: './img/projects/taphouse.jpeg',
    },
    {
      title: 'Arrábida Beer Company',
      subtitle: 'Artisan Beer Producer',
      role: 'Responsive Behavior and Dynamic Pages',
      year: 2018,
      website: './assets/abc/index.html',
      tools: ['html', 'css', 'javascript'],
      background: './img/projects/abc.png',
    },
  ]

  let portfolio = document.querySelector('.portfolio .container')

  for (let i = 0; i < projectdb.length; ++i) {
    portfolio.innerHTML += `<div class='portfolio-item'>
            <div class='portfolio-data'>
              <div class='portfolio-data-text'>
                <h1>${projectdb[i].title}</h1>
                <h2>${projectdb[i].subtitle}</h2>
                <p><b>Role:</b> ${projectdb[i].role}</p>
                <p><b>Year:</b> ${projectdb[i].year}</p>
                <a href='${projectdb[i].website}' target='_blank' rel='noopener'>
                  <button class='btn' ${!projectdb[i].website ? 'disabled=disabled' : ' '}>Visit website</button>
                </a>
              </div>
              <div class='portfolio-data-icons'>
                <ul id='code-tools-${i}'>
                </ul>
              </div>
            </div>
            <div class='portfolio-img' style='background-image: url("${projectdb[i].background}")'></div>
          </div>`
    var codetools = document.querySelector(`#code-tools-${i}`)
    var ptools = projectdb[i].tools
    for (let j = 0; j < ptools.length; j++) {
      codetools.innerHTML += `<li>
                      <img src='/img/${ptools[j]}.svg' alt='${ptools[j]} Logo' height='45' width='45' />
                    </li>`
    }
  }
})
