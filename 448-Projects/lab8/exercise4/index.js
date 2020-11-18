let borderRed = document.querySelector("#borderRed");
let borderGreen = document.querySelector("#borderGreen");
let borderBlue = document.querySelector("#borderBlue");
let borderWidth = document.querySelector("#borderWidth");
let backgroundRed = document.querySelector("#backgroundRed");
let backgroundGreen = document.querySelector("#backgroundGreen");
let backgroundBlue = document.querySelector("#backgroundBlue");
let backgoundWidth = document.querySelector("#backgroundWidth");
const changeCss = () => {
    if (
        checkValid255(borderRed.value) &&
        checkValid255(borderGreen.value) && 
        checkValid255(borderBlue.value) && 
        borderWidth.value >= 0 && borderWidth.value <= 10 &&
        checkValid255(backgroundRed.value) &&
        checkValid255(backgroundGreen.value) && 
        checkValid255(backgroundBlue.value) &&
        backgoundWidth.value > 0
    ) {
        let newColor = `${decToHex(borderRed.value)}${decToHex(borderGreen.value)}${decToHex(borderBlue.value)}`;
        console.log(newColor);
        let output = `${borderWidth.value}px solid #${newColor}`;
        console.log(output);
        document.querySelector("#p1").style.border = output;
        let backColor = `${decToHex(backgroundRed.value)}${decToHex(backgroundGreen.value)}${decToHex(backgroundBlue.value)}`;
        document.querySelector("#p1").style.backgroundColor = `#${backColor}`;
        document.querySelector("#p1").style.width = `${backgoundWidth.value}px`;
    } else {
        alert("Invalid Values");
        console.error("Invalid Values");
    }
}

const checkValid255 = (value) => {
    return (value >= 0 && value <= 255)
}

const decToHex = (value) => {
    let convert = Number(value).toString(16).toUpperCase();
    if (convert.length < 2) {
        return ("0" + convert);
    }
    return convert;
}

