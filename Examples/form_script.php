<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="../styles.css">
	  <script>
  function openmenu(){
	  
	  menu = document.getElementById('nav')
	  menu.style = "transition:0.5s"
	  menu.style = "height:100%;width:100%"
	  
	  
  }
    function closemenu(){
	  
	  menu = document.getElementById('nav')
	  menu.style = "transition:0.5s"
	  menu.style = "height:0%;width:0%"
	  
	  
  }
  </script>
</head>
<body>
	
<p onclick="openmenu()" style="font-size:30px;">&#9776;</p>
<ul id="nav">
	<li><a href="javascript:void(0);" onclick="closemenu()">&times;</a></li>
<li><a href="../index.html">Home</a></li>
<li><a href="../howto.html">How To</a></li>
<li><a href ="../examples.html">Examples</a></li>
<li><a href="../times.html">Times</a></li>

</ul>
<p></p>
<?php
$name = $_POST['name'];
$EMail = $_POST['Email'];
$country = $_POST['Country'];
$age = $_POST['age'];
print "<p>Name: $name </br> EMail: $EMail </br> Country: $country </br> Age: $age</p>";

?>
<p></p>
<a href="php_example.html"><button class="coolbutton">Back</button></a>


</body>


</html>


