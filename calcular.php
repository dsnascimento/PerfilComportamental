<?php


$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];
$a5 = $_POST['a5'];
$a6 = $_POST['a6'];
$a7 = $_POST['a7'];
$a8 = $_POST['a8'];
$a9 = $_POST['a9'];

$b1 = $_POST['b1'];
$b2 = $_POST['b2'];
$b3 = $_POST['b3'];
$b4 = $_POST['b4'];
$b5 = $_POST['b5'];
$b6 = $_POST['b6'];
$b7 = $_POST['b7'];
$b8 = $_POST['b8'];
$b9 = $_POST['b9'];

$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$c5 = $_POST['c5'];
$c6 = $_POST['c6'];
$c7 = $_POST['c7'];
$c8 = $_POST['c8'];
$c9 = $_POST['c9'];

$d1 = $_POST['d1'];
$d2 = $_POST['d2'];
$d3 = $_POST['d3'];
$d4 = $_POST['d4'];
$d5 = $_POST['d5'];
$d6 = $_POST['d6'];
$d7 = $_POST['d7'];
$d8 = $_POST['d8'];
$d9 = $_POST['d9'];

$result1 = $a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7 + $a8 + $a9;
$result2 = $b1 + $b2 + $b3 + $b4 + $b5 + $b6 + $b7 + $b8 + $b9;
$result3 = $c1 + $c2 + $c3 + $c4 + $c5 + $c6 + $c7 + $c8 + $c9;
$result4 = $d1 + $d2 + $b3 + $b4 + $b5 + $b6 + $b7 + $b8 + $b9;

?>


<section>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/">
    <h3 id="result1" hidden>O resultado da primeira coluna: <?php echo $result1 ?></h3>
    <h3 id="result2" hidden>O resultado da segunda coluna: <?php echo $result2 ?></h3>
    <h3 id="result3" hidden>O resultado da terceira coluna: <?php echo $result3 ?></h3>
    <h3 id="result4" hidden>O resultado da quarta coluna: <?php echo $result4 ?></h3>


</section>

<section class="wrapper">
    <div class="text-center">
        <img src="LOGO_NOVA_CAIRU.png" class="mb-5 mt-4" style="width: 150px">

        <h1 class="text-center mb-4">Resultados</h1>
    </div>
    <div class="col-8" style="text-align: center">
        <canvas id="myChart"  style="position: relative; height:40vh; width:80vw"></canvas>
    </div>
    <!-- page end-->
</section>


<script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
<script>

    r1 = "<?php echo $result1 ?>";
    var r2 = "<?php echo $result2 ?>"
    var r3 = "<?php echo $result3 ?>"
    var r4 = "<?php echo $result4 ?>"

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Resultado coluna 1', 'Resultado coluna 2', "Resultado coluna 3", "Resultado coluna 4"],
            datasets: [{
                label: '# of Votes',
                data: [r1, r2, r3, r4],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'

                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>