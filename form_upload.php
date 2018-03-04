<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html><head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title></title>
	<meta name="generator" content="LibreOffice 5.1.4.2 (Linux)">
	<meta name="created" content="2016-10-07T18:18:44.314838887">
	<meta name="changed" content="2016-10-07T19:13:53.735143150">
	<link rel="stylesheet" type="text/css" href="css/style.css"></style>
</head>
<body dir="ltr" lang="pt-BR">

	<div style="background-image: URL($imagesdir//pontilhao2.jpg); background-size: cover; background-position: center; height: 33%; width: 100%;">
	</div>

	<div style="background-color:#fff;padding:15px 45px;margin:-50px auto 0;width:66%;text-align:center;">

		<h3 style="margin-bottom: 0cm; font-size:20pt; text-align:center;">Rede Comunitária Souzas Livre<br> </h3>

        <h2 style= "margin-bottom: 0cm; font-size:32pt; text-align:center;">Biblioteca</h2>

		<p><br></p>


		<p><br></p>



		<div class="card card-1" >
		<form action="form_upload.php" method="post" enctype="multipart/form-data">
	<label for="nome">Nome para o arquivo</label>
	<input type='text' name="nome"></input><br/>
	<select name="tipo">
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
					echo "Formato invalido";
				}
			break;
			case "texto":
				if ($ext == ".txt"||$ext == ".pdf"||$ext == ".doc" ||$ext == ".docx"||$ext == ".odt"){
					$dir = $dir."/textos/";
					$tipo_sup=true;
				}
				else{
					echo "Formato invalido";
				}
			break;
			case "video":
				if ($ext == ".mp4"){
					$dir = $dir."/videos/";
					$tipo_sup=true;
				}else{
					echo "Formato invalido";	
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
					echo "Formato invalido";
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
			echo "SUuuucessoooo"; 		 
		else
			echo "falha no envio";
	}
	
?>
			
		</div>







		<p><br></p>


	</div>

<br>

</body></html>
