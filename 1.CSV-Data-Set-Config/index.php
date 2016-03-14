<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<h1>CSV Data Set Config</h1>

<?php

if (!empty($_GET["lastName"]) && !empty($_GET["firstName"])) {
	echo $_GET["lastName"] . "-" . $_GET["firstName"];
}
?>

</body>
</html>