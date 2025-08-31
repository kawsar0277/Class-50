<?php

include 'config.php';

?>

<?php
    //  $id = $_GET['id'];

    //  $query = "SELECT * FROM students_1 WHERE id = $id";
    //  $singleData = mysqli_query($connection, $query);
    //  $arrayData = mysqli_fetch_assoc($singleData);

    //  $id = $arrayData['id'];
    //  $name = $arrayData['name'];
    //  $class = $arrayData['class'];
    //  $roll = $arrayData['roll'];
    //  $phone = $arrayData['phone'];
    //  $email = $arrayData['email'];
    //  $address = $arrayData['address'];
    //  $blood_group = $arrayData['blood_group'];
?>

<?php
$id = $_GET['id'];

if(!$id){
    die("Error: No ID provided in URL");
}

$query = "SELECT * FROM students_1 WHERE id = $id";
$singleData = mysqli_query($connection, $query);

if(!$singleData){
    die("Query failed: " . mysqli_error($connection));
}

$arrayData = mysqli_fetch_assoc($singleData);

$id = $arrayData['id'];
$name = $arrayData['name'];
$class = $arrayData['class'];
$roll = $arrayData['roll'];
$phone = $arrayData['phone'];
$email = $arrayData['email'];
$address = $arrayData['address'];
$blood_group = $arrayData['blood_group'];
?>


<?php

if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $class = $_POST['class'];
  $roll = $_POST['roll'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $blood_group = $_POST['blood_group'];


  $query = "INSERT INTO students_1 (name, class, roll, phone, email, address, blood_group) 
  VALUES ('$name', '$class', $roll, '$phone', '$email', '$address', '$blood_group')";
  
  $insertData = mysqli_query($connection, $query);

  if($insertData == true){
     header('location:index.php');
  }

  else{
    echo "Failed";
  }

}

?>


  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Link</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-5">
        <form action="" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name?>" requierd>
    </div>
  <div class="mb-3">
    <label for="class" class="form-label">Class</label>
    <input type="text" class="form-control" id="class" name="class" value="<?php echo $class?>" requierd>
  </div>
  <div class="mb-3">
    <label for="roll" class="form-label">Roll</label>
    <input type="number" class="form-control" id="roll" name="roll" value="<?php echo $roll?>" requierd>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone?>" requierd>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email?>" requierd>
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" value="<?php echo $address?>" requierd>
  </div>
  <div class="mb-3">
    <label for="blood_group" class="form-label">Blood_Group</label>
    <select class="form-control" name="blood_group" id="blood_group" value="<?php echo $bollod_group?>" requierd>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>