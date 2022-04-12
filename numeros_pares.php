<?php

for($i = 1; $i <= 100; $i++){
  $resultado = $i;
  echo "<p>$resultado</p>";
}

?>


<?php

for($i = 2; $i <= 100; $i++){
  $resultado = $i++;
  echo "<p>$resultado</p>";
}

?>



<?php

for($i = 1; $i <= 100; $i++){
  $resultado = $i;
  echo "<p>$resultado</p>";
  if($i == 60){
      break;
  }
}

?>
