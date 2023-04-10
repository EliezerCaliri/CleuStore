<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Empresa</title>
</head>
<body>
    <form action="/cadastrar-empresa" method="POST">
        @csrf
       <label for="name">Nome</label>
       <input type="text" id="name" name="name"> <br>
       
       <label for="cnpj">CNPJ</label>
       <input type="text" id="cnpj" name="cnpj"> <br>
       
       <label for="endereco">Endereço</label>
       <input type="text" id="endereco" name="endereco"> <br>
       
       <button type="submit">Enviar</button>
    </form>
    
</body>
</html>