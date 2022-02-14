<?php
include("developers.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <title>Baidarės</title>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Baidarių Rezervacijos Sistema</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8000/index.php">Pradinis</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8000/darbuotoju.php">Darbuotojų Zona<span class="sr-only"> (dabartinis)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8000/klientu.php">Klientų Zona</a>
      </li>

    </ul>
  </div>
</nav>
<!-- navbar -->
</head>
<body>
  <!-- lentele -->
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>Data</th>
         <th>Valandos</th>
         <th>Baidarė</th>
         <th>Vardas</th>
         <th>Tel. nr</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['data']??''; ?></td>
      <td><?php echo $data['laikas']??''; ?></td>
      <td><?php echo $data['baidare']??''; ?></td>
      <td><?php echo $data['vardas']??''; ?></td>
      <td><?php echo $data['tel']??''; ?></td>

     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
<!-- lentele -->
  <!-- forma -->
  <div class = "forma">
  <div class="form-group row">
    <h3>Nauja rezervacija</h3>
<form action="insert.php" method="post" class="form-group">
<!-- date -->

<label for="start">Data:</label>

<input type="date" id="start" name="data"
       value="2022-02-14"
       min="2022-02-14" max="2040-12-31">
<!-- date -->
<!-- laikas -->
<label for="appt">Pasirinkite laiką:</label>

<input type="time" id="appt" name="laikas"
       min="08:00" max="20:00" required>

<small>Baidarių nuoma nuo 8:00 iki 20:00</small>

<!-- laikas -->
<!-- baidarė -->
<label for="baidare">Pasirinkite baidarę:</label>

<select name="baidare">
    <option value="">--Pasirinkite baidarę--</option>
    <option value="Dvivietė raudona">Dvivietė raudona</option>
    <option value="Dvivietė žalia">Dvivietė žalia</option>
    <option value="Vienvietė raudona">Vienvietė raudona</option>
    <option value="Vienvietė žalia">Vienvietė žalia</option>
</select>
<!-- baidarė -->
<!-- vardas -->
<div class="form-example">
    <label for="name">Įveskite vardą: </label>
    <input type="text" name="vardas" id="name" required>
  </div>
<!-- vardas -->
<!-- tel. nr. -->
<label for="phone">Įveskite tel. numerį:</label>

<input type="tel" id="phone" name="tel" required>

<!-- tel. nr. -->

<!-- pateikti -->
<input type="submit" value="Submit">
<!-- pateikt -->

</form>
</div>
</div>
</div>

</body>
<?php 


$servername = "localhost";
$username = "karolis";
$password = "slaptazodis";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>


</html>
