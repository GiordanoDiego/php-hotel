<?php
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

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONT-FAMILY -->

        <!-- LINK CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <!-- TITLE PAGE -->
        <title>Document</title>
    </head>

        <!-- START BODY -->
    <body class="debug">
        <!-- START MAIN HEADER -->
        <header>
            <div class="container">
                <h1 class=" text-center ">
                    Hotel
                </h1>
            </div>
        </header>
        <!-- END MAIN HEADER -->

        <!-- START MAIN -->
        <main>
            <div class="container">
               <div  class=" d-flex flex-wrap justify-content-between ">
                    <?php 
                            foreach ($hotels as $hotel){ ?>
                            <div>
                                <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                                    <div class="card-header">
                                        <?php echo $hotel["name"]; ?>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title">
                                            <?php echo $hotel["description"]; ?>
                                        </p>
                                        <p class="card-text">
                                        
                                                <?php 
                                                    foreach ($hotel as $key => $value){
                                                        if($key != "name" && $key != "description" && $key != "parking"){
                                                            echo "<div><strong>". ucfirst($key) .": "."</strong>". $value ."</div>";
                                                        }  
                                                    }; 
                                                ?>
                                                <?php
                                                    if($hotel["parking"] == true){
                                                        echo "<div><strong>". "Parking" .": "."</strong>". "Disponibile" ."</div>";  
                                                    }  else{
                                                        echo "<div><strong>". "Parking" .": "."</strong>". "Non disponibile" ."</div>";  
                                                    }
                                                ?>
                                         
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php }  ?>
               </div>
              
            </div>


        </main>
        <!-- END MAIN -->

        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="./js/script.js"></script>
    </body>
</html>