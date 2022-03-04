<?php
    require_once("action/StatsAction.php");

    $action = new StatsAction();
    $data = $action->executeAction();
    
    require_once("partial/header.php");
?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <h1>Statistiques</h1>
    <div class="data-line">
        Nombre de participants : <?=$data["lines"] ?>
    </div>
    <div class="data-line">
        <canvas id="pie-chart"></canvas>
        <script>
            const data = {
                labels: ['Simple', 'Double', 'Suite'],
                datasets: [{
                    label: 'Types de chambre',
                    data: [<?=$data['rooms']["Simple"] ?>, <?=$data['rooms']["Double"] ?>, <?=$data['rooms']["Suite"] ?>],
                    color: "#fff",
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                    ],
                }]
            };

            const config = {
                type: 'pie',
                data: data,
                options: {
                    plugins: {
                        legend: {
                            labels: {
                                color: 'white'
                            }
                        }
                    }
                }
            };

            new Chart(document.getElementById('pie-chart'), config);
        </script>
    </div>
<?php
    require_once("partial/footer.php");