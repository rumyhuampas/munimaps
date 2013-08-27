<!--Notification Message-->	        
<?php
$_msgtext = Request::current()->param('msgtext');
$_msgtype = Request::current()->param('msgtype');
if(isset($_msgtext)){
	echo "<div class='msgbar ".$_msgtype." hide_onC'>";
        echo "<span class='iconsweet'>*</span><p>".$_msgtext."</p>";
    echo "</div>";
}
?>