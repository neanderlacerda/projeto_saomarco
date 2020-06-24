<div class="row">
    <div class="col">

    <?php
      if(isset($_POST['nome'])){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $setor  = $_POST['setor'];
        $dispositivo = $_POST['dispositivo'];
        $mensagem = $_POST['mensagem'];

        $sql = "INSERT INTO 
                  chamado (nome, email, setor, dispositivo, mensagem) 
                  VALUES ('$nome','$email','$setor','$dispositivo','$mensagem')";

        if( mysqli_query($link, $sql) === TRUE ){

      ?>

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Chamado enviado com sucesso! Aguarde entrarmos em contato com você.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <center>
        <a href="?pagina=inicio" class="btn btn-primary">Voltar para Início</a>
      </center>

      <?php
        }
        else{
      ?>

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Erro ao enviar chamado! Por favor, tente novamente!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <center>
        <a href="?pagina=abrir_chamado" class="btn btn-primary">Tentar Novamente</a>
      </center>

      <?php

        }

      }
      else{
        
        header("Location: ?pagina=inicio");

      }

    ?>

  </div>
</div>