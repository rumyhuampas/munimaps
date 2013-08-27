<!--Primary Navigation-->
<nav id="primary_nav">
    <ul>
        <li id=<?php echo Helpers_Const::MENUINICIOID; ?> menuid=<?php echo $_menuid ?> class="nav_dashboard">
        	<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'home', 'action' => 'index')); ?>>
        		<?php echo Helpers_Const::MENUINICIOTITLE; ?>
        	</a>
        </li>
    </ul>
</nav>