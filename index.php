<?php
	include 'config.php';

	$ip =  $_SERVER['REMOTE_ADDR'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Soup Of The Day</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script type="text/javascript">
    	function dropDown(){
    		document.write('<select>');
			document.write('<option value="champignoncreme">Champignon Creme Soup</option>');
			document.write('<option value="champignon">Champignon Soup</option>');
			document.write('<option value="pompoen">Pompoen Soup</option>');
			document.write('<option value="courgette">Courgette Soup</option>');
			document.write('<option value="groenten">Groenten Soup</option>');
			document.write('<option value="bruinebonen">Bruine Bonen Soup</option>');
			document.write('<option value="chinesekippen">Chinese Kippen Soup</option>');
			document.write('<option value="tandoori">Tandoori Soup</option>');
			document.write('<option value="zwitsersekaas">Zwitserse Kaas Soup</option>');
			document.write('<option value="mosterd">Mosterd Soup</option>');
			document.write('<option value="erwten">Erwten Soup</option>');
			document.write('<option value="tomaatgroenten">Tomaat Groenten Soup</option>');
			document.write('<option value="mais">Mais Soup</option>');
			document.write('<option value="spinazie">Spinazie Soup</option>');
			document.write('<option value="">---------------------</option>');
			document.write('</select>');
    	}
    </script>

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<h2>
				Soup 1
			</h2>
				<p>
					<script type="text/javascript">
						dropDown();
					</script>
				</p>
			</div>
			<div class="col-md-4">
				<h2>
					Soup 2
				</h2>
				<p>
					<script type="text/javascript">
						dropDown();
					</script>
				</p>
			</div>
			<div class="col-md-4">
				<h2>
					Soup 3
				</h2>
				<p>
					<script type="text/javascript">
						dropDown();
					</script>
				</p>
			</div>
		</div>
	</div>
  </body>
</html>