
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Biblioteca YomeLivros - Testes de desenvolvimento</title>
        <link rel="stylesheet" href="estilos/style_testedev.css">
    </head>

    <body>
        <header>
            <h1>Testes do banco de dados (PHP)</h1>
        </header>
        <hr>
        <main>
            <!-- livros -->
            <button onclick="listarLivros()">Fazer uma listagem dos livros</button>
            <p>Resultado:</p>
            <div id="listagem-livros"></div>
            <hr>
            <button onclick="listarAutores()">Fazer uma listagem dos autores</button>
            <p>Resultado:</p>
            <div id="listagem-autores"></div>
            <hr>
            
        </main>
    </body>
    
    <script src="../js/novo_script.js"></script>
</html>