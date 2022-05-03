<?php
    
    if($_POST['sair']){
        setcookie('user', '', time() - 3600, '/');
        unset($_COOKIE['user']);
        header('Location: '. $url); 
    }
    if(isset($_POST['id']) && isset($_POST['editar'])){
        header('Location: '. $url.'?p=editor&id='.$_POST['id']);
    }
    if(isset($_POST['id']) && isset($_POST['excluir'])){
        $stmt = $db->prepare('DELETE FROM users WHERE id = :id');
        $stmt->bindParam(':id', $_POST['id']);
        $stmt->execute();
        header('Location: '.$url.'?p=registro&a=2');
    }
    
    if(isset($_POST['registrar'])){
        try{

            $endereco = json_encode([
                'cep'       => $_POST['cep'],
                'estado'    => $_POST['estado'],
                'cidade'    => $_POST['cidade'],
                'logradouro'=> $_POST['logradouro'],
                'cep'       => $_POST['cep'],
            ]);

            $stmt = $db->prepare("INSERT INTO users VALUES(NULL,:name,:email,:endereco,:password)");
            $stmt->bindParam(':name', $_POST['name']);
            $stmt->bindParam(':email', $_POST['email']);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':password', password_hash($_POST['password'],PASSWORD_DEFAULT));
            $stmt->execute();
            header('Location: '.$url.'?p=registro&a=0');
        }catch(PDOException $e) {
            echo $e;
            header('Location: '.$url.'?p=registro&a=1');
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="container-fluid m-0 p-0">
    <header>
        <nav class="d-flex p-4 bg-dark text-light">
            <div class="col-11"><p class="fw-bold">Gerenciador de <b class="text-primary">usuários</b></p></div>
            <form method="post" action=""><input name="sair" type="submit" class="btn btn-danger" value="Logout"></input></form>
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
                case 2:
                        echo "<p id='alert' class='alert-success'>Excluido com sucesso.</p>";
                        break;
                default:
                    echo "<p id='alert' class='alert-danger'>Ocorreu um erro inesperado.</p>";
                    break;
            }
        }
    ?>
    <div class="d-flex justify-content-center">
    <form class="mt-5 bg-light col-6 p-3" action="classes/Registro.php" method="post">
            
            <label for="name">Nome Completo:</label>
            <input required class="form-control" type="text" name="name" id="addname">
            <label for="email">Email: </label>
            <input required class="form-control" type="email" name="email" id="addemail">
            <div class="d-flex justify-content-between">
            <div class="col-6">
                <label for="cep">CEP:</label>
                <input class="form-control" name="cep" maxlength="8" type="text" id="addcep">
            </div>
            
            <div class="col-5">
                <label for="bairro">Bairro:</label>
                <input class="form-control" name="bairro" type="text" id="addbairro">
            </div>
            
        </div>
        <label for="logadrouro">Logadrouro:</label>
                <input class="form-control" type="text" name="logradouro" id="addlogradouro">
        <div class="d-flex justify-content-between">
            <div class="col-6">
                <label for="cidade">Cidade:</label>
                <input class="form-control" name="cidade" type="text" id="addcidade">
            </div>
            <div class="col-3">
                <label for="numero">Número</label>
                <input class="form-control" type="number" id="addnumero">
            </div>
            <div class="col-2">
                <label for="estado">UF:</label>
                <input size="2" class="form-control" name="estado" type="text" id="addestado">
            </div>
        </div>
        


    
        <label for="senha">Senha:</label>
        <input required class="form-control" type="password" name="password" id="addpassword">
        <label for="senha">Confirmar Senha:</label>
        <input required class="form-control" type="password" id="addpasswordConfirm">

            <div class="d-flex justify-content-end "><input id="addregistrar" class="btn btn-success mt-2" name="registrar" type="submit" value="Registrar"></div>
            
        </form>
    </div>
    <div class="d-flex justify-content-center">
        
        <div class="col-10">
            <table class="table">
                <thead class="table">
                    <tr>
                        <th>id</th>
                        <th>nome</th>
                        <th>email</th>
                        <th class="text-center">ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        try{
                            $consulta = $db->query("SELECT id,name, email FROM users;");


                            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                $formEdit = 
                                    '<form class="m-0 p-0 col-4" method="post" action="">
                                        <input name="id" hidden value="'.$linha['id'].'"></input>
                                        <input name="editar" type="submit" class="row btn btn-warning" value="Editar"></input>
                                    </form>';
                                $formExcluir = 
                                    '<form class="m-0 p-0 col-4" method="post" action="">
                                        <input name="id" hidden value="'.$linha['id'].'"></input>
                                        <input name="excluir" type="submit" class="row btn btn-danger" value="Excluir"></input>
                                    </form>';
                                echo '<tr><td>'. $linha['id'] . '</td>' . '<td>'. $linha['name'] . '</td><td>' . $linha['email'] . '</td>' . '<td class="d-flex justify-content-evenly">' . $formEdit . $formExcluir . '</td>' . '</tr>';
                                        
                            
                            }
                            
                        
                        }catch(PDOException $e) {
                            echo $e;
                            //header('Location: '.$url.'?p=registro&a=1');
                        }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        var addnome             = document.getElementById('addname')
        var addemail            = document.getElementById('addemail')
        var addcep              = document.getElementById('addcep')
        var addbairro           = document.getElementById('addbairro')
        var addlogradouro       = document.getElementById('addlogradouro')
        var addcidade           = document.getElementById('addcidade')
        var addnumero           = document.getElementById('addnumero')
        var addestado           = document.getElementById('addestado')
        var addpassword         = document.getElementById('addpassword')
        var addpasswordConfirm  = document.getElementById('addpasswordConfirm')
        var addregistrar        = document.getElementById('addregistrar')
        setTimeout(()=>{
            let alert = document.getElementById('alert')
            alert.remove();
        },2000)
        addregistrar.classList.add('disabled')
        addpasswordConfirm.onblur = ()=>{
            if(addpassword.value  != addpasswordConfirm.value){
                addregistrar.classList.add('disabled')
            }else{
                if(addpasswordConfirm.value !='')
                addregistrar.classList.remove('disabled')
            }
        }

        addcep.onblur = ()=>{
            if(addcep.value.length==8){
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    viacep = JSON.parse(this.responseText);
                    addestado.value = viacep['uf']
                    addcidade.value = viacep['localidade']
                    addbairro.value = viacep['bairro']
                    addlogradouro.value = viacep['logradouro']
                }
                xhttp.open('GET', 'https://viacep.com.br/ws/' +addcep.value+'/json/', true);
                xhttp.send();
            }
        }
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>