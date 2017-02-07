<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="../styles.css">
</head>
<body>
	
<ul>
<li><a href="../index.html">Home</a></li>
<li><a href="../howto.html">How To</a></li>
<li><a href ="../examples.html">Examples</a></li>




</ul>
<p></p>
<?php
$name = $_POST['name'];
$EMail = $_POST['Email'];
$country = $_POST['Country'];
$age = $_POST['age'];
print "<p>Name: $name </br> EMail: $EMail </br> Country: $country </br> Age: $age</p>";
mail($EMail, 'Hello!', 'This is the PHP Email Example!');
?>
<p></p>
<a href="php_example.html"><button class="coolbutton">Back</button></a>


</body>


</html>


