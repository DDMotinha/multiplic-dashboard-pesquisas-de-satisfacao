<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ./src/screen/login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Bem vindo! </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        var perg1 = "<?php include './src/controller/itemselector.php'; echo $perg1;?>",
            perg2 = "<?php include './src/controller/itemselector.php'; echo $perg2;?>",
            perg4 = "<?php include './src/controller/itemselector.php'; echo $perg4;?>",
            perg6 = "<?php include './src/controller/itemselector.php'; echo $perg6;?>";

        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Perguntas', 'Média'],
            ['Pergunta 1', perg1 ],
            ['Pergunta 2', perg2 ],
            ['Pergunta 4', perg4 ],
            ['Pergunta 6', perg6 ]
        ]);

        var options = {
            chart: {
            title: 'Respostas formulário',
            subtitle: 'Formulário de pesquisa interna',
            },
            bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
</head>
<body>
    <div class="page-header">
        <h2>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> Bem vindo!.</h2>
        <p>
            <a href="./src/controller/logout.php" class="btn btn-primary">Log out</a>
        </p>
    </div>
    <div>
    <div id="barchart_material" style="width: 900px; height: 500px; margin: 50px;"></div>
    </div>
    <div>
        <?php
            include './src/controller/select.php';
        ?>
    </div>
</body>
</html>