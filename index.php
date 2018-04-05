<?php include 'server.php'; ?>
<!Doctype html>
<html lang= "en"> 
<head>
    <title>document</title>
    <link rel='stylesheet' href='style.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h2>Your Machine Info </h2>
    <ul class= "list-group text-light">
        <?php
          if($server){

            echo "<h4 class= 'list-group-item bg-danger'>Server Info</h4>";
            foreach($server as $serverDescription => $serveroutput){
              echo "<li class= 'list-group-item bg-dark'>$serverDescription: $serveroutput</li>";
            } 
            echo "<hr>";
          }
          if($client){
            echo "<h4 class= 'list-group-item bg-danger'> Client Info</h4>";
            foreach($client as $clientDes => $clientOutput){
              echo "<li class= 'list-group-item bg-dark'>$clientDes: $clientOutput</li>";
            }
            echo "<hr>";
          }
        ?>
    </ul>

  </div>
</body>
</html>
