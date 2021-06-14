
function sellFunction() {

    let brand = document.getElementById("brand").value;
    let color = document.getElementById("color").value;
    let size = document.getElementById("size").value;
    let capacity = document.getElementById("capacity").value;
    let firstN = document.getElementById("firstname").value;
    let lastN = document.getElementById("lastname").value;
    let phoneNumber = document.getElementById("phonenumber").value;
    
    if (brand == "" || color == "" || size == "" || capacity == "" || firstN == "" || lastN == ""
        || phoneNumber == "") {

        alert("Please fill all of the information!!");
    }
    else {
        alert("Your request has been sent Succefully, We will contact you in the next 24 hours");
    }

}
