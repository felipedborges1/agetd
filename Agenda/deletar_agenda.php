<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = "DELETE FROM agenda where id_agenda=$id_agenda";
    $result = mysqli_query($con,$sql);
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados: ". mysqli_error($con)."!";
?>
    <a href="Listar_agenda.php">Voltar</a>