
const rightBtn = document.querySelector("#scroll-right");
const leftBtn = document.querySelector("#scroll-left");
const container = document.querySelector(".premium-pics");

const SCROLL_AMOUNT = 300;

rightBtn.addEventListener("click", () => {
    const currentScroll = container.scrollLeft;
    const maxScroll = container.scrollWidth - container.clientWidth;
    const newScroll = Math.min(currentScroll + SCROLL_AMOUNT, maxScroll);
    container.scrollTo({ left: newScroll, behavior: "smooth" });
});

leftBtn.addEventListener("click", () => {
    const currentScroll = container.scrollLeft;
    const newScroll = Math.max(currentScroll - SCROLL_AMOUNT, 0);
    container.scrollTo({ left: newScroll, behavior: "smooth" });
});

//secound scroll//
const rightBtntwo = document.querySelector("#scroll-righttwo");
const leftBtntwo = document.querySelector("#scroll-lefttwo");
const containertwo = document.querySelector(".frontalcards");

const SCROLL_AMOUNTTWO = 300;

rightBtntwo.addEventListener("click", () => {
    const currentScroll = containertwo.scrollLeft;
    const maxScroll = containertwo.scrollWidth - containertwo.clientWidth;
    const newScroll = Math.min(currentScroll + SCROLL_AMOUNTTWO, maxScroll);
    containertwo.scrollTo({ left: newScroll, behavior: "smooth" });
});

leftBtntwo.addEventListener("click", () => {
    const currentScroll = containertwo.scrollLeft;
    const newScroll = Math.max(currentScroll - SCROLL_AMOUNTTWO, 0);
    containertwo.scrollTo({ left: newScroll, behavior: "smooth" });
});

//third scroll//
const rightBtnthree = document.querySelector("#scroll-rightthree");
const leftBtnthree = document.querySelector("#scroll-leftthree");
const containerthree = document.querySelector(".closurescards");

const SCROLL_AMOUNTTHREE = 300;

rightBtnthree.addEventListener("click", () => {
    const currentScroll = containerthree.scrollLeft;
    const maxScroll = containerthree.scrollWidth - containerthree.clientWidth;
    const newScroll = Math.min(currentScroll + SCROLL_AMOUNTTHREE, maxScroll);
    containerthree.scrollTo({ left: newScroll, behavior: "smooth" });
});

leftBtnthree.addEventListener("click", () => {
    const currentScroll = containerthree.scrollLeft;
    const newScroll = Math.max(currentScroll - SCROLL_AMOUNTTHREE, 0);
    containerthree.scrollTo({ left: newScroll, behavior: "smooth" });
});

// COUNT DOWN TIMMER 

let countDownDate = new Date("may 25, 2023 00:00:00").getTime();
let x = setInterval(function(){
let now = new Date().getTime();
let distance = countDownDate - now;

let days = Math.floor(distance / (1000 * 60 * 60 * 24)).toString().padStart(2, '0');
let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toString().padStart(2, '0');
let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)).toString().padStart(2, '0');
let seconds = Math.floor((distance % (1000 * 60)) / 1000).toString().padStart(2, '0');

document.getElementById("days").innerHTML = days ;
document.getElementById("hours").innerHTML = hours;
document.getElementById("minutes").innerHTML = minutes;
document.getElementById("seconds").innerHTML = seconds;

    if (distance < 0) {
    // Reset countdown by adding one day to the current date
    countDownDate = new Date(now + (1000 * 60 * 60 * 3)).getTime();
        }
    }, 1000);


