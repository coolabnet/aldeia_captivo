<html><head>
  <?php include("cabeca.php"); ?>
</head>
<body>
<div class="container-fluid principal">
  <div class="row">
  	<div class="col-md-3"></div>
  	<div class="col-sm-12 col-md-6">
			<form action="form_upload.php" id="form_envio" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend>Enviar Arquivo</legend>
				
				<p>
					<label for="tipo" style="margin-right: 10px; margin-top: 10px; float: left;">Tipo do arquivo:</label>
					<select class='form-control' name="tipo" id="slct_opcao">
						<option value="">--</option>
						<option value="foto">fotos</option>
						<option value="texto">texto</option>
						<option value="video">video</option>
						<option value="audio">aúdio</option>		
					</select>
				</p>
				<p>	
					<label for="arquivo"></label>
					<input type="file" placeholder="selecionar" name="arquivo"/>
				</p>
				<p style="margin-bottom: 25px; ">
					<label for="nome">Renomear para:</label>
					<input type='text' name="nome" id="ipt_nome"></input>
				</p>
				<input type='hidden' name="action" value="upload"/>
				<input type="submit" id="btnEnviar" value="enviar" />
			</fieldset>
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
				//define um nome para o aquivo se o campo for preenchido
				if($nome){
					$novo_nome = $nome.$ext;
				}else{
					$novo_nome = $_FILES['arquivo']['name']; 
				}
				//Defne um diretorio para salvar conforme o tipo 
				switch ($tipo) {
					case "foto":
						if ($ext == ".jpg"||$ext == ".png"||$ext == ".jpeg"){
							$dir = $dir."/fotos/";
							$tipo_sup=true;
						}else{
							echo "<div class='bg-danger'>Formato inválido</div>";
						}
					break;
					case "texto":
						if ($ext == ".txt"||$ext == ".pdf"||$ext == ".doc" ||$ext == ".docx"||$ext == ".odt"){
							$dir = $dir."/textos/";
							$tipo_sup=true;
						}
						else{
							echo "<div class='bg-danger'>Formato inválido</div>";
						}
					break;
					case "video":
						if ($ext == ".mp4"){
							$dir = $dir."/videos/";
							$tipo_sup=true;
						}else{
							echo "<div class='bg-danger'>Formato inválido</div>";
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
							echo "<div class='bg-danger'>Formato inválido</div>";
						}
					}
						break;
					default:
						# code...
						break;
				}
				$tipo_sup = true;
				//echo $dir.$novo_nome.'</br>';
				// echo getcwd();
				if($tipo_sup==true && move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$novo_nome))
					echo "<div class='bg-success'>Arquivo enviado com sucesso.</div>"; 		 
				else
					echo "<div class='bg-danger'>Falha no envio.</div>";
			}
			
		?>
		<div class="col-md-3"></div>
			</div>
		</div>
	</div>
</body>
</html>
