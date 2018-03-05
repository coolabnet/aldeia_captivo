<!DOCTYPE html>
<html><head>
  <?php include("cabeca.php"); ?>
</head>
<body>
<div class="container-fluid p-10 principal">
<p><?php echo SAUDACAO;?></p>
 <form method="GET" action="$authaction" class="c1">
          <input type="hidden" name="tok" value="$tok">
          <input type="hidden" name="redir" value="$redir">
          <fieldset class="acentro c2">
            <iframe src="http://$gatewayname/cgi-bin/vale" width="100%" frameborder=0 scrolling="no" id="iFrameResizer0"></iframe>
            <input type="text" name="voucher" id="voucher" autocomplete="off" placeholder="insert voucher" value="" size="12" class="dest" />
            <input type="submit" value="OK" /><br/>
          </fieldset>
        </form>
<p> 
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
