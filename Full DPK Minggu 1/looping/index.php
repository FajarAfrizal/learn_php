<?php
$nilai1 = "";
$nilai2 = "";
if (isset($_POST['nilai1'])&& isset($_POST['nilai2'])) {
    $nilai1=['nilai1'];
    $nilai2=['nilai2'];
}

for ($i = $nilai1; $i < $nilai2 ; $i = $nilai1 + $nilai2) { 
    echo $i;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <form>
  <div class="mb-3">
    <label for="nilai1" class="form-label">Email address</label>
    <input type="number" class="form-control" id="nilai1" name="nilai1" required >
    
  </div>
  <div class="mb-3">
    <label for="number" class="form-label">Password</label>
    <input type="nilai2" class="form-control" id="number" name="nilai2" required>
  </div>
  <div class="mb-3 form-check">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
 <=? $i=>
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
