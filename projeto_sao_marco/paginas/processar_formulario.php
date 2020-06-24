<?php

if(isset($_POST['nome'])){

?>

<!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Setor</th>
      <th scope="col">Dispositivo</th>
      <th scope="col">Mensagem</th>
    </tr>
  </thead> -->
  <tbody>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Setor</th>
      <th scope="col">Dispositivo</th>
      <th scope="col">Mensagem</th>
    </tr>
  </thead>
    <div class="alert alert-secondary" role="alert">
    Chamado inserido com sucesso! Você receberá em seu email um aviso quando seu problema for solucionado.
    </div>
    <tr>
        <td>
            <?= $_POST['nome'] ?>
        </td>
        <td>
            <?= $_POST['email'] ?>
        </td>
        <td>
            <?= $_POST['setor'] ?>
        </td>
        <td>
            <?= $_POST['dispositivo'] ?>
        </td>
        <td>
            <?= $_POST['mensagem'] ?>
        </td>
    </tr>
  </tbody>
</table>

<?php

}

?>