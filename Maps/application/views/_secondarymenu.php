<?php 
	/*$_sess = Session::instance();
	$_username = $_sess->get('currentuser');
	$_userid = $_sess->get('currentuserid');
	if($_userid == ''){
		//HTTP::redirect(URL::base()."../mmain/");
		//HTTP::redirect(Route::get('default')->uri(array('controller' => 'login')));	
	}*/
?>

<!--Secondary Navigation-->
<nav id="secondary_nav"> 
	<!--UserInfo-->
	<dl class="user_info">
		<dt><a href="#"><img src=<?php echo URL::base()."assets/images/avatar2.png" ?> alt="" /></a></dt>
	    <dd>
	    <a class="welcome_user" href="#">Bienvenido<!--, <strong><?php echo $_username ?></strong>--></a>
	    <!--<span class="log_data">Last sign in : 16:11 Feb 27th 2012</span>
	    <a class="logout" href=<?php echo URL::base()."../maps/home" ?>>Menu Principal</a>
	    <a class="user_messages" href="#"><span>12</span></a>-->
	    </dd>
	</dl>
	<h2><?php echo $_menutitle ?></h2>
	<?php
		if($_menutitle == Helpers_Const::MENUINICIOTITLE) include Kohana::find_file('views', '_menuinicio');
	?>
</nav>