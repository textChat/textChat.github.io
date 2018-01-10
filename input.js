var input;
var form = document.querySelector("form");
form.addEventListener("submit", function(event) {
    //console.log("Saving value", form.elements.value.value);
    input = form.elements.value.value;
    event.preventDefault();
    test();
});

function test(){
    console.log(input)   
}
