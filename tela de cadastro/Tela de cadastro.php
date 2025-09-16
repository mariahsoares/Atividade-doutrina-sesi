<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="Tela de cadastro.css" />
</head>

<body>
    <main class="container">
        <section class="card">
            <h1>Criar Conta</h1>
            <form class="form">
                <label for="nome">Nome completo</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required />

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="exemplo@dominio.com" required />

                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Mínimo 8 caracteres" required />

                <label for="senha2">Confirmar senha</label>
                <input type="password" id="senha2" name="senha2" placeholder="Repita a senha" required />

                <div class="check-termos">
                    <label> </label>
                    <input type="checkbox" id="termos" required />
                    <label for="termos">Concordo com os termos de uso</label>
                    </label>
                </div>

                <button type="submit" class="btn">Cadastrar</button>
            </form>
        </section>
    </main>
</body>

</html>