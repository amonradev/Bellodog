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
                <li class="li-header"><a href="#espetinhos">Espetinhos</a></li>
                <li class="li-header"><a href="#porcoes">Porções</a></li>
                <li class="li-header"><a href="#bebida">Bebida</a></li>
                <li class="li-header"><a href="#cervejas">Cervejas</a></li>
                <li class="li-header"><a href="#sobremesas">Sobremesas</a></li>
                <li class="li-header"><a href="#refrigerantes-600ml">Refrigerantes 600ml</a></li>
            </ul>
        </div>
    </section>
    <section id="produtos">
        <div class="container">
            <div class="panel panel-danger" id="lanches">
                <div class="panel-heading" role="tab" id="lanches-heading">
                    <h4 class="panel-title">
                        <a class="categories-expand" role="button" data-toggle="collapse" href="#lanches-collapse" aria-expanded="true" aria-controls="lanches-collapse" name="Lanches">
                            <div style="width:100%; height:auto">
                                <div class="row">
                                    <div class="col-xs-10 " style="padding-right:0">
                                        <p class="truncate-overflow" style="overflow-wrap: break-word; white-space:unset">
                                            Lanches
                                        </p>
                                    </div>
                                    <div class="col-xs-2 text-right" style="padding-left:0">
                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </h4>
                </div>
                <div id="lanches-collapse" class="panel-collapse collapse in" true="" role="tabpanel" aria-labelledby="lanches-heading" data-loaded="false" data-categoria="5" aria-expanded="true" style="">
                    <div class="panel-body products">
                        <div class="product-container">
                            <a class="product-item" data-uuid="a2449974-7276-4cef-907c-6a5146affe4a" data-image="" href="#" data-toggle="modal" data-target="#itemModal" data-name="Kachurrasco de Alcatra" data-price="18,00" data-description=" Pão artesanal, espetinho de alcatra na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Kachurrasco de Alcatra</div>
                                        <div class="product-description"> Pão artesanal, espetinho de alcatra na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.</div>
                                        <div class="price">R$18,00</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="f1e75b5c-7235-4c03-b3ad-29ed351e521c" data-image="//files.menudino.com/cardapios/32428/217.jpg" href="#" data-toggle="modal" data-target="#itemModal" data-name="Kachurrasco de Cafta" data-price="18,00" data-description=" Pão artesanal, espetinho cafta  na brasa, maionese caseira, tomate, alface, queijo musarela gratinada.">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Kachurrasco de Cafta</div>
                                        <div class="product-description"> Pão artesanal, espetinho cafta na brasa, maionese caseira, tomate, alface, queijo musarela gratinada.</div>
                                        <div class="price">R$18,00</div>
                                    </div>
                                    <div class="media-right">
                                        <img src="//files.menudino.com/cardapios/32428/217.jpg" class="imagem img-rounded" style="background: #ddd">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="ee2f8270-6cab-4253-950c-d5cb42cf8db1" data-image="" href="#" data-toggle="modal" data-target="#itemModal" data-name="Kachurrasco de Calabresa" data-price="18,00" data-description=" Pão artesanal, espetinho calabresa na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Kachurrasco de Calabresa</div>
                                        <div class="product-description"> Pão artesanal, espetinho calabresa na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.</div>
                                        <div class="price">R$18,00</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="94ac772c-3512-4b49-92ed-b98667304d29" data-image="" href="#" data-toggle="modal" data-target="#itemModal" data-name="Kachurrasco de Coração" data-price="18,00" data-description=" Pão artesanal, espetinho coração na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Kachurrasco de Coração</div>
                                        <div class="product-description"> Pão artesanal, espetinho coração na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.</div>
                                        <div class="price">R$18,00</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="71270587-6512-4b1c-90fb-d6e93694e660" data-image="//files.menudino.com/cardapios/32428/188.jpg" href="#" data-toggle="modal" data-target="#itemModal" data-name="Kachurrasco de Costela" data-price="17,00" data-description="Pão artesanal, espetinho de costela na brasa, maionese, tomate, alface, queijo musarela gratinado.">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Kachurrasco de Costela</div>
                                        <div class="product-description">Pão artesanal, espetinho de costela na brasa, maionese, tomate, alface, queijo musarela gratinado.</div>
                                        <div class="price">R$17,00</div>
                                    </div>
                                    <div class="media-right">
                                        <img src="//files.menudino.com/cardapios/32428/188.jpg" class="imagem img-rounded" style="background: #ddd">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="a4341f44-28d5-49c8-908a-198536ac3309" data-image="" href="#" data-toggle="modal" data-target="#itemModal" data-name="Kachurrasco de Frango" data-price="18,00" data-description=" Pão artesanal, espetinho frango na brasa, maionese caseira, tomate, alface, queijo musarela gratinado gratinado.">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Kachurrasco de Frango</div>
                                        <div class="product-description"> Pão artesanal, espetinho frango na brasa, maionese caseira, tomate, alface, queijo musarela gratinado gratinado.</div>
                                        <div class="price">R$18,00</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="c2fcb157-8feb-4d07-8cd1-d040d8cc17a1" data-image="" href="#" data-toggle="modal" data-target="#itemModal" data-name="Kachurrasco de Linguiça" data-price="18,00" data-description=" Pão artesanal, espetinho linguiça na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Kachurrasco de Linguiça</div>
                                        <div class="product-description"> Pão artesanal, espetinho linguiça na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.</div>
                                        <div class="price">R$18,00</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="736c0c3e-d13f-4d23-9e76-100f8f8815e6" data-image="" href="#" data-toggle="modal" data-target="#itemModal" data-name="Kachurrasco de Mignon" data-price="25,00" data-description="Pão artesanal, espetinho de mignon na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Kachurrasco de Mignon</div>
                                        <div class="product-description">Pão artesanal, espetinho de mignon na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.</div>
                                        <div class="price">R$25,00</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="f94808bc-8a6e-482c-91a0-1bc5c233cd82" data-image="//files.menudino.com/cardapios/32428/189.jpg" href="#" data-toggle="modal" data-target="#itemModal" data-name="Kachurrasco de Picanha" data-price="25,00" data-description="Pão artesanal, espetinho de picanha na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Kachurrasco de Picanha</div>
                                        <div class="product-description">Pão artesanal, espetinho de picanha na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.</div>
                                        <div class="price">R$25,00</div>
                                    </div>
                                    <div class="media-right">
                                        <img src="//files.menudino.com/cardapios/32428/189.jpg" class="imagem img-rounded" style="background: #ddd">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="6058cdad-1230-4c84-8584-75c9e8761c00" data-image="" href="#" data-toggle="modal" data-target="#itemModal" data-name="Kachurrasco de Queijo Coalho" data-price="18,00" data-description=" Pão artesanal, espetinho queijo coalho na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Kachurrasco de Queijo Coalho</div>
                                        <div class="product-description"> Pão artesanal, espetinho queijo coalho na brasa, maionese caseira, tomate, alface, queijo musarela gratinado.</div>
                                        <div class="price">R$18,00</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="47e6df47-2002-46b7-900e-bdd48da872a1" data-image="//files.menudino.com/cardapios/32428/192.jpg" href="#" data-toggle="modal" data-target="#itemModal" data-name="Kids" data-price="15,00" data-description="Pão artesanal, maionese rango, hamburguer e queijo mussarela. 
Acompanha Batata de 100gr e Mini Suco ou Mini Refri (ANOTAR NAS OBSERVAÇÕES).">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Kids</div>
                                        <div class="product-description">Pão artesanal, maionese rango, hamburguer e queijo mussarela.
                                            Acompanha Batata de 100gr e Mini Suco ou Mini Refri (ANOTAR NAS OBSERVAÇÕES).</div>
                                        <div class="price">R$15,00</div>
                                    </div>
                                    <div class="media-right">
                                        <img src="//files.menudino.com/cardapios/32428/192.jpg" class="imagem img-rounded" style="background: #ddd">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="1097c906-06e8-4211-a823-e0951d63f0f6" data-image="//files.menudino.com/cardapios/32428/225.jpg" href="#" data-toggle="modal" data-target="#itemModal" data-name="Lagoinha Burguer - Vegetariano" data-price="25,00" data-description="Pão de brioche, burguer de feijão fradinho de 180g, alface, tomate, cebola roxa, cheddar cremoso, queijo mussarela, queijo cheddar, maionese rango.
">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Lagoinha Burguer - Vegetariano</div>
                                        <div class="product-description">Pão de brioche, burguer de feijão fradinho de 180g, alface, tomate, cebola roxa, cheddar cremoso, queijo mussarela, queijo cheddar, maionese rango.
                                        </div>
                                        <div class="price">R$25,00</div>
                                    </div>
                                    <div class="media-right">
                                        <img src="//files.menudino.com/cardapios/32428/225.jpg" class="imagem img-rounded" style="background: #ddd">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="551d6d8c-09e0-4365-a3c9-76d4fa7ae2f9" data-image="" href="#" data-toggle="modal" data-target="#itemModal" data-name="maionese extra" data-price="3,00" data-description="">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">maionese extra</div>
                                        <div class="product-description"></div>
                                        <div class="price">R$3,00</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="e908c8f4-916a-43fe-a98a-b6d3a90586b2" data-image="//files.menudino.com/cardapios/32428/253.jpg" href="#" data-toggle="modal" data-target="#itemModal" data-name="Pão de alho Power" data-price="13,00" data-description="">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Pão de alho Power</div>
                                        <div class="product-description"></div>
                                        <div class="price">R$13,00</div>
                                    </div>
                                    <div class="media-right">
                                        <img src="//files.menudino.com/cardapios/32428/253.jpg" class="imagem img-rounded" style="background: #ddd">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-container">
                            <a class="product-item" data-uuid="2f932021-d0c6-48cf-af00-465f70219365" data-image="" href="#" data-toggle="modal" data-target="#itemModal" data-name="Ponta das Canas Burguer" data-price="25,00" data-description="Pão artesanal, burguer de frango 170g, alface, tomate, cebola roxa, cheddar cremoso, bacon,  queijo cheddar, queijo mussarela e maionese Rango.

Acompanha fritas 100g e maionese caseira.">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="name">Ponta das Canas Burguer</div>
                                        <div class="product-description">Pão artesanal, burguer de frango 170g, alface, tomate, cebola roxa, cheddar cremoso, bacon, queijo cheddar, queijo mussarela e maionese Rango.

                                            Acompanha fritas 100g e maionese caseira.</div>
                                        <div class="price">R$25,00</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
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