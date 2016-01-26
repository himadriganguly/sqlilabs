<?php
	$menu_main = 'setup';
	$menu_sub = 'createdb';
	include_once('php-inc/settings.php');
	include_once('php-inc/header.php');
?>
      
  
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  	
                  	<?php 
		          		$dbcreds_path = "sql-connections/db-creds.inc";
		          		if (!file_exists($dbcreds_path)) {
		          			$btn_disabled = 'disabled';
		          	?>
		          		<div class="alert alert-danger"><b>Wait!</b> Your Configuration file is not present. Please click on <b>Configuration</b> link and create the file.</div>
		          	<?php	
		          		}
						else {
							//including the Mysql connect parameters.
							include_once("sql-connections/db-creds.inc");
						}
		          	?>    
		          	
                  	<div class="row mtbox">
                  		<div class="col-md-12 col-sm-12 box0">
                  			<div class="box1">
                  				<h1>Setup / Reset Database For SQL Injection Labs</h1>
                  				<p class="box-welcome-text"><a id="create-db" class="btn btn-success  btn-lg <?php echo isset($btn_disabled)? $btn_disabled:'' ?>">Create/Reset Database</a></p>
                  			</div>
                  		</div>
                  	</div>
                  	
                  	<div class="row mtbox" id="sql-msg-section">
                  		<div class="col-md-12 col-sm-12 box0">
                  			<div id="sql-msg" class="box1">
                  				sfgffg
                  			</div>
                  		</div>
                  	</div>
                  
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->

              </div><!--/row -->
          </section>
      </section>

      <!--main content end-->
      <div></div>
      
<?php
	include_once('php-inc/footer.php');
?>	