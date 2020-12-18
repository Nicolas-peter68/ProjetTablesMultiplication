const elements = document.getElementsByTagName("form");
const formulaire = document.createElement("form");

document.body.appendChild(formulaire);
function insertInput() {
    let input = document.createElement("input");
    return input;
}
document.body.appendChild(input);
console.log(formulaire);
console.log(input);