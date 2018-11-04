<?php

  $db = mysqli_connect('localhost','root','','walkholi_holiday');
   
   $sql = "select * from destinations";
   $run = mysqli_query($sql);
   print_r($run); die;

//dtest


?>