<!DOCTYPE html>
<html>
<head>
<title>CMD {Exec} Lab</title>
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
#col_cmd{
  border: 0px;
  color: green;
  background-color: transparent;
  border-radius: 12px;
  padding: 10px;
  box-shadow:inset 8px 8px 10px #333333,inset -8px -8px 10px #0d0d0d;
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
<form action="" method="post">
<input type="text" name="cmd" id="col_cmd" placeholder="eg_127.0.0.1">
<button name="cmd_btn" id="col_cmd">Enter</button>
</form>

<div id="result">
<?php
$ban = array(
  ';' => '_',
  '&&' => '_'

);

if (isset($_POST['cmd_btn'])) {
  $cmd=$_POST['cmd'];
  $cmd=str_replace(array_keys($ban),$ban,$cmd);
  if ($cmd == "") {
    echo "Input value is Empty";
    exit();
  }
  if (preg_match('/')) {
    // code...
  }
  system('ping -c 4 '.$cmd);


}
?>
</div>
</center>


</body>
</html>
