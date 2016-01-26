<?php
$menu_main = 'setup';
$menu_sub = 'config';
include_once ('php-inc/settings.php');
include_once ('php-inc/header.php');
?>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> Create Database Configuration File</h3>

		<!-- BASIC FORM ELELEMNTS -->
		<div class="row mt">
			<div class="col-lg-12">

				<?php
				$dbcreds_path = "sql-connections/db-creds.inc";
				if (file_exists($dbcreds_path) && !isset($_POST['db_name']) && !isset($_POST['db_username'])) {
				?>
				<div class="alert alert-danger">
					<b>Wait!</b> Your Configuration file is already present. Please check out the file at <b><?php echo dirname(__FILE__) . "sql-credentials". DIRECTORY_SEPARATOR ?>db-creds.inc</b>
				</div>
				<?php
				}
				elseif(isset($_POST['db_name']) && isset($_POST['db_username'])) {
				$db_name = $_POST['db_name'];
				$db_username = $_POST['db_username'];
				$db_password = isset($_POST['db_password'])?$_POST['db_password']:'';
				$db_cred_str = "<?php\n\n";
				$db_cred_str .= "\$db_username = '$db_username';\n";
				$db_cred_str .= "\$db_password = '$db_password';\n";
				$db_cred_str .= "\$host = 'localhost';\n";
				$db_cred_str .= "\$dbname = '$db_name';\n\n";
				$db_cred_str .= "?>\n";
				$fp=fopen(dirname(__FILE__) . DIRECTORY_SEPARATOR . "sql-connections". DIRECTORY_SEPARATOR . "db-creds.inc","w");
				$fw = fwrite($fp,$db_cred_str."\n");
				fclose($fp);
				if($fw) {
				?>
				<div class="alert alert-success">
					Your Configuration file has been created. You can check out the file at <b><?php echo dirname(__FILE__) . "sql-credentials". DIRECTORY_SEPARATOR ?>db-creds.inc</b>
				</div>
				<?php
				}
				}
				?>

				<div class="form-panel">
					<h4 class="mb"><i class="fa fa-angle-right"></i> Enter Your Database Connection Details</h4>
					<form class="form-horizontal style-form" method="post" action="config.php">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Database Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="db_name">
								<span class="help-block">Enter the database name the application will connect to.</span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Database Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="db_username">
								<span class="help-block">Enter the database username for your database.</span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Database Password</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="db_password">
								<span class="help-block">Enter your database password.</span>
							</div>
						</div>
						<p>
							<center>
								A configuration file will be created with your details provided abaove.
							</center>
						</p>
						<center>
							<input type="submit" class="btn btn-theme" value="Create File" />
						</center>
					</form>
				</div>
			</div><!-- col-lg-12-->
		</div><!-- /row -->

		<!-- BASIC FORM ELELEMNTS -->
		<div class="row mt">
			<div class="col-lg-12">

				<?php
				$settings_path = "php-inc/settings.php";
				if (file_exists($settings_path) && !isset($_POST['settings_path'])) {
				?>
				<div class="alert alert-danger">
					<b>Wait!</b> Your Settings file is already present. Please check out the file at <b><?php echo dirname(__FILE__) . "php-inc". DIRECTORY_SEPARATOR ?>settings.php</b>
				</div>
				<?php
				}
				elseif(isset($_POST['settings_path'])) {
				$settings_path = $_POST['settings_path'];
				$settings_path_str = "<?php\n\n";
				$settings_path_str .= "define('WEBROOT', '$settings_path');\n\n";
				$settings_path_str .= "?>\n";
				$fp=fopen(dirname(__FILE__) . DIRECTORY_SEPARATOR . "php-inc". DIRECTORY_SEPARATOR . "settings.php","w");
				$fw = fwrite($fp,$settings_path_str."\n");
				fclose($fp);
				if($fw) {
				?>
				<div class="alert alert-success">
					Your Configuration file has been created. You can check out the file at <b><?php echo dirname(__FILE__) . "php-inc". DIRECTORY_SEPARATOR ?>settings.php</b>
				</div>
				<?php
				}
				}
				?>

				<div class="form-panel">
					<h4 class="mb"><i class="fa fa-angle-right"></i> Enter Your Web Root Path</h4>
					<form class="form-horizontal style-form" method="post" action="config.php">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label">Database Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="settings_path" value="http://localhost/sqlilabs/" />
								<span class="help-block">Enter the path where you have installed the application. Please always put a slash at the end.</span>
							</div>
						</div>
						<p>
							<center>
								A settings file will be created with your details provided abaove.
							</center>
						</p>
						<center>
							<input type="submit" class="btn btn-theme" value="Create File" />
						</center>
					</form>
				</div>
			</div><!-- col-lg-12-->
		</div><!-- /row -->

	</section><!--/wrapper -->
</section><!-- /MAIN CONTENT -->

<!--main content end-->

<?php
include_once ('php-inc/footer.php');
?> 