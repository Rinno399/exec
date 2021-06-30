<html>
	<style>
     #login{
     	background-color:#C1C2C0;
         color:green;
     
     	}
	
     #pic{
     color:green;
     }


    
</style>
	
    <body>
    	<pre id="pic">
                        :::!~!!!!!:.
                  .xUHWH!! !!?M88WHX:.
                .X*#M@$!!  !X!M$$$$$$WWx:.
               :!!!!!!?H! :!$!$$$$$$$$$$8X:
              !!~  ~:~!! :~!$!#$$$$$$$$$$8X:
             :!~::!H!<   ~.U$X!?R$$$$$$$$MM!
             ~!~!!!!~~ .:XW$$$U!!?$$$$$$RMM!
               !:~~~ .:!M"T#$$$$WX??#MRRMMM!
               ~?WuxiW*`   `"#$$$$8!!!!??!!!
             :X- M$$$$       `"T#$T~!8$WUXU~
            :%`  ~#$$$m:        ~!~ ?$$$$$$
          :!`.-   ~T$$$$8xx.  .xWW- ~""##*"
.....   -~~:<` !    ~?T#$$@@W@*?$$      /`
W$@@M!!! .!~~ !!     .:XUW$W!~ `"~:    :
#"~~`.:x%`!!  !H:   !WM$$$$Ti.: .!WUn+!`
:::~:!!`:X~ .: ?H.!u "$$$B$$$!W:U!T$$M~
.~~   :X@!.-~   ?@WTWo("*$$$W$TH$! `
Wi.~!X$?!-~    : ?$$$B$Wu("**$RM!
$R@i.~~ !     :   ~$$$$$B$$en:``
?MXT@Wx.~    :     ~"##*$$$$M~

</pre>
    	<div id="login">
        <?php
             $alert="<script>alert('Congratulation');</script>";
            $username = $_POST['name'];
            $pass = $_POST['pass'];
            if($username=="BTC" and $pass=="12344"){
            	echo $alert;
            	echo "<center>Nice,bro Hacker lar</center>";
               
            	}else{
            	echo "<script>alert(\'Your Fucking pass or name is wrong\');</script>";
            	echo "Wrong";
            	}
            
        ?>
        	</div>
    </body>
</html>
