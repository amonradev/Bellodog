<?php
    $url = 'https://localhost'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BelloDog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href='<?= $url ?>/assets/css/home.css'>
</head>

<body>

    <main>
        <img src="https://files.menudino.com/cardapios/32428/capa.jpg" class="background-image" />
        <div class="d-flex">
            <div class="div-logo">
                <img class="logo" src='<?= $url ?>/assets/uploads/novaLogo.png' alt="" srcset="">
            </div>
        </div>
        <div class="d-flex container-infos">
            <div class="margin-divs-button">
                <a class="btn btn-primary bello-green" href='<?= base_url('/Cardapio') ?>'>Faça seu pedido online</a>
            </div>
            <div class="margin-divs">
                <label class="label">
                    <i class="fas fa-phone-alt"></i>
                    (55) 9 9221-4294
                </label>
            </div>
            <div class="margin-divs">
                <i class="fa fa-map-marker"></i>
                Casa 278 - Monte Bello IV
            </div>
        </div>

    </main>
    <script>
        const abreCardapio = () => {
            // const settings = {
            //     method: 'POST',
            //     url: <?= base_url('controllers/Home/verificaEstaAberto') ?>,
            //     data: ''
            // }
            // $.ajax(settings).done(res => {
            //     const data = JSON.parse(res);
            //     console.log(data);
            // });
        }
    </script>
    <script src="https://kit.fontawesome.com/a8e31d123b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>