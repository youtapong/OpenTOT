<html>
<title>cos</title>

<h2>Cosine</h2>
<p>
<script>
        function fucCosine(){
    var temp = document.getElementById("txtnum").value;
	var res = parseInt(temp);
     var resl =  Math.cos(res);
      document.getElementById("txtResult").innerHTML= resl;
   
    }
</script>

<body>

<label>จำนวน:</label>
  <input type="number" id="txtnum">
<p>
<div id="txtResult">
</div>
<input type="submit" value="Submit" onclick="fucCosine();">
</body>
</html>
