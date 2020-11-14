let username = document.querySelector("#username");
let password = document.querySelector("#password");
let hamburger = document.querySelector("#hamburger");
let fries = document.querySelector("#fries");
let coke = document.querySelector("#coke");
let sevenDay = document.querySelector("#sevenDay");
let threeDay = document.querySelector("#threeDay");
let oneDay = document.querySelector("#oneDay");

function validate() {
    console.log("Validating");
    console.log(sevenDay.checked, threeDay.checked, oneDay.checked);
    console.log(username.value);
    console.log(password.value);
    console.log(hamburger.value);
    console.log(fries.value);
    console.log(coke.value);
    if (username.value.length < 1) {
        alert("Enter a Username");
        return false;
    }
    if (password.value.length < 1) {
        alert("Enter a Password");
        return false;
    }
    if (!(
        sevenDay.checked ||
        threeDay.checked ||
        oneDay.checked
    )) {
        alert("Check A Shipping Option");
        return false;
    }
    if (hamburger.value < 0 || hamburger.value > 100) {
        alert("Enter a valid Hamburger Quantity (0-100)");
        return false;
    }
    if (fries.value < 0 || fries.value > 100) {
        alert("Enter a Fries Quantity (0-100)");
        return false;
    }
    if (coke.value < 0 || coke.value > 100) {
        alert("Enter a Coke Quantity (0-100)");
        return false;
    }
    return true;
}

console.log("Loaded");