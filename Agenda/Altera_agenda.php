<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = "SELECT * FROM agenda where id_agenda=$id_agenda";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--http://localhost/PRW/Altera_agenda?id_agenda=1 -->
    <h1>Cadastro de agenta - IFSP</h1>
    <form action="Altera_agenda_exe.php" method="POST" enctype="multipart/form-data">
        <input name="id_agenda" type="hidden"
            value="<?php echo $row['id_agenda'] ?>"> 
    <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome"
            value="<?php echo $row['nome'] ?>">
        </div>
        <div>
            <label for="apelido">Apelido</label>
            <input type="text" name="apelido" id="apelido"
            value="<?php echo $row['apelido'] ?>">
            
        </div>
        <div>           
             <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco"
             value="<?php echo $row['endereco'] ?>">
        </div>
        <div>
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro"
        value="<?php echo $row['bairro'] ?>">
        </div>
        <div>
        <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade"
            value="<?php echo $row['cidade'] ?>">
        </div>
        <div>
             <label for="estado">Estado</label>
            <select id="estado" name="estado">
              <option value="ac">Acre</option>
              <option value="al">Alagoas</option>
              <option value="ap">Amapá</option>
              <option value="am">Amazonas</option>
              <option value="ba">Bahia</option>
              <option value="ce">Ceará</option>
              <option value="df">Distrito Federal</option>
              <option value="es">Espírito Santo</option>
              <option value="go">Goiás</option>
              <option value="ma">Maranhão</option>
              <option value="mt">Mato Grosso</option>
              <option value="ms">Mato Grosso do Sul</option>
              <option value="mg">Minas Gerais</option>
              <option value="pa">Pará</option>
              <option value="pb">Paraíba</option>
              <option value="pr">Paraná</option>
              <option value="pe">Pernambuco</option>
              <option value="pi">Piauí</option>
              <option value="rj">Rio de Janeiro</option>
              <option value="rn">Rio Grande do Norte</option>
              <option value="rs">Rio Grande do Sul</option>
              <option value="ro">Rondônia</option>
              <option value="rr">Roraima</option>
              <option value="sc">Santa Catarina</option>
              <option value="sp">São Paulo</option>
              <option value="se">Sergipe</option>
              <option value="to">Tocantins</option>
            </select
             value="<?php echo $row['estado'] ?>">
    </div>
        <div>
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone" 
            placeholder="Formato (18) 9999-8888"
            pattern="\([0-9]{2}\)([9]{1})?[0-9]{4-5}-[0-9]{4}"
            value="<?php echo $row['telefone'] ?>">
        </div>
        <div>
            <label for="celular">Celular</label>
            <input type="tel" name="celular" id="celular" 
            placeholder="Formato (18) 9999-8888"
            pattern="\([0-9]{2}\)([9]{1})?[0-9]{4-5}-[0-9]{4}"
            value="<?php echo $row['celular'] ?>">
        </div>
        <div>
        <label for="email">E-mail</label>
            <input type="email" name="email" id="email"
            value="<?php echo $row['email'] ?>">
        </div>
        <div>
            <input type="submit" value="Salvar">
        </div>

    </form>
</body>
</html>