<html>
<head>
  <title>Bner</title>
</head>
<body>
  <?php
  $br = "<br>";
  $hr = "<hr>";
  $name = array('Jokowi' , 'Ahok', 'Prabowo', 'Megawati' ); //Array coy
  $name[2] = "dudul";
  echo count($name);
  echo $br;
  for ($i = 0 ; $i < 4; $i++){
    echo "$name[$i] <br> ";
  }
  echo $hr;
  // array ada dalem nya coyy
  $apah = array('Jokowi'=>'01' , 'Ahok'=>'teumeuli molohok', 'Prabowo'=>'02', 'Megawati'=>'apa yah?' );
  $apah['Prabowo'] = 'lustrik';
  echo $apah['Ahok'];
  echo $br;
  echo $apah['Prabowo']

  ?>
<body>
</html>
