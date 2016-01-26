<?php
	$menu_main = 'error_based';
	$menu_sub = 'example1';
	include_once('../php-inc/settings.php');
	include_once('../php-inc/header.php');
?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-12 main-chart">
                  	
                  	<div class="row mtbox">
                  		<div class="col-md-12 col-sm-12">
                  			<div class="mnc-center">
                  				<h1>ERROR BASED SQL INJECTION</h1>
                  				<p class="hint"><span>Hint:</span>ID is parsed as string in the backend.</p>
                  			</div>
                  		</div>
                  	</div>
                  	
                  	<div class="row mtbox">
                  		<div class="col-md-12 col-sm-12">
                  			<div class="mnc-center">
                  				<div class="display-data">
                  				<?php 
                  					//including the Mysql connect parameters.
									include_once("../sql-connections/sql-connect.php");
									
									error_reporting(0);
									
									// take the variables 
									if(isset($_GET['id']))
									{
										$id=$_GET['id'];
										
																			
										// connectivity 								
										$sql="SELECT * FROM users WHERE id='$id' LIMIT 0,1";
										$result=mysql_query($sql);
										$row = mysql_fetch_array($result);
										
										
										if($row)
										{							 
										  	echo '<b><span class="custom-color-magento">Your Login name:</span></b> '. $row['username'];
										  	echo "<br><br>";
										  	echo '<b><span class="custom-color-magento">Your Password:</span></b> ' .$row['password'];
									  	}
										else 
										{											
											print_r(mysql_error());
										}
									}
									else { echo "Please input the ID as parameter with numeric value";}									
                  				?>
                  				</div>
                  			</div>
                  		</div>
                  	</div>
                  
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->

              </div><!--/row -->
          </section>
      </section>

      <!--main content end-->

<?php
	include_once('../php-inc/footer.php');
?>