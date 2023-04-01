<?php
    require_once('conexao.php');
    
    $nomeDoHotel = $_POST['nome'];
    $precoDoHotel = $_POST['preco'];
    $estadoDoHotel = $_POST['estado'];
    $con = Connection::getConnection();
    $sql = "INSERT INTO `hoteis`(`nome`,`preco`,`estado`)
    VALUES(:nome,:preco,:estado)";
    $stmt = $con->prepare($sql);
    $stmt->bindValue(':nome', $nomeDoHotel);
    $stmt->bindValue(':preco', $precoDoHotel);
    $stmt->bindValue(':estado', $estadoDoHotel);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $response = array(
            'success' => true,
            'message' => 'A solicitação foi processada com sucesso.'
        );
        return $response;
    }else{
        die();
        if ($stmt->rowCount() > 0) {
            $response = array(
                'success' => false,
                'message' => 'A solicitação falhou'
            );
            return $response;
    }
}
    
?>