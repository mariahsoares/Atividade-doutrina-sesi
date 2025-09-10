<?php
require_once 'Banco de dados.php';

$bancoService = new UsuariosService();

$usuarios = $bancoService->PegarUsuarios();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $foiValidado = false;
        if (!isNullOrEmpty($email) && !isNullOrEmpty($senha)) {
            foreach ($usuarios as $sla) {
                if ($sla['email'] === $email && password_verify($senha, $sla['senha'])) {
                    $foiValidado = true;
                    break;
                }
            }

            if ($foiValidado) {
                header(("location: tela principal do professor.php"));
                exit;
            } else {
                echo '
    <!-- Toast -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast align-items-center text-bg-warning border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    Usuario Não cadastrado
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Fechar"></button>
            </div>
        </div>
    </div>
    <script>
        const toastEl = document.getElementById("liveToast");
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
    </script>
    ';
            }
        } else {
            echo '
    <!-- Toast -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast align-items-center text-bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    gustavo é um boiolão
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Fechar"></button>
            </div>
        </div>
    </div>
    <script>
        const toastEl = document.getElementById("liveToast");
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
    </script>
    ';
        }
    }
}

function isNullOrEmpty($str)
{
    return (!isset($str) || trim($str) === '');
}


// $salvarUsuario = $bancoService->AdicionarUsuario();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> <!--é um link para importar icones-->
    <link rel="stylesheet" href="tela de login.css"> <!--Para se conectar com o css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>TELA DE LOGIN</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <header>

    </header>
    <main class="container">
        <form action="" method="post"> <!--Para fazer formulário, uma área onde o usuário pode inserir dados-->
            <h1>Login</h1>
            <div class="input-box"> <!--uma caixa onde o usuário pode digitar ou selecionar informações. Ele faz parte de um formulário e serve para coletar dados que depois podem ser enviados ou processados.-->
                <input placeholder="Usuário" name="email" type="email"> <!--O placeholder é para deixar aquela mensagem "digite sua resposta"-->
                <i class="bx bxs-user"></i> <!--Isso é para o icone que pegamos num site, esse é o código para "chamar ele"-->
            </div>
            <div class="input-box">
                <input placeholder="Senha" name="senha" type="password">
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div>
                <label class="lembrar-esquecer"> <!--Aqui, a classe remember-forgot ajudaria a estilizar o bloco com o checkbox e o link.-->
                    <label><input type="checkbox"> Lembrar senha</label> <!--coloquei dentro de um label por que o "lembrar senha" tava ficando separado da caixinha-->
                    <a href="#">Esqueci a senha</a>
                </label>
            </div>

            <button type="submit" name="login" class="login">Login</button>

            <div class="registrar-link"> <!--Também ajuda a estilizar depois no css-->
                <p>Não tem uma conta? <a href="../tela de cadastro/Tela de cadastro.php" name="cadastro">Cadastre-se</a></p>
            </div>

        </form>

    </main>
    <footer>

    </footer>
</body>

</html>