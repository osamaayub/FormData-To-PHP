<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
</head>
<body>
<script type="text/javascript">
	
	function myfunc() {
		var obj = new XMLHttpRequest();
		obj.open("GET","server.php",true);
		obj.send();

		obj.onreadystatechange = function(){
			if (obj.status ==200 && obj.readyState==4) {
				alert("Response Receieved");
				document.getElementById('msg').innerHTML=obj.responseText;

			}
			document.getElementById('btn').onclick=function()
	      {
		     alert("Function Called");
	       }
		};
	}
</script>
	<input type="button" value="On Click" onclick="myfunc();" id='btn'>
	<span id="msg"></span>
</body>
</html>