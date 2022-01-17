const myform = document.getElementById("myform");
myform.addEventListener("submit", (e) =>{
  e.preventDefault();
});

let a = document.getElementById("demoInput1");
var b = document.getElementById("demoInput2");
var c = document.getElementById("demoInput3");
var d = document.getElementById("demoInput4");
var e = document.getElementById("demoInput5");
var f = document.getElementById("demoInput6");
var g = document.getElementById("demoInput7");

var final = a + (b * 10) + (c * 100) + (d * 1000) + (e * 10000) + (f * 100000) + (g * 1000000);


function myFunction() {
  alert("Your amount has been transfered");
}