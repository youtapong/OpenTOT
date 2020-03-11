
<input id="inpN" type="text" oninput="SRoot(this.value)" onchange="SRoot(this.value)">
<p>resault: <span id="SRoot"></span></p>

function SRoot(num){
  document.getElementById("SRoot").innerHTML = sqrt(num);
  
}