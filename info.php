<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<script>
			function abrir(){
				document.getElementById('info').style.display = 'block';
			}
			function fechar(){
				document.getElementById('info').style.display =  'none';
			}
			
			var num = 'FrAncÊs';
			
			function senha(){
				senha = document.info.senha.value
			}
			
			if (num==senha){
				str.link(javascript: abrirq() ;)
			}
		</script>
		<title>Documento sem título</title>
	</head>
	<body>
		<div id="senha" class="senha">
			<form action="" name="info">
				<label>Nome:</label>
				<input type="text" name="nome"></br>
				<label>Senha:</label>
				<input type="password" name="senha">
			</form>
		</div>
	<?php
	$senha = $_REQUEST['senha']
	$senhac = FrAncÊs;
		if ($senha==$senhac){
			echo '<a href="Informacoes.html">Proxima Pag</a>';
		}
	?>
		 
	</body>
</html>