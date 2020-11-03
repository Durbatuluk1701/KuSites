let count = 1;
const img = document.querySelector("#slideShow");
const previous = () => {
    if (count === 0) {
        count = 5;
    }
    count = (count - 1) % 5;
    img.src = `images/mountain${count}.jpg`;
}
const next = () => {
    count = (count + 1) % 5;
    img.src = `images/mountain${count}.jpg`;
}