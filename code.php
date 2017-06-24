<?php
  $wheel_list=array();
  array_push($wheel_list,"Sunil");
  array_push($wheel_list,"Sushila");
  array_push($wheel_list,"Sailesh");
  array_push($wheel_list,"Shivam");
  array_push($wheel_list,"Satyam");
  sort($wheel_list);
  echo $wheel_list[rand(0,count($wheel_list)-1)];
?>
