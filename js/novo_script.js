
const livrosdiv = document.getElementById("listagem-livros");
const autoresdiv = document.getElementById("listagem-autores");

async function listarLivros()
{
    const resposta = await fetch("../php_db/FuncoesPHP.php?objeto=livros&metodo=listar");
    const livrosLista = await resposta.json();


    for (const objeto of livrosLista)
    {
        let cdlivro = document.createElement("p");
        let nmlivro = document.createElement("p");
        let dtpublicacao = document.createElement("p");
        let idautor = document.createElement("p");

        cdlivro.textContent = objeto["cdlivro"];
        nmlivro.textContent = objeto["nmlivro"];
        dtpublicacao.textContent = objeto["dtpublicacao"];
        idautor.textContent = objeto["idautor"];
        // add.textContent = livrosLista[i]["nmlivro"];
        livrosdiv.appendChild(cdlivro);
        livrosdiv.appendChild(nmlivro);
        livrosdiv.appendChild(dtpublicacao);
        livrosdiv.appendChild(idautor);
    }
}


async function listarAutores()
{
    const resposta = await fetch("../php_db/FuncoesPHP.php?objeto=autor&metodo=listar");
    const autorLista = await resposta.json();

    for (const obj of autorLista)
    {
        let idautor = document.createElement("p");
        let nmautor = document.createElement("p");
        idautor.textContent = obj["idautor"];
        nmautor.textContent = obj["nmautor"];
        autoresdiv.appendChild(idautor);
        autoresdiv.appendChild(nmautor);
    }
}