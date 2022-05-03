<?php

  

    if(isset($_POST['editar'])){
        try{

            $endereco = json_encode([
                'cep'       => $_POST['cep'],
                'estado'    => $_POST['estado'],
                'cidade'    => $_POST['cidade'],
                'logradouro'=> $_POST['logradouro'],
                'cep'       => $_POST['cep'],
            ]);

            $stmt = $db->prepare("UPDATE users SET name = :name, email = :email, endereco = :endereco, password = :password WHERE id = :id");
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->bindParam(':name', $_POST['name']);
            $stmt->bindParam(':email', $_POST['email']);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':password', password_hash($_POST['password'],PASSWORD_DEFAULT));
            $stmt->execute();
            header('Location: '.$url.'?p=registro&a=0');
        }catch(PDOException $e) {
            header('Location: '.$url.'?p=registro&a=1');
        }
    } 



    
    
    $stmt = $db->prepare("SELECT id,name,endereco, email FROM users where id = :id");
            $stmt->bindValue(':id', $_GET['id']);
            $stmt->execute();
            $linha = $stmt->fetch(PDO::FETCH_ASSOC);
           
?>
<div id="modalFundo" style="position: fixed;z-index: 9;height: 100vh;top:0;" class="col-12 bg-dark opacity-75"></div>

<div id="modal" class="d-flex justify-content-center modal">
    
    <form class="m-5 bg-light col-8 col-md-6 p-3 opacity-100" action="" method="post">
        <div class="d-flex justify-content-between">
            <h3>Editar</h3>
            <button id="btnFechar" class="border-0 bg-transparent text-danger text-decoration-none">x</button>
        </div>
        
        
        <input name="id" type="hidden">
        <label for="name">Nome Completo:</label>
        <input required class="form-control" type="text" name="name"  id="name" value="<?php echo $linha['name'];?>">
        <label for="email">Email:</label>
        <input required class="form-control" type="email" name="email" id="email" value="<?php echo $linha['email'];?>">
        
        
        
        <div class="d-flex justify-content-between">
            <div class="col-6">
                <label for="cep">CEP:</label>
                <input class="form-control" maxlength="8" type="text" id="cep">
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

        <div class="d-flex justify-content-end "><input id="editar" class="btn btn-success mt-2" name="editar" type="submit" value="Editar"></div>
    </form>
</div>
<script>
    var modalFundo = document.getElementById("modalFundo")
    var modal = document.getElementById("modal")
    var btnFechar = document.getElementById("btnFechar")
    btnFechar.onclick = ()=>{
        modalFundo.remove()
        modal.remove()
        window.location = window.location.href.split("?")[0];
    }

    var password = document.getElementById('password')
    var passwordConfirm = document.getElementById('passwordConfirm')
    var editar = document.getElementById('editar')
    var cep = document.getElementById('cep')
    var estado = document.getElementById('estado')
    var cidade = document.getElementById('cidade')
    var bairro = document.getElementById('bairro')
    var numero = document.getElementById('numero')
    var logradouro = document.getElementById('logradouro')
    editar.classList.add('disabled')
    setInterval(()=>{
        if(password.value  != passwordConfirm.value){
            editar.classList.add('disabled')
        }else{
            if(passwordConfirm.value !='')
                editar.classList.remove('disabled')
        }
    },300)
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