


const images = document.querySelectorAll(".images1 img");
const modal = document.querySelector(".modal1");
const modalImg = document.querySelector(".modal-Img");
const modalTxt = document.querySelector(".modal-Txt");
const close = document.querySelector(".close");

images.forEach((image) => {
  image.addEventListener("click", () => {
    modalImg.src = image.src;
    modalTxt.innerHTML = image.alt;
    modal.classList.add("appear");

    close.addEventListener("click", () => {
      modal.classList.remove("appear");
    });
  });
});

