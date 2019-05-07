<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <link rel="icon" href="../../favicon.ico">

    <title>Ver Alteração - TechStore</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="inclusao.php">Incluir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="consulta.php">Consultar</a>
          </li>
          <li class="nav-item">
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
<h3>Alteração</h3>
<?php
	include_once('conexao.php');
	// recuperando 
	$codigo = $_POST['codigo'];

	// criando a linha do  SELECT
	$sqlconsulta =  "select * from tabelaimg where codigo = $codigo";
	
	// executando instrução SQL
	$resultado = @mysqli_query($conexao, $sqlconsulta);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao)); 
	} else {
		$num = @mysqli_num_rows($resultado);
		if ($num==0){
		echo "<b>Código: </b>não localizado !!!!<br><br>";
		echo '<input type="button" onclick="window.location='."'alteracao.php'".';" value="Voltar"><br><br>';
		exit;
		}else{
			$dados=mysqli_fetch_array($resultado);
		}
	} 
	mysqli_close($conexao);
?>
<form name="produto" action="alterar.php" method="post">
	<b>Código:</b> <input type="number" name="codigo" value='<?php echo $dados['codigo']; ?>' readonly><br><br>
	<b>Produto:</b> <input type="text" name="produto" maxlength='80' style="width:550px" value='<?php echo $dados['produto']; ?>'><br><br>
	<b>Descrição: </b><br><textarea name="descricao" rows='3' cols='100' style="resize: none;" ><?php echo $dados['descricao']; ?></textarea><br><br>
	<b>Data: </b> <input type="date" name="data" value='<?php echo $dados['data']; ?>'><br><br>
	<b>Valor: R$ </b><input type="number" step="0.01" name="valor" value='<?php echo $dados['valor']; ?>'> <br><br>
	<input type="submit" value="Ok" class="button">
	<input type="reset" value="Limpar" class="button">
	<input type='button' onclick="window.location='alteracao.php';" value="Voltar" class="button">
</form>

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


