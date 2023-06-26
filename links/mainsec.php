//Mini Pic Scale Up

const miniImages = document.querySelectorAll(".miniimage");

for (let i = 0; i < miniImages.length; i++) {
const currentMiniImage = miniImages[i].querySelector("img");

currentMiniImage.addEventListener("mouseover", function (e) {
    currentMiniImage.style.transform = "scale(2.0)"; 
    currentMiniImage.style.zIndex = "20";
});

currentMiniImage.addEventListener("mouseout", function (e) {
    currentMiniImage.style.transform = "scale(1)";
});
}

//BOX CALCULATOR

class Box {
    constructor() {
        this.totalAmount = document.getElementById("itemsamount");
    }

    calc(amt, qnt) {
        if (isNaN(amt) || isNaN(qnt)) {
            return;
        } else {
            const result = amt * qnt;
            this.totalAmount.innerHTML = `<span>$</span>${result}`;
        }
    }
}

const minilgtboxElements = document.querySelectorAll(".minilgtbox");
const quantityElement = document.querySelector("#quantity");

const box = new Box();

minilgtboxElements.forEach((button) => {
    button.addEventListener("click", (event) => {
        event.preventDefault();
        if (button.style.backgroundColor === "white") {
            button.style.backgroundColor = "";
        } else {
            button.style.backgroundColor = "white";
        }
        let amount = parseFloat(button.dataset.amount);
        let quantity = parseFloat(quantityElement.value);
        box.calc(amount, quantity);
    });
});

quantityElement.addEventListener("change", () => {
    if (selectedButton) {
        let amount = parseFloat(minilgtboxElements.dataset.amount);
        let quantity = parseFloat(quantityElement.value);
        box.calc(amount, quantity);
    }
});

//CONTACT BUTTONS

const genbtn = document.getElementById("genbtn");
const formbox = document.getElementById("formbox");
const shipbtn = document.getElementById("shipbtn");
const retnbtn = document.getElementById("retnbtn");

genbtn.addEventListener("click", (e) => {
    e.preventDefault();
    console.log("success")
    formbox.classList.add("formboxdisplay")
});


   