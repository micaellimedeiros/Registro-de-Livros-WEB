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
			foreach($editoras as $editora){
			?>
			<li>
				<div>
					<h3>
						<a href="paginas_detalhes/editora_detalhe.php?id=<?php echo $editora["idEditora"];?>">
							<?php echo $editora["nome"];?>
						</a>
					</h3>
					<span class="livroAno"><?php echo $editora["cidade"];?></span>
				</div>
			</li>
			<?php
			}
			?>
		</ul>
		<?php include("rodape.php");?>
	</body>
</html>