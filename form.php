<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form.php</title>
</head>

<body>

    <form id="contato" action="recebe.php" method="get">
       
                    <label for="nome">Nome</label>
                    <br><input type="text" name="nome" id="nome" placeholder="Informe o nome"><br>
    
 
                     <label for="sobrenome">Sobreome</label>
                     <br><input type="text"name="sobrenome" id="sobrenome"placeholder="sobrenome"><br>

                     <label for="nascimento">Data de Nascimento</label>
                     <br><input type="date"name="nascimento" id="nascimento"placeholder="nascimento"> <br>

                     <label for="email">E-mail</label>
                     <br><input type="email"name="email" id="email"placeholder="Informe email"><br>

                     <br><input type="submit" name="submit" id="submit" value="Salvar"><br>


    </form>
</body>

</html>