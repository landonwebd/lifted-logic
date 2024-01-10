import Glide from "@glidejs/glide";

class HeroSlider {
  constructor() {
    if (document.querySelector(".glide")) {
      // Actually initialize the glide / slider script
      var glide = new Glide(".glide", {
        type: "carousel",
        perView: 3,
        gap: 24,
        focusAt: "center",
        autoplay: 3000,
        breakpoints: {
          1500: {
            perView: 2,
          },
          800: {
            perView: 1,
          },
        },
      });

      glide.mount();
    }
  }
}

export default HeroSlider;
