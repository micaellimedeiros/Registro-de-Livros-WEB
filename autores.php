<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="estilos.css" />
	</head>
	<body>
		<?php
		include("script/dados.php");
		include("cabecalho.php");
		?>
		<ul class="lista">
			<?php
			foreach($autores as $autor){
			?>
			<li>
				<img src="<?php echo $autor["foto"];?>" />
				<div>
					<h3>
						<a href="paginas_detalhes/autor_detalhe.php?id=<?php echo $autor["idAutor"];?>">
							<?php echo $autor["nome"];?>
						</a>
					</h3>
					<span class="livroAno"><?php echo $autor["email"];?></span>
				</div>
			</li>
			<?php
			}
			?>
		</ul>
		<?php include("rodape.php");?>
	</body>
</html>