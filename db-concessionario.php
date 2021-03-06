<?php 
    $autoUsate = [
        [
            'id' => 1,
            'modello' => 'bmw',
            'marca' => 'serie1',
            'prezzo' => 17490.00,
            'porte' => 5,
            'posti' =>5,
            'colore' => 'rosso',
            'chilometri' => 160000,
            'anno' => 2018,
            'cavalli' => 150,
            'cambio' => 8,
            'cilindrata' => 1995,
            'carburante' => 'diesel',
            'potenza' => 110,
            'classe' => 'Euro 6',
            'localita' => 'Foggia',
            'accessori' => '<ul><li>Cerchi in lega</li>, <li>Autoradio</li>,<li> Alzacristalli elettrici</li>,<li> Hill Holder</li><ul>',
            'trazione' => 'Anteriore',
            'immagine' => 'https://prod.pictures.autoscout24.net/listing-images/df963a1f-3319-448a-b537-b4c50b898a6d_19ee99f5-30ca-4a6e-87fd-0d9030b7430e.jpg/640x480.jpg'
        ],
        [
            'id' => 2,
            'modello' => 'audi',
            'marca' => 'A1 ',
            'prezzo' => 15700.00,
            'porte' => 4,
            'posti' =>4,
            'colore' => 'nero',
            'chilometri' => 38630,
            'anno' => 2018,
            'cavalli' => 116,
            'cambio' => 5,
            'cilindrata' => 1598,
            'carburante' => 'diesel',
            'potenza' => 85,
            'classe' => 'Euro 6',
            'localita' => 'Bergamo',
            'accessori' => '<ul><li>Bluetooth</li>,<li> Ruotino</li>,<li> Kit fumatori</li></ul>',
            'trazione' => 'Anteriore',
            'immagine' => 'https://prod.pictures.autoscout24.net/listing-images/b0b44b31-3c30-4144-9610-4e7e1f3f78d8_7860fbbf-0816-4117-970f-20675ce5a154.jpg/640x480.jpg'
        ],
        [
            'id' => 3,
            'modello' => 'Mercedes-Benz',
            'marca' => 'CLA ',
            'prezzo' => 19900.00,
            'porte' => 5,
            'posti' => 5,
            'colore' => 'griggio',
            'chilometri' => 151240 ,
            'anno' => 2017,
            'cavalli' => 109,
            'cambio' => 7,
            'cilindrata' => 1461,
            'carburante' => 'diesel',
            'potenza' => 80,
            'classe' => 'Euro 5',
            'localita' => 'Siracusa',
            'accessori' => '<ul><li>Pneumatici estivi</li>, <li>Specchietti laterali elettrici</li>, <li>Volante multifunzione</li></ul>',
            'trazione' => 'Anteriore',
            'immagine' => 'https://prod.pictures.autoscout24.net/listing-images/43862707-3cb6-44e1-9481-7d5d2c847d1b_42098171-4ced-466e-950a-b7a39ce9b942.jpg/640x480.jpg'
        ],
        [
            'id' => 4,
            'modello' => 'Volkswagen ',
            'marca' => 'up ',
            'prezzo' => 10000.00,
            'porte' => 5,
            'posti' => 4,
            'colore' => 'bianco',
            'chilometri' => 74093  ,
            'anno' => 2019 ,
            'cavalli' => 68 ,
            'cambio' => 5,
            'cilindrata' => 999 ,
            'carburante' => 'Metano',
            'potenza' => 50 ,
            'classe' => 'Euro 3',
            'localita' => 'Empoli',
            'accessori' => '<ul><li>Computer di bordo</li>, <li>USB</li>, <li>Autoradio</li>,<li> Climatizzatore</li></ul>',
            'trazione' => 'Anteriore',
            'immagine' => 'https://prod.pictures.autoscout24.net/listing-images/f5e5b12a-cca7-4297-b72d-4d44a553f6cb_bd87cd06-4d9f-4966-af16-8092171cc9ce.jpg/640x480.jpg'
        ],
        [
            'id' => 5,
            'modello' => 'Ford Fiesta ',
            'marca' => ' 7?? ',
            'prezzo' => 12500.00,
            'porte' => 5,
            'posti' => 5,
            'colore' => 'blu',
            'chilometri' => 63000 ,
            'anno' => 2020 ,
            'cavalli' => 71  ,
            'cambio' => 5,
            'cilindrata' => 1084 ,
            'carburante' => 'Benzina',
            'potenza' => 52 ,
            'classe' => 'Euro 4',
            'localita' => 'Firenze',
            'accessori' => '<ul><li>Climatizzatore</li>, <li>Ruotino</li>, <li>Cerchioni in acciaio</li></ul>',
            'trazione' => 'Posteriore',
            'immagine' => 'https://prod.pictures.autoscout24.net/listing-images/c0b3bb6b-b44b-4410-9307-b1cd28ee5972_269ea467-3ccd-42e9-bfea-32bdce2fcdd5.jpg/640x480.jpg'
        ],
    ];



// var_dump($autoUsate);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    foreach ($autoUsate as  $auto) {
        ?>
        <div class="card-container">
        <img style="heigth: 100px; width: 200px;" src="<?= $auto['immagine'] ?>" alt="">
            <h4 ><?= $auto['modello']?></h4>
            <h5 ><?= $auto['marca']?></h5>
            <p ><?= $auto['colore']?></p>
            <p ><?= $auto['prezzo']?></p>
            <p ><?= $auto['carburante']?></p>
            <p ><?= $auto['localita']?></p>
            <p ><?= $auto['chilometri']?></p>
            <p ><?= $auto['accessori']?></p>
        </div>
        <?php }; ?>

</body>
</html>