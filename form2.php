<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form2.php</title>
</head>

<body>

<form id="contato" action="recebe2.php" method="post">
       
                <label for="nome">Nome</label>
                <br><input type="text" name="nome" id="nome" placeholder="Informe o nome"><br>

                <label for="sobrenome">Usuário</label>
                <br><input type="text"name="usuario" id="usuario"placeholder="informe"><br>

                <label for="senha"> Senha </label>
                <br><input type="passaword" name ="senha" id="senha" placeholder="Informe a senha">
            

                <br><label for="cargo">Cargo</label>
                <br><select is="cargo" name= "cargo">
                <option value="1">Gerente </option>
                <option value="2">Auxiliar Administrativo </option>
                <option value="3">Secretário</option>
                <option value="4">Aprendiz </option>

            </select>
            <br><label for="cargo">Administrador</label>
            <input type="radio" name="administrador" id="administrador" value="S">Sim
            <input type="radio" name="administrador" id="administrador" value="N">Não
            <br>

            <input type="submit" name="submit" id="submit" value="Cadastar">
        </form>
     </body>
    </html>

    