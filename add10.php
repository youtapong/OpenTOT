<html>
<title>Add10</title>
<body>

<p>
  <label>Add</label>
  <input id="num" type="number" placeholder="number" oninput="aad(this.value)" onchange="add(this.value)">
</p>
<p>output: <span id="output"></span></p>
<script>
function add(num) {
  num = parseFloat(num);
  document.getElementById("output").innerHTML=num+10;
}
</script>
</body>
</html>
