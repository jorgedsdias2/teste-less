<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet/less" type="text/css" href="styles.less" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="less.min.js" type="text/javascript"></script>
	<script src="jquery.cookie.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$.cookie("teste", "teste");
			$.cookie('the_cookie', 'the_value', { expires: 7 });

			alert($.cookie("the_cookie"));

			$(".botao").click(function() {
				$.removeCookie("the_cookie");
				alert("the_cookie foi removido");
			});
		});
	</script>
</head>
<body>
	<div class="botao">
		Botão com gradiente
	</div>
</body>
</html>