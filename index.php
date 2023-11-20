<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Construsite Brasil</title>
</head>
<body>
    <header>
    <img src="images\logo.png" alt="Construsite Brasil Logo" id="logo">
        <h1>Bem-vindo ao Construsite Brasil</h1>
    </header>

<section id="planos">
    
    <div class="plan-option">
        <h3>Plano Básico</h3>
        <p>Perfeito para quem está começando. Inclui:</p>
        <ul>
            <li>Site com até 5 páginas</li>
            <li>Hospedagem básica</li>
            <li>Suporte por e-mail</li>
        </ul>
        <a href="https://wa.me/seu-numero-de-telefone/?text=Quero%20escolher%20o%20Plano%20Básico" class="btn-plan">Escolher Plano</a>
    </div>
    <div class="plan-option">
        <h3>Plano Intermediário</h3>
        <p>Ideal para empresas em crescimento. Inclui:</p>
        <ul>
            <li>Site com até 10 páginas</li>
            <li>Hospedagem avançada</li>
            <li>Suporte por e-mail e telefone</li>
        </ul>
        <a href="https://wa.me/seu-numero-de-telefone/?text=Quero%20escolher%20o%20Plano%20Intermediário" class="btn-plan">Escolher Plano</a>
    </div>
    <div class="plan-option">
        <h3>Plano Avançado</h3>
        <p>Para necessidades corporativas. Inclui:</p>
        <ul>
            <li>Site personalizado</li>
            <li>Hospedagem premium</li>
            <li>Suporte 24/7 por e-mail, telefone e chat</li>
        </ul>
        <a href="https://wa.me/seu-numero-de-telefone/?text=Quero%20escolher%20o%20Plano%20Avançado" class="btn-plan">Escolher Plano</a>
    </div>
</section>


<section id="contato">
    <h2>Entre em Contato</h2>
    <form action="processa_formulario.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>
        
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
        
        <input type="submit" value="Enviar">
    </form>
</section>

    
</body>
</html>
