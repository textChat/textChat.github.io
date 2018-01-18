
var input = ocument.getElementById("input").value;

var input;
var form = document.querySelector("form");
form.addEventListener("submit", function(event) {
    //console.log("Saving value", form.elements.value.value);
    username = form.elements.value.value;
    email = form.elements.value1.value1;
    password = form.elements.value2.value2;
    event.preventDefault();
    test();
});

function test(){
    console.log(username, email, password);
    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "sendData.php?username=" + username, true);
    xmlhttp.open("GET", "sendData.php?email=" + email, true);
    xmlhttp.open("GET", "sendData.php?password=" + password, true);
    xmlhttp.send();
}
