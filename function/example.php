<html>
<head>
  <title>Bner</title>
</head>
<body>
  <?php
  //ini folder function berarti tentang function lah coy
  sayHi('me');
  hr();
  function br(){
    echo '<br>';
  }
  function hr(){
    echo '<hr>';
  }
  function sayHi($name){
    echo "Hello $name";
    br();
  }
  sayHi('you');
  hr();

  //======return statement======
  function cube($num){
    $yea = $num * $num * $num;
    return "The cube is $yea"; // ini return
  }
  echo cube(5);



  ?>
<body>
</html>
