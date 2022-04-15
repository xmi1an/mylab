//
/********************* Counter js ************************/
//

const counter = document.querySelectorAll(".counter_value");
const speed = 200; // The lower the slower
counter.forEach((counter_value) => {
  const updateCount = () => {
    const target = +counter_value.getAttribute("data-target");
    const count = +counter_value.innerText;
    const inc = target / speed;
    // Check if target is reached
    if (count < target) {
      // Add inc to count and output in counter_value
      counter_value.innerText = (count + inc).toFixed(0);
      // Call function every ms
      setTimeout(updateCount, 1);
    } else {
      counter_value.innerText = target;
    }
  };
  updateCount();
});

//
/********************* Client-Slider js ************************/
//

var swiper = new Swiper(".testimonialslider", {
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 1,
    }
  }
});

var swiper = new Swiper(".homeslider", {
  spaceBetween: 30,
  loop: true,
  effect: "fade",
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  }
});