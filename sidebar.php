<div id="sidebar">


	<!-- Could this use a similar CSS solution to tabs? -->	
     <i id = "menu-toggle" class="fa fa-bars fa-2x"></i>
     
	<div class = "tabs">
		
	   	<input checked id="menu" type="radio" name="nav-tabs" class = "tab-radio"/>
		<input id="contents" type="radio" name="nav-tabs" class = "tab-radio"/>
		
	    <label for="menu" id = "menu-tab">Menu</label><!-- comment fixes space between
	    	inline block elements
		--><label for="contents" id = "contents-tab">Contents</label>
	    <div id = "menu-nav">
			<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
			</ul>
				
		</div>
	    

	<div id = "contents-nav">	
	
	<!-- <h2><?php _e('Archives'); ?></h2> -->
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
	</div>	

	
	</div>

</div>