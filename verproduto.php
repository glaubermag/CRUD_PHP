<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <link rel="icon" href="../../favicon.ico">

    <title>Excluir - TechStore</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/starter-template.css" rel="stylesheet">
  </head>

  <body>     
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Tech Store</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="inclusao.php">Incluir</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="consulta.php">Consultar</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="geral.php">Consulta Geral</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="exclusao.php">Excluir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="alteracao.php">Alterar</a>
          </li>
        </ul>
        
      </div>
    </nav>

    <div class="container">
<h3>Consulta Geral - Detalhes do Produto</h3>
<?php

	function convertedata($data){
		$data_vetor = explode('-', $data);
		$novadata = implode('/', array_reverse ($data_vetor));
		return $novadata;
	}

	include_once('conexao.php');
	// recuperando a informação da URL
	// verifica se parâmetro está correto e dento da normalidade 
	if(isset($_GET['id']) && is_numeric(base64_decode($_GET['id']))){
			$id = base64_decode($_GET['id']);
	} else {
		header('Location: index.php');
	}
	// realizando a pesquisa com o id recebido
	$query = mysqli_query($conexao,"select * from tabelaimg where id = $id");

	if (!$query) {
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao)); 
	}

	$dados=mysqli_fetch_array($query);
	
	echo "<table boreder='1px'><tr><td width='250px'>";
	if (empty($dados['imagem'])){
			$imagem = 'SemImagem.png';
		}else{
			$imagem = $dados['imagem'];
		}
	echo "<img src='imagens/$imagem' >";
	echo "</td><td width='400px'>";
	echo "<b>Data: </b>".convertedata($dados['data'])."<br><br>";	
	echo "<b>Id: </b>".$dados['id']."<br>";
	echo "<b>Codigo: </b>".$dados['codigo']."<br>";
	echo "<b>Produto: </b>".$dados['produto']."<br>";	
	echo "<b>Descrição: </b>".$dados['descricao']."<br>";	
	echo "<b>Valor: </b> R$ ".$dados['valor']."<br>";
	echo "</td></tr></table>";
	
	mysqli_close($conexao);
?>
<br>
<input type='button' onclick="window.location='geral.php';" value="Voltar" class="button">

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
