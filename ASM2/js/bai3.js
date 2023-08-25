const checkboxes = document.querySelectorAll('#option');
const quantity = document.querySelectorAll("#quantity");
const price = document.getElementsByClassName('price');
const checktotal = document.getElementsByClassName('sum');
const tr = document.querySelectorAll("tr");
function checkAll() {
    let total = 0;
    for (let i = 0; i < checkboxes.length; i++)
        if (document.getElementById("all").checked == true) {
            checkboxes[i].checked = true;
            quantity[i].removeAttribute("disabled");
            let sum = Number(price[i].textContent * quantity[i].value);
            total += sum;
            document.getElementsByClassName("sum")[i].innerHTML = sum;
        } else {
            checkboxes[i].checked = false;
            quantity[i].setAttribute("disabled", "disabled");
            document.getElementsByClassName("sum")[i].innerHTML = '';
        }
    document.getElementById("total").innerHTML = total;
}


enable = () => {
    let total = 0;
    for (let i = 0; i < 7; i++) {
        if (checkboxes[i].checked == true) {
            quantity[i].removeAttribute("disabled");
            let sum = Number(price[i].textContent * quantity[i].value);
            document.getElementsByClassName("sum")[i].innerHTML = sum;
            total += sum;
        }
        else {
            quantity[i].setAttribute("disabled", "disabled");
            document.getElementsByClassName("sum")[i].innerHTML = '';
        }
        document.getElementById("total").innerHTML = total;

    }
}

checksum = () => {
    let total = 0;
    for (let i = 0; i < 7; i++) {
        if (checkboxes[i].checked == true) {
            let sum = Number(price[i].textContent * quantity[i].value);
            total += sum;
            document.getElementsByClassName("sum")[i].innerHTML = sum;
        }
    }
    document.getElementById("total").innerHTML = total;

}


