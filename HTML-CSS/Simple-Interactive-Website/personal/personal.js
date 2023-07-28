function confirmFullName() {
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    
    var firstNameError = document.getElementById("firstNameError");
    var lastNameError = document.getElementById("lastNameError");

    firstNameError.textContent = "";
    lastNameError.textContent = "";

    var isValid = true;

    if (firstName.trim() === "") {
        firstNameError.textContent = "Please enter your first name.";
        isValid = false;
    }

    if (lastName.trim() === "") {
        lastNameError.textContent = "Please enter your last name.";
        isValid = false;
    }

    if (isValid) {
        var fullName = firstName + " " + lastName;
        
        var birthYear = prompt("Enter your birth year:");
        
        var age = new Date().getFullYear() - parseInt(birthYear);
        
        var welcomeMessage = "Welcome " + fullName + ", you are " + age + " years old";
        
        alert(welcomeMessage);
    }
}