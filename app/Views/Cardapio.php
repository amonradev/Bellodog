<?php
$url = 'https://localhost';
// echo '<pre>';
// var_dump($produtos);
// exit;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href='<?= $url ?>/assets/css/cardapio.css'>
</head>

<body>
    <section id="secao-categories">
        <div class="container" style="position: relative;">
            <ul class="nav nav-pills nav-categorias">
                <li class="li-header"><a href="#lanches">Lanches</a></li>
                <li class="li-header"><a href="#porcoes">Porções</a></li>
                <li class="li-header"><a href="#bebida">Bebidas</a></li>
            </ul>
        </div>
    </section>
    <section id="produtos">
        <!-- Iniciando Lanches -->
        <div class="column" id="lanches">
            <div class="titulo-tipo">
                Lanches
            </div>
            <?php
            foreach ($produtos as $produto) {
                if ($produto['tipo_produto'] != 1) {
                } else {
            ?>
                    <div class="card">
                        <img src='<?= $produto['url_img'] ?>' class="card-img-top card-imagem">
                        <div class="card-body">
                            <h5 class="card-title"><?= $produto['nome'] ?></h5>
                            <p class="card-text"><?= $produto['descricao'] ?></p>
                            <p class="card-preco">R$<?= substr_replace($produto['preco'], '.', -2, 0) ?></p>
                            <div class="d-flex shop">
                                <input type="text" id='lanches<?= $produto['id'] ?>' class="input-shop" value="0" readonly>
                                <button class="btn btn-danger btn-icon" onclick="addProduto('lanches<?= $produto['id'] ?>', 1, '-', '<?= $produto['preco'] ?>')"><i class="fas fa-minus"></i></button>
                                <button class="btn btn-success btn-icon" onclick="addProduto('lanches<?= $produto['id'] ?>', 1, '+', '<?= $produto['preco'] ?>')"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>

        <!-- Iniciando Porções -->
        <div class="column" id="porcoes">
            <div class="titulo-tipo">
                Porções
            </div>
            <?php
            foreach ($produtos as $produto) {
                if ($produto['tipo_produto'] != 2) {
                } else {
            ?>
                    <div class="card">
                        <img src='<?= $produto['url_img'] ?>' class="card-img-top card-imagem">
                        <div class="card-body">
                            <h5 class="card-title"><?= $produto['nome'] ?></h5>
                            <p class="card-text"><?= $produto['descricao'] ?></p>
                            <p class="card-preco">R$<?= substr_replace($produto['preco'], '.', -2, 0) ?></p>
                            <div class="d-flex shop">
                                <input type="text" id='porcao<?= $produto['id'] ?>' class="input-shop" value="0" readonly>
                                <button class="btn btn-danger btn-icon" onclick="addProduto('porcao<?= $produto['id'] ?>', 2, '-', '<?= $produto['preco'] ?>')"><i class="fas fa-minus"></i></button>
                                <button class="btn btn-success btn-icon" onclick="addProduto('porcao<?= $produto['id'] ?>', 2, '+', '<?= $produto['preco'] ?>')"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>

        <!-- Iniciando Bebidas -->
        <div class="column" id="bebida">
            <div class="titulo-tipo">
                Bebidas
            </div>
            <?php
            foreach ($produtos as $produto) {
                if ($produto['tipo_produto'] != 3) {
                } else {
            ?>
                    <div class="card">
                        <img src='<?= $produto['url_img'] ?>' class="card-img-top card-imagem">
                        <div class="card-body">
                            <h5 class="card-title"><?= $produto['nome'] ?></h5>
                            <p class="card-text"><?= $produto['descricao'] ?></p>
                            <p class="card-preco">R$<?= substr_replace($produto['preco'], '.', -2, 0) ?></p>
                            <div class="d-flex shop">
                                <input type="number" id='bebidas<?= $produto['id'] ?>' class="input-shop" value="0" readonly>
                                <button class="btn btn-danger btn-icon" onclick="addProduto('bebidas<?= $produto['id'] ?>', 3, '-', '<?= $produto['preco'] ?>')"><i class="fas fa-minus"></i></button>
                                <button class="btn btn-success btn-icon" onclick="addProduto('bebidas<?= $produto['id'] ?>', 3, '+', '<?= $produto['preco'] ?>')"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </section>
    <footer>
        <label style="color: #515151">
            -
        </label>
    </footer>

    <script>
        window.onload = () => {
            sessionStorage.removeItem('soma');
        }
        const addProduto = (id, produto, op, valor) => {
            const somaTotal = sessionStorage.getItem('soma');
            const inputValue = document.getElementById(id).value;
            var novoValorInput = parseInt(inputValue);
            if(somaTotal != null) {
                var novaSomaTotal = parseInt(somaTotal);
            } else {
                var novaSomaTotal = 0;
            }
            var precoItem = parseInt(valor);

            switch (produto) {
                case 1:
                    if (op == '+') {
                            const newValue = novoValorInput + 1;
                            document.getElementById(id).value = newValue;

                            const novaSoma = novaSomaTotal + precoItem;
                            sessionStorage.setItem('soma', novaSoma);
                    } else {                        
                        const inputValue = document.getElementById(id).value;
                        if (inputValue == 0) {
                            alert('Opa, você não pode deixar menos do que zero um produto.')
                        } else {
                            const novaSoma = somaTotal - valor;
                            sessionStorage.setItem('soma', novaSoma);

                            const newValue = inputValue - 1;
                            document.getElementById(id).value = newValue;
                        }
                    }

                    break;

                case 2:
                    if (op == '+') {
                            const newValue = novoValorInput + 1;
                            document.getElementById(id).value = newValue;
                            
                            const novaSoma = novaSomaTotal + precoItem;
                            sessionStorage.setItem('soma', novaSoma);
                    } else {                        
                        const inputValue = document.getElementById(id).value;
                        if (inputValue == 0) {
                            alert('Opa, você não pode deixar menos do que zero um produto.')
                        } else {
                            const novaSoma = somaTotal - valor;
                            sessionStorage.setItem('soma', novaSoma);

                            const newValue = inputValue - 1;
                            document.getElementById(id).value = newValue;
                        }
                    }
                    break;

                case 3:
                    if (op == '+') {
                            const newValue = novoValorInput + 1;
                            document.getElementById(id).value = newValue;
                            
                            const novaSoma = novaSomaTotal + precoItem;
                            sessionStorage.setItem('soma', novaSoma);
                    } else {                        
                        const inputValue = document.getElementById(id).value;
                        if (inputValue == 0) {
                            alert('Opa, você não pode deixar menos do que zero um produto.')
                        } else {
                            const novaSoma = somaTotal - valor;
                            sessionStorage.setItem('soma', novaSoma);

                            const newValue = inputValue - 1;
                            document.getElementById(id).value = newValue;
                        }
                    }
                    break;
                default:
                    break;
            }
        }
    </script>

    <script src="https://kit.fontawesome.com/a8e31d123b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>