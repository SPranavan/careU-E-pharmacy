let currentSlide = 0;

function startSlider() {
  let imageCount = document.querySelectorAll(".sli-img");

  if (imageCount.length === 0) {
    imageCount = document.querySelectorAll(".sli-img");
    images.style.transform = `translateX(0px)`;
    return;
  }

  let images = document.querySelector("ul");
  images.style.transform = `translateX(-${currentSlide * 1464}px)`;

  if (currentSlide === imageCount.length - 1) {
    currentSlide = 0;
  } else {
    currentSlide++;
  }
}

setInterval(() => {
  startSlider();
}, 2500);