import Swal from 'sweetalert2';
import Swiper from 'swiper/bundle';

import 'swiper/css/bundle';

const metaBlogInfo = document.querySelector('meta[name="blog-info"]').content;
const mapElement = document.querySelector('#map');
const callbackFormElement = document.querySelector('.callback-form');
const productsWrapperElement = document.querySelector('.products__wrapper');

const mapInit = () => {
  const myMap = new ymaps.Map(mapElement, {
    center: [55.557911, 37.562549],
    zoom: 15,
  });

  const placemark = new ymaps.Placemark([55.557750, 37.555017], {
    hintContent: 'Sotlink',
    balloonContent: 'Москва, ул Поляны д5 к2.'
  }, {
    iconLayout: 'default#image',
    iconImageHref: `${metaBlogInfo}/public/images/pin.svg`,
    iconImageSize: [64, 92],
    iconImageOffset: [-32, -46],
  });

  myMap.geoObjects.add(placemark);
}

const NavElements = {
  sidebar: document.querySelector('#mobile-nav'),
  openBtn: document.querySelector('#hamburger-menu'),
  closeBtn: document.querySelector('#close-mobile-nav'),
}

NavElements.openBtn.addEventListener('click', () => {
  NavElements.sidebar.classList.add('mobile-nav--open');
});

NavElements.closeBtn.addEventListener('click', () => {
  NavElements.sidebar.classList.remove('mobile-nav--open');
});

if (callbackFormElement) {
  callbackFormElement.addEventListener('submit', (evt) => {
    evt.preventDefault();

    const formData = new FormData(evt.target);

    formData.append('action', 'contactUs');

    fetch(
      '/wp-admin/admin-ajax.php',
      {
        method: 'POST',
        body: formData,
      },
    )
      .then((response) => {
        if (response.ok) {
          Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: 'Спасибо! Ваше сообщение отправлено.',
            showConfirmButton: false,
            timer: 1500
          });
        } else {
          Swal.fire({
            position: 'top-center',
            icon: 'error',
            title: 'Произошла ошибка!',
            showConfirmButton: false,
            timer: 1500
          });
        }
      })
      .catch((error) => {
        Swal.fire({
          position: 'top-center',
          icon: 'error',
          title: 'Произошла ошибка!',
          showConfirmButton: false,
          timer: 1500
        });
      });
  });
}

if (mapElement) {
  ymaps.ready(mapInit);
}

const swiper = new Swiper('.swiper', {
  loop: false,
  slidesPerView: 1,
  navigation: {
    nextEl: '.swiper-nav-buttons__prev',
    prevEl: '.swiper-nav-buttons__next',
  },
  breakpoints: {
    480: {
      slidesPerView: 2,
    },
    1280: {
      slidesPerView: 4,
    }
  }
});

console.log(swiper);
