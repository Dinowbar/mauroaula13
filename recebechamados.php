
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insere Chamado</title>
    <script>
function envia() {
    var endereco = 'salvachamadosjson.php';

    endereco += '?departamentos=' + document.getElementById('departamentos').value;
    endereco += '&descricao=' + document.getElementById('descricao').value;

    
    const xhttp = new XMLHttpRequest();

    xhttp.onload = function(){
       
        var objeto = JSON.parse(xhttp.responseText);

        if(objeto.resultado) {
        document.getElementById('saida').innerHTML = objeto.resultado;
        } else {
        document.getElementById('saida').innerHTML = 'Erro: ' + objeto.erro;
        }

        document.getElementById('departamentos').value = '';
        document.getElementById('descricao').value = '';

   }
    
    xhttp.open("GET", endereco);
    xhttp.send();
}
    </script>
</head>
<body>

<form action="salvachamadosjson.php">
    <label for="departamentos">Departamento:</label>
    <input type="text" id="departamentos">

    <label for="descricao">Descricão:</label>
    <input type="text" id="descricao">


    <input type="button" value='Inserir' onclick='envia()'>
</form>
<p id="saida"></p>
</body>
</html>  
