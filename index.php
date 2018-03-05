<!DOCTYPE html>
<html><head>
  <?php include("cabeca.php"); ?>
</head>
<body>
<div class="container-fluid p-10 principal">
<p><?php echo SAUDACAO;?></p><p>
  <a data-toggle="collapse" href="#collapseExample" role="button">
    Saiba mais
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card-body card-body">
    <?php echo SAIBAMAIS;?> 
  </div>
</div>
</div>

  <div class="text-center"><H4>Midiateca</h4></div>
    <p>Repositório de arquivos para livre acesso</p>
  <div class="row">
      <div class="col-sm-3"><p>Imagens</p><a href="fotos"><button class="btn">Fotos</button></a></div>
      <div class="col-sm-3"><p>Ouça e baixe músicas</p><a href="musicas"><button class="btn">Música</button></a></div>
      <div class="col-sm-3"><p>Confira nossa biblioteca</p><a href="textos"><button class="btn">Textos</button></a></div>
      <div class="col-sm-3"><p>Que tal um cineminha?</p><a href="videos"><button class="btn">Vídeos</button></a></div>
    <div class="col-sm-12 mt-5"><a href="form_upload.php"><p><button class="btn2">ENVIE UM ARQUIVO</button></a></p></div>
  </div>
</body>
</html>
