<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload Ajax</title>
  <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap-theme.css">
  <link rel="shortcut icon" href="http://jsbooks.revolunet.com/img/ico/favicon.ico">
  <style>
    .btn-file {
      position: relative;
      overflow: hidden;
    }
    .btn-file input[type=file] {
      position: absolute;
      top: 0;
      right: 0;
      min-width: 100%;
      min-height: 100%;
      font-size: 100px;
      text-align: right;
      filter: alpha(opacity=0);
      opacity: 0;
      outline: none;
      background: white;
      cursor: inherit;
      display: block;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>
      Teste Upload Ajax/jQuery
    </h2>
    <!-- <form id="formulario" method="POST" enctype="multipart/form-data" action="action_ajax/ajax.php"> -->
    <form id="formulario">
      <div class="btn btn-primary btn-file">
        Imagem      
        <input type="file" id="imagem" name="imagem" />
        <input type="hidden" name="teste" value="teste">
      </div>
      <button type="button" id="enviar" class="btn btn-success">Enviar</button>

      <div class="progress" style="width: 1000px;">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
          0%
        </div>
      </div>
    </form>
  </div>




  <script type="text/javascript" src="vendor/jquery/dist/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.form.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>