<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Professor</title>
    <link rel="stylesheet" href="tela principal do professor.css">
</head>

<body>
    <header>
        <h1>Nome do Professor</h1>
        <button>Sair</button>
    </header>

    <div class="container">
        <button class="botão-cadastrar">Cadastrar turma</button>

        <table>
            <thead>
                <tr>
                    <th>Número da turma</th>
                    <th>Nome da turma</th>
                    <th>vizualizar atividades</th>
                    <th>Excluir turma</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Desenvolvimento de Sistemas SA01</td>
                    <td>
                        <button class="btn-visualizar">Visualizar</button>
                    </td>
                    <td>
                        <button class="btn-excluir">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Redes de Computadores SN02</td>
                    <td>
                        <button class="btn-visualizar">Visualizar</button>
                    </td>
                    <td>
                        <button class="btn-excluir">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Desenvolvimento de Sistemas B402</td>
                    <td>
                        <button class="btn-visualizar">Visualizar</button>
                    </td>
                    <td>
                        <button class="btn-excluir">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>