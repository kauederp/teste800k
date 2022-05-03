<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class='container-fluid m-0 p-0'>
    <header>
        <nav class="d-flex p-4 bg-dark text-light">
            <div class="col-11"><p class="fw-bold">Gerenciador de <b class="text-primary">usuários</b></p></div>
            <div><a class="btn btn-light text-primary"   href="?p=login">login</a></div>
        </nav>
    </header>
    <?php
        if (isset($_GET['a'])) {
            switch ($_GET['a']) {
                case 0:
                    echo "<p id='alert' class='alert-success'>Registrado.</p>";
                    break;
                case 1:
                    echo "<p id='alert' class='alert-danger'>Email já existe.</p>";
                    break;
                default:
                    echo "<p id='alert' class='alert-danger'>Ocorreu um erro inesperado.</p>";
                    break;
            }
        }
    ?>
    <div class="d-flex justify-content-center">
        <form class="mt-5 bg-light col-6 p-3" action="classes/Registro.php" method="post">
            <h3>Registrar</h3>
            <label for="name">Nome Completo:</label>
            <input required class="form-control" type="text" name="name"  id="name">
            <label for="email">Email: </label>
            <input required class="form-control" type="email" name="email" id="email">
            <div class="d-flex justify-content-between">
            <div class="col-6">
                <label for="cep">CEP:</label>
                <input class="form-control" name="cep" maxlength="8" type="text" id="cep">
            </div>
            
            <div class="col-5">
                <label for="bairro">Bairro:</label>
                <input class="form-control" name="bairro" type="text" id="bairro">
            </div>
            
        </div>
        <label for="logadrouro">Logadrouro:</label>
                <input class="form-control" type="text" name="logradouro" id="logradouro">
        <div class="d-flex justify-content-between">
            <div class="col-6">
                <label for="cidade">Cidade:</label>
                <input class="form-control" name="cidade" type="text" id="cidade">
            </div>
            <div class="col-3">
                <label for="numero">Número</label>
                <input class="form-control" type="number" id="numero">
            </div>
            <div class="col-2">
                <label for="estado">UF:</label>
                <input size="2" class="form-control" name="estado" type="text" id="estado">
            </div>
        </div>
        
        <label for="senha">Senha:</label>
        <input required class="form-control" type="password" name="password" id="password">
        <label for="senha">Confirmar Senha:</label>
        <input required class="form-control" type="password" id="passwordConfirm">

        <div class="d-flex justify-content-end ">
            <input id="registrar" class="btn btn-success mt-2" name="registrar" type="submit" value="Registrar">
        </div>
            
        </form>
    </div>
<script>
    var nome = document.getElementById('name')
    var email = document.getElementById('email')
    var cep = document.getElementById('cep')
    var bairro = document.getElementById('bairro')
    var logradouro = document.getElementById('logradouro')
    var cidade = document.getElementById('cidade')
    var numero = document.getElementById('numero')
    var estado = document.getElementById('estado')
    var password = document.getElementById('password')
    var passwordConfirm = document.getElementById('passwordConfirm')
    var registrar = document.getElementById('registrar')
    setTimeout(()=>{
        let alert = document.getElementById('alert')
        alert.remove();
    },2000)
    
    registrar.classList.add('disabled')
    passwordConfirm.onblur = ()=>{
        if(password.value  != passwordConfirm.value){
            registrar.classList.add('disabled')
        }else{
            if(passwordConfirm.value !='')
            registrar.classList.remove('disabled')
        }
    }

    cep.onblur = ()=>{
        if(cep.value.length==8){
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                viacep = JSON.parse(this.responseText);
                estado.value = viacep['uf']
                cidade.value = viacep['localidade']
                bairro.value = viacep['bairro']
                logradouro.value = viacep['logradouro']
            }
            xhttp.open('GET', 'https://viacep.com.br/ws/' +cep.value+'/json/', true);
            xhttp.send();
        }
    }
    
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>