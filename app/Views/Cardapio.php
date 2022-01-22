<?php
$url = 'https://localhost'
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
            <div class="card">
                <img src='<?= $url ?>/assets/uploads/fritas.png' class="card-img-top card-imagem">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex shop">
                        <input type="text" class="input-shop" value="0" readonly>
                        <button class="btn btn-danger btn-icon"><i class="fas fa-minus"></i></button>
                        <button class="btn btn-success btn-icon"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src='<?= $url ?>/assets/uploads/refrigerante.png' class="card-img-top card-imagem">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    Adicionar ao Carrinho
                    <div class="d-flex shop">
                        <input type="text" class="input-shop" value="0" readonly>
                        <button class="btn btn-danger btn-icon"><i class="fas fa-minus"></i></button>
                        <button class="btn btn-success btn-icon"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src='<?= $url ?>/assets/uploads/fritas.png' class="card-img-top card-imagem">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex shop">
                        <input type="text" class="input-shop" value="0" readonly>
                        <button class="btn btn-danger btn-icon"><i class="fas fa-minus"></i></button>
                        <button class="btn btn-success btn-icon"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Iniciando Porções -->
        <div class="column" id="porcoes">
            <div class="titulo-tipo">
                Porções
            </div>
            <div class="card">
                <img src='<?= $url ?>/assets/uploads/fritas.png' class="card-img-top card-imagem">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex shop">
                        <input type="text" class="input-shop" value="0" readonly>
                        <button class="btn btn-danger btn-icon"><i class="fas fa-minus"></i></button>
                        <button class="btn btn-success btn-icon"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src='<?= $url ?>/assets/uploads/refrigerante.png' class="card-img-top card-imagem">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex shop">
                        <input type="text" class="input-shop" value="0" readonly>
                        <button class="btn btn-danger btn-icon"><i class="fas fa-minus"></i></button>
                        <button class="btn btn-success btn-icon"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src='<?= $url ?>/assets/uploads/fritas.png' class="card-img-top card-imagem">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex shop">
                        <input type="text" class="input-shop" value="0" readonly>
                        <button class="btn btn-danger btn-icon"><i class="fas fa-minus"></i></button>
                        <button class="btn btn-success btn-icon"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Iniciando Bebidas -->
        <div class="column" id="bebida">
            <div class="titulo-tipo">
                Bebidas
            </div>
            <div class="card">
                <img src='<?= $url ?>/assets/uploads/fritas.png' class="card-img-top card-imagem">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex shop">
                        <input type="text" class="input-shop" value="0" readonly>
                        <button class="btn btn-danger btn-icon"><i class="fas fa-minus"></i></button>
                        <button class="btn btn-success btn-icon"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src='<?= $url ?>/assets/uploads/refrigerante.png' class="card-img-top card-imagem">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex shop">
                        <input type="text" class="input-shop" value="0" readonly>
                        <button class="btn btn-danger btn-icon"><i class="fas fa-minus"></i></button>
                        <button class="btn btn-success btn-icon"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <img src='<?= $url ?>/assets/uploads/fritas.png' class="card-img-top card-imagem">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex shop">
                        <input type="text" class="input-shop" value="0" readonly>
                        <button class="btn btn-danger btn-icon"><i class="fas fa-minus"></i></button>
                        <button class="btn btn-success btn-icon"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
    </section>
    <script src="https://kit.fontawesome.com/a8e31d123b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>