<!--Quick Actions-->
<div id="quick_actions">
	<a class="button_big btn_grey" href="#">
		<span class="iconsweet">+</span>Nuevo parte diario
	</a>
	<a class="button_big" href=<?php echo Url::base().Route::get('default')->uri(array('controller' => 'empleados', 'action' => 'index')); ?>>
		<span class="iconsweet">a</span>Agregar nuevo empleado
	</a>
    <a class="button_big" href="#"><span class="iconsweet">w</span>Export Report</a>
    <a class="button_big btn_grey" href="#"><span class="iconsweet">f</span>Manage Projects</a>
</div>