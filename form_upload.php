<html><head>
  <?php include("cabeca.php"); ?>
</head>
<body>

    <a href="index.php"> <h3>Rede Comunitária de Aldeia Velha</h3> </a>

<div class="container-fluid p-10 principal">
		<form action="form_upload.php" method="post" enctype="multipart/form-data">
	<label for="nome">Nome para o arquivo</label>
	<input type='text' name="nome"></input><br/>
	<select class='form-control' name="tipo">
		<option value="">selecione um tipo</option>
		<option value="foto">fotos</option>
		<option value="texto">texto</option>
		<option value="video">video</option>
		<option value="audio">aúdio</option>		
	</select>
	<input type="file" name="arquivo"/><br/>
	<input type='hidden' name="action" value="upload"/>
	<input type="submit" value="enviar" />
</form>
<?php 
	//definir caminho para diretorio de uploads
	$dir = getcwd();
	$tipo_sup=false; // Variavel utlizada para que o sistema saiba se a extensão do arquvo é valida 
	$action = isset($_POST['action']) ? $_POST['action'] : null;
	$nome = $_POST['nome']; 
	$tipo = $_POST['tipo']; 

	if($action == 'upload'){		
		//pega a permissão do arquivo
		$ext = strtolower(substr($_FILES['arquivo']['name'],-4));
		//define um nome para o aquivo
		$novo_nome = $nome.$ext;
		//Defne um diretorio para salvar conforme o tipo 
		switch ($tipo) {
			case "foto":
				if ($ext == ".jpg"||$ext == ".png"||$ext == ".jpeg"){
					$dir = $dir."/fotos/";
					$tipo_sup=true;
				}else{
					echo "Formato inválido";
				}
			break;
			case "texto":
				if ($ext == ".txt"||$ext == ".pdf"||$ext == ".doc" ||$ext == ".docx"||$ext == ".odt"){
					$dir = $dir."/textos/";
					$tipo_sup=true;
				}
				else{
					echo "Formato inválido";
				}
			break;
			case "video":
				if ($ext == ".mp4"){
					$dir = $dir."/videos/";
					$tipo_sup=true;
				}else{
					echo "Formato inválido";	
				}
			break;
			case "audio":
			{
				if ($ext == ".mp3")
				{
					$dir = $dir."audios/";
					$tipo_sup=true;
				}
				else
				{
					echo "Formato inválido";
				}
			}
				break;
			default:
				# code...
				break;
		}
		$tipo_sup = true;
		echo $dir.$novo_nome.'</br>';
		echo getcwd();
		if($tipo_sup==true && move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$novo_nome))
			echo "<div class='bg-success>Suuuucessoooo</div>"; 		 
		else
			echo "<div class='bg-danger'>Falha no envio</div>";
	}
	
?>
			
		</div>

</body>
</html>
