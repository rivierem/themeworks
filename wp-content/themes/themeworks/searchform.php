<form class="form-inline" role="form" action="<?php bloginfo( 'url' ) ?>/" method="get">
    <fieldset>
 
        <div class="form-group form-group-lg">
    		<div class="col-lg-12">
      			<input id="search" name="s" class="form-control" type="text" placeholder="Recherche" onkeyup="request(this.value);" value="<?php the_search_query(); ?>">
				<button type="submit" class="btn btn-primary"><i class="el-icon-search"></i></button>
   			</div>
	  	</div>

        
    </fieldset>
</form>