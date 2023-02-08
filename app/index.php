<?php

require __DIR__ . "/../vendor/autoload.php";


try {
    $conn = new PDO(
        'mysql:host=localhost;dbname=escola',
        'root',
        '123456789'
    );

    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $conn->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );

    // $result = $conn->exec("INSERT INTO alunos (name) VALUES ('Cintia'), ('Jonas');");
    // if ($result) {
    //     echo $result;
    // }

    // $statment = $conn->query("SELECT * FROM alunos;");
    // $result = $statment->fetchAll();

    // echo '<pre>';
    // print_r($result);
    // die;

    // $id = $_GET['id'] ?? 1;
    // $sql = "SELECT * FROM alunos where id = '" . $id . "';";
    // $statment = $conn->query($sql);

    // while ($result = $statment->fetch()) {
    //     echo "id: {$result['id']} - Aluno: {$result['name']} <br>";
    // }
    // echo '<pre>';
    // print_r($result);
    // die;

    // $id = $_GET['id'] ?? 1;

    // $sql = "SELECT * FROM alunos where id = :id";
    // $statment = $conn->prepare($sql);
    // $statment->execute([
    //     ':id' => $id,
    // ]);

    // while ($result = $statment->fetch()) {
    //     echo "id: {$result['id']} - Aluno: {$result['name']} <br>";
    // }
    // echo '<pre>';
    // print_r($result);
    // die;

    // $id = $_GET['id'] ?? 1;

    // $sql = "DELETE FROM alunos WHERE id = :id";
    // $stmn = $conn->prepare($sql);
    // $stmn->bindValue(':id', $id, PDO::PARAM_INT);
    // $result = $stmn->execute();

    // if ($stmn->rowCount() > 0) {
    //     echo 'Aluno excluido com sucesso!';
    // }
    // else {
    //     echo 'Aluno não existe';
    // }

} catch (PDOException $e) {
    echo $e->getMessage('Conexão falhou');
}

$conn->beginTransaction();

try {
    $sql = "INSERT INTO alunos (name) VALUES (:name);";
    $stmn = $conn->prepare($sql);
    $exec = $stmn->execute([
        ':name' => 'Cintia1',
    ]);

    $sql = "INSERT INTO alunos (name) VALUES (:name);";
    $stmn = $conn->prepare($sql);
    $exec = $stmn->execute([
        ':name' => 'Amanda1',
    ]);

    $sql = "INSERT INTO alunos (name) VALUES (:name);";
    $stmn = $conn->prepare($sql);
    $exec = $stmn->execute([
        ':name' => 'Enrique1',
    ]);

    $conn->commit();

    echo 'Commitado';
}
catch (PDOException $e) {
    $conn->rollBack();
    echo $e->getMessage();
}




// use Banco\Services\ExecutaLogin;
// use Banco\Model\Pessoas\Clientes;
// use Banco\Model\Pessoas\Diretor;
// use Banco\Model\Pessoas\Estagiario;
// use Banco\Model\Pessoas\Endereco;
// use Banco\Model\Pessoas\Telefone;

// //$estagiario->nome = 'Amanda';
// //echo $estagiario;

// $estagiario = new Estagiario (
//     nome: 'Celso',
//     cpf: '12345',
//     endereco: new Endereco('123', '123456','Rua das Flores'),
//     telefone: [],
//     salario: 500
// );

// echo '<pre>';
// var_dump($estagiario);
// die;

// // $fone =  new Telefone('11', '95826-0001');

// // for($i = 1; $i <= 4 ; $i++) {
// //     $estagiario->addTelefone(new Telefone('11', '95826-000'. $i));
// // }


// // $fone =  new Telefone('11', '95826-0001');
// $estagiario->addTelefone(new Telefone('11', '95826-0002'));
// $estagiario->addTelefone(new Telefone('21', '92455-0007'));
// $estagiario->addTelefone(new Telefone('21', '92455-0007'));
// $estagiario->addTelefone(new Telefone('21', '92455-0007'));

// echo '<pre>';
// var_dump($estagiario);
// die;

// echo '<pre>';
// var_dump($estagiario);
// die;

// $estagiario->setSalario(2000);
// echo $estagiario->salario; // __get

// // var_dump($estagiario);
// die;

// $diretor = new Diretor(200);
// echo '<pre>';
// var_dump($diretor);
// die;

// $estagiario = new Estagiario();
// $estagiario->setSalario(2000);
// var_dump($estagiario);
// echo '<hr>';

// $estagiarioBonificacao = new ExecutaLogin();
// $estagiarioBonificacao->bonificao($estagiario, 0.06);


// var_dump($estagiario);

// echo '<hr>';

// $diretor = new Diretor();
// $diretor->setSalario(2000);
// $diretorBonificacao = new ExecutaLogin();
// $diretorBonificacao->bonificao($diretor, 0.1);
// var_dump($diretor);


// // $loginUser = new ExecutaLogin();
// // echo $loginUser->acessarSistema(new Clientes(), '123');
