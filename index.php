<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Desafio Semana 28 </title>
</head>
<body>
    <script>
    	// Desafio semana 28
    </script>

	<form data-js="form-cep">
		<input type="text" data-js="input-cep">
		<button type="submit" >Consultar CEP</button>
	</form>

	<div >
	   <h2 data-js="status">0</h2>

	</div>

		

	<div data-js="cep-info" >
		<p><strong>Logradouro: </strong> <span data-js="logradouro" ></span> </p>
		<p><strong>Bairro: </strong> <span data-js="bairro">-</span> </p>
		<p><strong>Estado: </strong> <span data-js="estado">-</span> </p>
		<p><strong>Cidade: </strong> <span data-js="cidade">-</span> </p>
		<p><strong>CEP: </strong>   <span data-js="cep">-</span>  </p>
	</div>

<script src="lib/dom.js"></script>
<script type="text/javascript" src="lib/lib.js"></script>
</body>
</html>