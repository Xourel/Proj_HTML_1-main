const carousel = document.querySelector('.carousel-inner');
let position = 0;
const slideWidth = carousel.offsetWidth;

function slideNext() {
  position -= slideWidth;
  if (position < -slideWidth * 3) {
    position = 0;
  }
  carousel.style.transform = `translateX(${position}px)`;
}

function slidePrevious() {
  position += slideWidth;
  if (position > 0) {
    position = -slideWidth * 3;
  }
  carousel.style.transform = `translateX(${position}px)`;
}

document.querySelector('.carousel-next').addEventListener('click', slideNext);
document.querySelector('.carousel-previous').addEventListener('click', slidePrevious);
