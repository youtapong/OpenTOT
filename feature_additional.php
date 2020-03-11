<html>
<title>additional</title>
<body>
<label>number 1 :</label> <input type="text" name="number1" id="number1"/>
<label>
<label>number 2 :</label> <input type="text" name="number2" id="number2"/> <br /><b r/><br /><br /><b r/><br />
<label><font color="blue">result :</font><div id="resulT"></div></label>
<input type="submit" value="addition" onclick="addition();">


<script>
function addition(){
	var a = parseInt(document.getElementById("number1").value);
    var b = parseInt(document.getElementById("number2").value);
    var result = a+b;
    document.getElementById("resulT").innerHTML= result;
}

function funcCon(){
	var thai_ = document.getElementById("THB1").value;
	var result = thai_ *0.303;
	document.getElementById("resulT").innerHTML= result;
}
</script>
</body>
</html>
