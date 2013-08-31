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
		 	<div class="one_wrap">
		    	<div class="widget">
		        	<div class="widget_title"><span class="iconsweet">H</span><h5>Mapa</h5></div>
		            <div class="widget_body">
		            	<div id="map_canvas" style="width:100%; height:450px"></div>
		            	
		            	<input type="text" id="latFld">
    					<input type="text" id="lngFld">
		            </div>
		        </div>
		    </div>
		              
		</div><!--Content Wrap-->
	
	</section><!--Main Content-->
	
</div><!--Dreamworks Container-->

<?php include Kohana::find_file('views', '_footer'); ?>