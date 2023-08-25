const masv = document.getElementById("msv");
const hoten = document.getElementById("name");
const mail = document.getElementById("email");
const hobby = document.querySelectorAll("#checkbox");
const note = document.getElementById('note');

function validateInput() {
    if (!masv.checkValidity()) {
        masv.style.backgroundColor = "yellow";
        document.getElementById('message1').innerHTML = masv.validationMessage;
    } else {
        masv.style.backgroundColor = "";
        document.getElementById('message1').innerHTML = "";
    }

    if (!hoten.checkValidity()) {
        hoten.style.backgroundColor = "yellow";
        document.getElementById('message2').innerHTML = hoten.validationMessage;
    } else {
        hoten.style.backgroundColor = "";
        document.getElementById('message2').innerHTML = "";
    }

    if (!mail.checkValidity()) {
        mail.style.backgroundColor = "yellow";
        document.getElementById('message3').innerHTML = mail.validationMessage;
    } else {
        mail.style.backgroundColor = "";
        document.getElementById('message3').innerHTML = "";
    }
    do {
        let i = 0;
        hobby[i].required = true;
        if (hobby[i].checked == true)
            break;
        else
            i++;
    } while (i < 5)
    if (!note.checkValidity()) {
        note.style.backgroundColor = "yellow";
        document.getElementById('message5').innerHTML = note.validationMessage;

    }
}