<?php
/* Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate per steps:
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus: 1
Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel. */
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
/* foreach ($hotels as $key => $value) {
    echo "<strong>$key</strong> ";
    foreach ($value as $key => $value) {
        echo "<p><strong>$key</strong>: $value</p>";
    }
};  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link defer href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>php-hotel</title>
</head>
<body>
<header class="bg-dark text-white">
    <div class="container">
        <div class="row">
        <h1>Hotels</h1>
        </div>
    </div>
</header>
<main>
    <div class="jumbotron">
        <h1 class="display-3">Welcome to our hotels</h1>
        <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae quas perferendis veniam, eius dolorum sapiente tempore hic, voluptatem, minima aliquid nulla. Ipsam, provident! Fugit tempore quam sunt consequuntur rem debitis!</p>
        <hr class="my-2">
        <?php foreach ($hotels as $key => $value){
    echo "<strong>$key</strong> ";
    foreach ($value as $key => $value) {
        echo "<p><strong>$key</strong>: $value</p>";
    }
};?>
        <section class="hotels">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Descrizione Hotel</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">voto</th>
                            <th scope="col">Distanza dal centro abitato</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row">R1C1</td>
                            <td>R1C2</td>
                            <td>R1C3</td>
                        </tr>
                        <tr class="">
                            <td scope="row">Item</td>
                            <td>Item</td>
                            <td>Item</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </section>    
    </div>
</main>
</body>
</html>