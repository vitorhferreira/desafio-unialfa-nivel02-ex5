<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $hobbie = $_POST['hobbie'];

    if (strlen($nome) < 6) {
        echo "Erro: O nome precisa ter no mínimo 6 caracteres.";
        exit();
    }

    if ($idade < 18) {
        echo "Erro: A idade precisa ser maior que 18.";
        exit();
    }

    echo "<pre>";
    echo "Dados recebidos:\n";
    echo "Nome: " . $nome . "\n";
    echo "Email: " . $email . "\n";
    echo "Idade: " . $idade . "\n";
    echo "Hobbie: " . $hobbie . "\n";
    echo "</pre>";
}
?>
