<?php include Kohana::find_file('views', '_header'); ?>

<script src=<?php echo URL::base()."/scripts/custom/home.js" ?> type="text/javascript"></script>

<?php include Kohana::find_file('views', '_headerbar'); ?>

<!--Dreamworks Container-->
<div id="dreamworks_container">
    
    <?php include Kohana::find_file('views', '_primarymenu'); ?>
    
	<!--Main Content-->
	<section id="main_content">

		<?php include Kohana::find_file('views', '_secondarymenu'); ?>

		<!--Content Wrap-->
		<div id="content_wrap">	
			
			<?php include Kohana::find_file('views', '_headerinfo'); ?>
			
			<?php include Kohana::find_file('views', '_headeractions'); ?>	                  
	        
			<?php include Kohana::find_file('views', '_msg'); ?>
	        
			<!--One_Wrap-->
		 	<div class="one_wrap" style="width:75%;">
		    	<div class="widget">
		        	<div class="widget_title"><span class="iconsweet">H</span><h5>Mapa</h5></div>
		            <div class="widget_body">
		            	<div id="map_canvas" style="width:100%; height:450px"></div>
		            	
		            	<input type="text" id="latFld">
    					<input type="text" id="lngFld">
		            </div>
		        </div>
		    </div>
		    
		    <!--One_Wrap-->
		 	<div class="one_wrap fl_right" style="width:24%;">
		    	<div class="widget">
		        	<div class="widget_title"><span class="iconsweet">a</span><h5>Datos</h5></div>
		            <div class="widget_body">
						<!--Form fields-->		                
		                <?php echo Form::open('home/new', array('method' => 'POST'));
		                	echo '<ul class="form_fields_container">';
								echo "<li>";
		                    		echo Form::label('num', 'Numero');
									echo '<div class="form_input">';
									echo Form::input('num', '', array('type' => 'text', 'id' => 'num'));
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container">';
								echo '<li>';
		                    		echo Form::label('lat', 'Latitud');
									echo '<div class="form_input">';
									echo Form::input('lat', '', array('type' => 'text', 'id' => 'lat'));
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container">';
								echo "<li>";
		                    		echo Form::label('long', 'Longitud');
									echo '<div class="form_input">';
									echo Form::input('long', '', array('type' => 'text', 'id' => 'long'));
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
							echo '<ul class="form_fields_container">';
								echo "<li>";
		                    		echo Form::label('address', 'Direccion');
									echo '<div class="form_input">';
									echo Form::input('address', '', array('type' => 'text', 'id' => 'address'));
		                        	echo '</div>';
								echo "</li>";
							echo '</ul>';
		                    //echo '<ul class="form_fields_container"><li></li></ul>';
		                    
		                    echo '<div class="action_bar">';
		                    	echo Form::button('btnsave', '<span class="iconsweet">=</span>Guardar', array('class' => 'button_small bluishBtn fl_right'));
								echo "<br class='clear' />";
		                    echo '</div>';
		                echo Form::close();
						?>
		            </div>
		        </div>
		    </div>
		              
		</div><!--Content Wrap-->
	
	</section><!--Main Content-->
	
</div><!--Dreamworks Container-->

<?php include Kohana::find_file('views', '_footer'); ?>