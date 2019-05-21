<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title>문서 제목</title>
</head>
<body>
<?
$name = $_GET["name"];
$id = $_GET["id"];
$pw = $_GET["pw"];
?>


<div class="han">
	이름 : <?echo $name; ?><br>
	이름 : <?echo $id; ?><br>
	이름 : <?echo $_GET["pw"] ?><br>
</div>	
</body>
</html>
