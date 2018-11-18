function ZweiteNum(nm1, Oper, nm2) {
    switch (Oper) {
        case 'addition':
        case 'subtraktion':
        case 'multiplikation':
        case 'division':
            document.getElementById('num1text').innerHTML = "Первое число:";
            document.getElementById('num2text').innerHTML = "Второе число";
            document.getElementById('num2').disabled = false;
            break;
        case 'potenzierung':
        case 'wurzel':
            document.getElementById('num1text').innerHTML = "Число:";
            document.getElementById('num2text').innerHTML = "Cтепень";
            document.getElementById('num2').disabled = false;
            break;
        case 'sinus':
        case 'kosinus':
        case 'tangens':
        case 'kotangens':
            document.getElementById('num1text').innerHTML = "Угол:";
            document.getElementById('num2text').innerHTML = "";
            document.getElementById('num2').disabled = true;
            break;
    }

    ajaxRequest(nm1, Oper, nm2);
}

function ajaxRequest(str1, str2, str3) {
    $.ajax({
        type: "POST",
        url: "server_bearbeiter.php",
        data: { num1: str1, oper: str2, num2: str3 },
        success: function(msg) {
            document.getElementById("result").innerHTML = msg;
        }
    });
}