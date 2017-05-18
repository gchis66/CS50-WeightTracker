<?php
$connect = mysqli_connect("localhost", "equitsmo_admin", "Kingdom10!", "equitsmo_finalProject");
$sesh = $_SESSION['id'];
$query = "SELECT * FROM weight_history WHERE user_id = $sesh";
$result = mysqli_query($connect, $query);

?>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart()
    {
        var data = google.visualization.arrayToDataTable([
           ['Week', 'Weight'],
            <?php
           while($row = mysqli_fetch_array($result))
           {
               echo "['".$row["week"]. "', ".$row["weight"]."],";
           }
           ?>
            ])

        var options ={
            title: 'Your Weight Progress',
            hAxis: {
          title: 'Week'
        },
        vAxis: {
          title: 'Weight'
        }
        };
        var chart = new google.visualization.LineChart(document.getElementById('linechart'));
        chart.draw(data,options);
    }
    
</script>

  <div id="linechart">  
</div>