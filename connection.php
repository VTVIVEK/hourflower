<?php

$user='root';
$pass='';
$db='hourflower';
$link=mysqli_connect("localhost","$user","$pass","$db");
// $link=mysqli_connect("sql101.epizy.com","epiz_23452892","l4KPQPu5w2gCTq","epiz_23452892_pbl");
if(mysqli_connect_error())
{
  die("there Was a Database Error");
}
?>