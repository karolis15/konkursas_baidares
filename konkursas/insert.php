<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    
    <center>
        <?php
  

        $conn = mysqli_connect("localhost", "karolis", "slaptazodis", "baidares");
          

        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          

        $data =  $_REQUEST['data'];
        $laikas = $_REQUEST['laikas'];
        $baidare =  $_REQUEST['baidare'];
        $vardas = $_REQUEST['vardas'];
        $telnr = $_REQUEST['tel'];
          
        
        $sql = "INSERT INTO baidarest  VALUES ('$data', 
            '$laikas','$baidare','$vardas','$telnr')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Lentelė sėkmingai pakeista</h3>"; 
  
        } else{
            echo "error $sql. " 
                . mysqli_error($conn);
        }
          

        mysqli_close($conn);
        ?>
    </center>

    <?php header("Location: http://localhost:8000/darbuotoju.php", TRUE, 301);
exit(); ?>
</body>
  
</html>