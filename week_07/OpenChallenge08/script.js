
function choose(obj) {
    obj.innerHTML = Math.floor(Math.random() * 3);
}

function last(obj) {
    choose(obj);

    let n1 = document.getElementById("num1").textContent;
    let n2 = document.getElementById("num2").textContent;
    let n3 = document.getElementById("num3").textContent;
    let result = "";

    if (n1 == n2 && n2 == n3) {
        result = "Success <br>(click here to do again)";
    } else {
        result = "Fail <br>(click here to do again)";
    }

    document.getElementById("result").innerHTML = result;
}

function reset() {
    document.getElementById("num1").innerHTML = 0;
    document.getElementById("num2").innerHTML = 0;
    document.getElementById("num3").innerHTML = 0;
    document.getElementById("result").innerHTML = "";
}