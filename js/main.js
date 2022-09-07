/* Fetch API reserve appoinments*/
function Appointment(btn,user_id, doctor_id,form_id){
  let form = document.getElementById("form-reserve-"+form_id);
  let formData = new FormData(form);
  fetch("TakeAppointment",{
    method: "POST",
    body: formData
  }).then(response => response.text())
    .then(data => {
    console.log(data)
    if(btn.innerHTML == 'reserved')
    {
      btn.innerHTML = 'not reserved';
      btn.classList.remove('btn-outline-danger');
      btn.classList.add('btn-outline-success');
    }
    else
    {
      btn.innerHTML = 'reserved';
      btn.classList.remove('btn-outline-success');
      btn.classList.add('btn-outline-danger');
    }
   })
}
let arr = [1, 2, 3, 4, 5, 6, 7];
const heroElement = document.getElementById('hero');
let currentIndex = 1;
if(heroElement)
{
  setInterval(function () {
    if (currentIndex > arr.length)
      currentIndex = 1;
    heroElement.style.backgroundImage = "url(view/assets/img/slide/slide-" + currentIndex + ".jpg)";
    currentIndex++;
  
  }, 3500);
}
function SearchDoctor(btn_search) {
  let container = document.getElementById("search-results-container");
  if (document.getElementById("search-bar").value) {
    container.style.display = "block";
    let form = document.getElementById("form-search");
    let formData = new FormData(form);
    fetch("searchDoctor", {
      method: "POST",
      body: formData
    }).then(response => response.json())
      .then(data => {
        let list_container = document.getElementById("list-container");
        list_container.innerHTML = '';
        if (data[0]['id'] != null) {
          for (let element of data) {
            let data = `
                    <li class="list-group-item d-flex justify-content-start">
                      <a class="d-flex justify-content-start" href="DrProfile?id=${element['id']}">
                        <img class="profile-image-search" width="50px" height="50px" src="${element['image']}" alt="${element['name']}">
                        <div class="row ms-1">
                          <h6 class="text-start">Dr.${element['name']}</h6>
                          <h6 class="text-start">${element['proff_name']}</h6>
                        </div>
                      </a>
                    </li>`;
            let list = document.createElement('li');
            list.innerHTML = data;
            list_container.appendChild(list);
          }
        }
        else {
          let res = `<li class="list-group-item d-flex justify-content-start">
          <p class="d-flex justify-content-start">
              <b class="text-dark">!!! NOT FOUND !!!</b>
          </p>
        </li>`;
          let list = document.createElement('li');
          list.innerHTML = res;
          list_container.appendChild(list);
        }
      }).catch(error => error.text());
  }
  else
    container.style.display = 'none';
}
setTimeout(() => {
  if(document.getElementById("toastPlacement"))
  {
    const elem = document.getElementById("toastPlacement");
    elem.parentNode.removeChild(elem);
  }

}, 14000);
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
function ShowMedicalNum(value) {
  let container = document.getElementById("medic-num-container");
  if (value == "Doctor") {
    container.style.display = "block";
    document.getElementById("validationCustom04").setAttribute("required");
  }
  else {
    document.getElementById("validationCustom04").removeAttribute('required');
    container.style.display = "none";
  }
}
(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  let selectTopbar = select('#topbar')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
        if (selectTopbar) {
          selectTopbar.classList.add('topbar-scrolled')
        }
      } else {
        selectHeader.classList.remove('header-scrolled')
        if (selectTopbar) {
          selectTopbar.classList.remove('topbar-scrolled')
        }
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function (e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function (e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function (e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Hero carousel indicators
   */
  let heroCarouselIndicators = select("#hero-carousel-indicators")
  let heroCarouselItems = select('#heroCarousel .carousel-item', true)

  heroCarouselItems.forEach((item, index) => {
    (index === 0) ?
      heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>" :
      heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
  });

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

  /**
   * Clients Slider
   */
  new Swiper('.gallery-slider', {
    speed: 400,
    loop: true,
    centeredSlides: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 5,
        spaceBetween: 20
      }
    }
  });

  /**
   * Initiate gallery lightbox 
   */
  const galleryLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  /**
   * Initiate Pure Counter 
   */
  new PureCounter();

})()