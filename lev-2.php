<!DOCTYPE html>
<html>
<head>
<title>CMD {Exec} Lab-lev-2</title>
<style>
body{
  background-color: #191919;
}
#header{
  margin-top: 10px;
  color: #00cc00;
  font-size: 20px;
  animation-name: col;
  animation-duration: 3s;
  animation-iteration-count: infinite;
}
@keyframes col {
  0%{color:transparent;}
  10%{color: red;}
  20%{color: #00f2f2;}
  30%{color: transparent;}
  40%{color:  #00ffff;}
  60%{color: #f261f2;}
  70%{color: transparent;}
  80%{color: #f2f261;}
  100%{color: #ffccff;}
}

#result{
  margin-top: 20px;
  color: #61f2c2;
}
</style>
</head>
<body>
<center>
<pre id="header">
┍━━━━━━━━━━━━━━━━━━━━━★━━━━━━━━━━━━━━━━━━━━┑
|      Creator>>   BR1N@n0                 |
|                  RINNO                   |
┕━━━━━━━━━━━━━━━━━━━━━★━━━━━━━━━━━━━━━━━━━━┙

</pre>


<div id="result">
<?php
$ban = array(
  ';' => '_',
  '&&' => '_'

);

if (isset($_GET['cmd'])) {
  $cmd=$_GET['cmd'];
  $cmd=str_replace(array_keys($ban),$ban,$cmd);

  if ($cmd == "") {
    echo "Input value is Empty";
    exit();
  }

  system('ping -c 4 '.$cmd);


}
?>
</div>

</center>
<br><br><br>
<?php include("footer.php");?>

</body>
</html>
