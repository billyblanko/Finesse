'use strict';
window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");

    loader.classList.add("loader-hidden");

    loader.addEventListener("transitionend" , () =>{
        document.body.removeChild("loader")
    })
})

// for onscroll effect

window.addEventListener("scroll", () => {
    var header = document.querySelector(".header");
    header.classList.toggle("sticky", window.scrollY > 0);
})