<!-- TODO: CSS da Página -->
<link rel="stylesheet" href="assets/css/produto.css">

<section>
    <div class="col-md-6 mx-auto">
        <h2> Cadastro de produtos </h2>

        <!-- Formulário -->
        <form id="formProduto">


            <!-- Nome -->
            <div class="mb-3">

                <label for="nome"> Nome </label>

                <div class="input-group">
                    <span class="input-group-text"> <i class="bi bi-box"></i> </span>
                    <input type="text" id="nome" name="nome" class="form-control">
                    <div class="invalid-feedback"></div>
                    <div class="valid-feedback"></div>
                </div>
            </div>

            <!-- Categoria -->
            <div class="mb-3">
                <label for="categoria" class="form-label"> Categoria </label>

                <div class="input-group">
                    <span class="input-group-text"> <i class="bi bi-tags"></i> </span>
                    <input type="text" id="categoria" name="categoria" class="form-control">
                    <div class="invalid-feedback"></div>
                    <div class="valid-feedback"></div>
                </div>
            </div>
            <!-- Preço -->
            <div class="mb-3">
                <label for="preco"> Preço </label>

                <div class="input-group">
                    <span class="input-group-text">R$</span>
                    <input type="text" id="preco" name="preco" class="form-control">
                    <div class="invalid-feedback"></div>
                    <div class="valid-feedback"></div>
                </div>
            </div>


            <!-- Quantidade -->
            <div class="mb-3">
                <label for="number"> Quantidade </label>

                <div class="input-group">
                    <span class="input-group-text"> <i class="bi bi-123"></i> </span>
                    <input type="text" id="quantidade" name="quantidade" class="form-control">
                    <div class="invalid-feedback"></div>
                    <div class="valid-feedback"></div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary w-100">
                Cadastrar
            </button>

            <!-- Mensagem de Retorno -->
            <div id="mensagem" class="alert d-none mt-3"> </div>

        </form>


    </div>

</section>

<script src="assets/js/produto.js"></script>