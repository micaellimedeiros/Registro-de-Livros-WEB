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

			<?php
				if(array_key_exists("idAutor", $_POST)){
					$indice = "idAutor";
					$id = $_POST["idAutor"];
				} else if(array_key_exists("idEditora", $_POST)){
					$indice = "idEditora";
					$id = $_POST["idEditora"];
				} else {
					$indice = FALSE;
					$id = FALSE;
				}
				foreach($livros as $livro){
					if($id == FALSE and $indice == FALSE){
						?>
						<li class="foto">
							<img src="<?php echo $livro["fotoCapa"];?>" width="400px"/>
							<div>
								<h3>
									<a href="paginas_detalhes/livro_detalhe.php?id=<?php echo $livro["idLivro"];?>">
										<?php echo $livro["titulo"];?>
									</a>
								</h3>
								<span class="livroAno"><?php echo $livro["ano"];?></span>
							</div>
						</li>
						<?php
					} else {
						if($id == $livro[$indice]){
						?>
						<li>
							<img src="<?php echo $livro["fotoCapa"];?>" />
							<div>
								<h3>
									<a href="paginas_detalhes/livro_detalhe.php?id=<?php echo $livro["idLivro"];?>">
										<?php echo $livro["titulo"];?>
									</a>
								</h3>
								<span class="livroAno"><?php echo $livro["ano"];?></span>
							</div>
						</li>
						<?php
						}
					}
				}
			?>
		</ul>
		<?php include("rodape.php");?>
	</body>
</html>