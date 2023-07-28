function calculateSum() {
    var num1 = parseInt(document.getElementById("num1").value);
    var num2 = parseInt(document.getElementById("num2").value);
    
    var num1Error = document.getElementById("num1Error");
    var num2Error = document.getElementById("num2Error");

    num1Error.textContent = "";
    num2Error.textContent = "";

    var isValid = true;

    if (isNaN(num1)) {
        num1Error.textContent = "Please enter a valid number.";
        isValid = false;
    }

    if (isNaN(num2)) {
        num2Error.textContent = "Please enter a valid number.";
        isValid = false;
    }

    if (isValid) {
        var sum = num1 + num2;
        
        var resultMessage = num1 + " + " + num2 + " = " + sum;
        
        document.getElementById("result").innerHTML = resultMessage;
    }
}