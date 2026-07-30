// Selecionar o fomurlario e retornar e a div de mensagens
const form = document.getElementById("formProduto");
const mensagem = document.getElementById("mensagem");

// Executa quando o formulario e enviado
form.addEventListener("submit", async function (evento) {
    // Impede o recarregamento da pagina
    evento.preventDefault();

    // Captura dados do form
    const dados = new FormData(form);

    // Mostra os no console (F12) dados do form do em tabela
    console.table(Object.fromEntries(dados.entries()));
     console.log("simples");

    // Exibe uma mensagem enquanto os dados são enviados
    // mensagem.className = "alert alert-info mt-3";
    // mensagem.textContent = "Enviando dados...";

    try{
        // Envia os dados para o Controller
        const resposta = await fetch("controllers/ProdutoController.php",{
            method: "post",
            body: dados
        });
    }catch(erro){
        // Exibe mensagem caso ocorra erro
        mensagem.className = "alert alert-danger mt-3";
        mensagem.textContent = "Erro ao enviar os dados";

        console.log(erro);

    }
})