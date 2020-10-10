<div class="chart-container" style="position: relative; height:40vh; width:80vw">
    <canvas id="myChart" height="40vh" width="80vw"></canvas>
</div>





<?php require_once "../Modele/afficher.php";

echo '<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3"></script>';
$bd = new afficher();
$bd->EchoLesDonnees();




?>

<script>



     ctx = document.getElementById('myChart').getContext('2d');
     chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',

        // The data for our dataset
        data: {
            labels: ['Plastique', 'Caoutchouc', 'Textile', 'Papier / Crayon', 'Bois', 'Metal', 'Verre / Ceramique','Divers'],
            datasets: [{
                label: 'Dataset',
                backgroundColor: [
                    'rgba(255, 37, 98, 0.8)',
                    'rgba(39, 44, 232, 0.8)',
                    'rgba(255, 118, 18, 0.8)',
                    'rgba(255, 237, 45, 0.8)',
                    'rgba(255, 10, 0, 0.8)',
                    'rgb(117,185,255, 0.8)',
                    'rgb(153,102,255, 0.8)',
                    'rgb(83,184,70, 0.8)',
                ],
                borderWidth: 3,
                data: [

                    <?php echo $bd->nbPlastiquePourcent . ", " . $bd->nbCaoutchoucPourcent . ", " . $bd->nbTextilePourcent . ", " . $bd->nbPapierCrayonPourcent . ", " . $bd->nbBoisPourcent . ", " . $bd->nbMetalPourcent . ", " . $bd->nbVerreCeramiquePourcent . ", " . $bd->nbDiversPourcent?>

                ]
            }]
        },

        // Configuration options go here
        options: {
            title: {
                display: true,
                text: 'Quantité de déchets trouvés en % ',
                fontSize: 20
            },
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    fontSize: 30
                }
            }

        }
    });
</script>