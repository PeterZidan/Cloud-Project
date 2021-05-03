function homeFunction() {
    window.location.href = "index.html";
}
function buyFunction() {
    window.location.href = "buy.html";
}
function sellFunction() {
    window.location.href = "sell.html";
}
function repairFunction() {
    window.location.href = "repair.html";
}
function contactFunction() {
    window.location.href = "contact-us.html";
}
function referenceFunction() {
    window.location.href = "refernces.html";
}


function sendFunction() {


    var brand = document.getElementById("brand").value;
    var color = document.getElementById("color").value;
    var size = document.getElementById("size").value;
    var capacity = document.getElementById("capacity").value;
    var firstN = document.getElementById("firstname").value;
    var lastN = document.getElementById("lastname").value;
    var phoneN = document.getElementById("phonenumber").value;
    console.log(5);
    console.log(brand);
    console.log(color);
    console.log(size);
    
    
    if (brand == "" || color == "" || size == "" || capacity == "" || firstN == "" || lastN == "" || phoneN == "") {

        alert('Fill All the missing data please!!');
        
    }
    else {
        alert('Your Data has been sent successfully, we will contact you as soon as it is possible ');
        
    }
}


function send1Function() {


    var brand = document.getElementById("brand1").value;
    var color = document.getElementById("color1").value;
    var size = document.getElementById("size1").value;
    var capacity = document.getElementById("capacity1").value;
    var firstN = document.getElementById("firstname1").value;
    var lastN = document.getElementById("lastname1").value;
    var phoneN = document.getElementById("phonenumber1").value;
   


    if (brand == "" || color == "" || size == "" || capacity == "" || firstN == "" || lastN == "" || phoneN == "") {

        alert('Fill All the missing data please!!');

    }
    else {
        alert('Your Data has been sent successfully, we will contact you as soon as it is possible ');

    }
}



function send2Function() {


    var txt = document.getElementById("txtarea").value;
 
    console.log(txt);

    if (txt == "" ) {

        alert('Fill All the missing data please!!');

    }
    else {
        alert('Your Data has been sent successfully, we will contact you as soon as it is possible ');

    }
}

