<?php
require_once __DIR__ . '/class/Cane.php';
require_once __DIR__ . '/class/Categoria.php';
require_once __DIR__ . '/class/Cibo.php';
require_once __DIR__ . '/class/Cuccia.php';
require_once __DIR__ . '/class/Gatto.php';
require_once __DIR__ . '/class/Giochi.php';
require_once __DIR__ . '/class/Prodotti.php';

// throw new Exception('Is not a number');

// $animali = json_decode(file_get_contents('./js/store-shop.json'));


?>

<head>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
        <link rel="stylesheet" href="./css/style.css"><!--css-->
        <title>PHP-OOP-2</title>
    </head>

<body>

    <nav class="bg-black text-white">
        <div class="container bianco text-white d-flex justify-content-between">
            <a href="#">Negozio più vicino</a>
            <a href="#">Spedizione gratuita a partire da <span class="text-warning">49€ di spesa</span></p>
                <div>
                    <a class="p-3" href="#">Assistenza Clienti</a>
                    <a href="#">Status Ordini</a>
                </div>
        </div>


        <div class="bg-warning p-2">
            <div class="container nero d-flex justify-content-between">
                <a href="#"><img class="dimensione" src="./img/Logo_of_Garena_Free_Fire.png" alt=""></a>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
                </div>
            </div>
            <div class="black d-block container ">
                <ul class="d-flex justify-content-between text-black">
                    <li class="list-inline-item"><a class="" href="#">Cane</a></li>
                    <li class="list-inline-item"><a href="#">Gatto</a></li>
                    <li class="list-inline-item"><a href="#">Pesci</a></li>
                    <li class="list-inline-item"><a href="#">Tartarughe</a></li>
                    <li class="list-inline-item"><a href="#">Rettili</a></li>
                    <li class="list-inline-item"><a href="#">Uccelli</a></li>
                    <li class="list-inline-item"><a href="#">Roditori</a></li>
                    <li class="list-inline-item"><a href="#">Casa</a></li>
                    <li class="list-inline-item"><a href="#">Altri animali</a></li>
                    <li class="list-inline-item"><a href="#">Brand</a></li>
                    <li class="list-inline-item"><a href="#">Magazine</a></li>
                    <li class="list-inline-item"><a class="text-danger" href="#">Promozioni</a></li>
                </ul>
            </div>
        </div>


    </nav>



    <div class="container">
        <div class="row">
            <?php foreach ($cuccie as $cuccia) {?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $cuccia -> getImmagine() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title "><?php echo $cuccia ->getTitolo() ?></h5>
                        <p class="card-text"><?php echo $cuccia ->getPrezzo() ?></p>
                    </div>
                </div>
            <?php } ?>







        </div>
    </div>

    <script src="./js/main.js"></script>
</body>

</html>