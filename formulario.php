<?php
     if(isset($_POST['submit'])){
        // print_r('nome: ' . $_POST['nome']);
        // print_r(('<br>'));
        // print_r('email: ' . $_POST['email']);
        // print_r(('<br>'));
        // print_r('telefone: ' . $_POST['telefone']);
        // print_r(('<br>'));
        // print_r('genero: ' . $_POST['genero']);
        // print_r(('<br>'));
        // print_r('data de nascimento: ' . $_POST['data_nascimento']);
        // print_r(('<br>'));
        // print_r('cidade: ' . $_POST['cidade']);
        // print_r(('<br>'));
        // print_r('estado: ' . $_POST['estado']);
        // print_r(('<br>'));
        // print_r('endereco: ' . $_POST['endereco']);
        include_once ('config.php');
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $telefone=$_POST['telefone'];
        $genero=$_POST['genero'];
        $data_nasc=$_POST['data_nascimento'];
        $cidade=$_POST['cidade'];
        $estado=$_POST['estado'];
        $endereco=$_POST['endereco'];
        $result= mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES('$nome','$email','$telefone','$genero','$data_nasc','$cidade','$estado','$endereco')");
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulario de clientes</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">nome completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelinput">email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelinput">Telefone</label>
                </div>
                <p>sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">outro</label>
                <br><br>
                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>               
                <br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelinput">Cidade</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelinput">Estado</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelinput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset> 
        </form>
    </div>
</body>
</html>