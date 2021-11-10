<?php
  $str = "345|http://www.softtime.ru|login|password";
  $arr = explode("|",$str);
  for($i = 0; $i < count($arr); $i++){
     echo $arr[$i]."<br />";
  }
