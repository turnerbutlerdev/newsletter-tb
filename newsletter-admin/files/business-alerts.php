<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Owner Sellers-Free Online Estate Agency & Business Transfer Agency</title>

    <!-- Bootstrap -->
    
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mediaquery.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script language="javascript" type="text/javascript">	
 function dropdownlist(listindex)	
 {	
 	
document.formname.subcategory.options.length = 0;	
 switch (listindex)	
 {	
 	
 case "England" :	
 document.formname.subcategory.options[0]=new Option("Select County","");	
 
 <?php 
						$connection=mysqli_connect("UK1MYSQL2482.eechost.net","sql164621","Q5xikq7r","sql164621");

				$sql = "SELECT * FROM `webuk` WHERE `country` like 'England' group by `states`";
			$results = $connection->query($sql);
			$var=0;
			while($row = $results->fetch_assoc()) {
			echo 'document.formname.subcategory.options['.$var.']=new Option("'.$row["states"].'","'.$row["states"].'");';
			$var++;
			}
			echo 'document.formname.subcategory.options['.$var.']=new Option("--Others--"," ");';
					
						 mysqli_close($connection);
						  ?>
 	
 
 	
 break;	
 	
 case "Northern Ireland" :	
 document.formname.subcategory.options[0]=new Option("Select County","");	
<?php 
					$connection=mysqli_connect("UK1MYSQL2482.eechost.net","sql164621","Q5xikq7r","sql164621");

				$sql = "SELECT * FROM `webuk` WHERE `country` like 'Northern Ireland' group by `states`";
			$results = $connection->query($sql);
			$var=0;
			while($row = $results->fetch_assoc()) {
			echo 'document.formname.subcategory.options['.$var.']=new Option("'.$row["states"].'","'.$row["states"].'");';
			$var++;
			}
			
					echo 'document.formname.subcategory.options['.$var.']=new Option("--Others--"," ");';
						 mysqli_close($connection);
						  ?>
 	
 	
 	
 break;	
 	
 case "Republic Of Ireland" :	
 document.formname.subcategory.options[0]=new Option("Select County","");	
 <?php 
					$connection=mysqli_connect("UK1MYSQL2482.eechost.net","sql164621","Q5xikq7r","sql164621");

				$sql = "SELECT * FROM `webuk` WHERE `country` like 'Republic Of Ireland' group by `states`";
			$results = $connection->query($sql);
			$var=0;
			while($row = $results->fetch_assoc()) {
			echo 'document.formname.subcategory.options['.$var.']=new Option("'.$row["states"].'","'.$row["states"].'");';
			$var++;
			}
			
						echo 'document.formname.subcategory.options['.$var.']=new Option("--Others--"," ");';
						 mysqli_close($connection);
						  ?>	
 	
 break;	
 case "Scotland" :	
 document.formname.subcategory.options[0]=new Option("Select County","");	
<?php 
						$connection=mysqli_connect("UK1MYSQL2482.eechost.net","sql164621","Q5xikq7r","sql164621");

				$sql = "SELECT * FROM `webuk` WHERE `country` like 'Scotland' group by `states`";
			$results = $connection->query($sql);
			$var=0;
			while($row = $results->fetch_assoc()) {
			echo 'document.formname.subcategory.options['.$var.']=new Option("'.$row["states"].'","'.$row["states"].'");';
			$var++;
			}
			
					echo 'document.formname.subcategory.options['.$var.']=new Option("--Others--"," ");';
						 mysqli_close($connection);
						  ?>		
 	
 break;	
 case "Wales/Cymru" :	
 document.formname.subcategory.options[0]=new Option("Select County","");	
<?php 
						$connection=mysqli_connect("UK1MYSQL2482.eechost.net","sql164621","Q5xikq7r","sql164621");

				$sql = "SELECT * FROM `webuk` WHERE `country` like 'Wales/Cymru' group by `states`";
			$results = $connection->query($sql);
			$var=0;
			while($row = $results->fetch_assoc()) {
			echo 'document.formname.subcategory.options['.$var.']=new Option("'.$row["states"].'","'.$row["states"].'");';
			$var++;
			}
			
					echo 'document.formname.subcategory.options['.$var.']=new Option("--Others--"," ");';
						 mysqli_close($connection);
						  ?>		
 	
 break;	
 	
 }	
 return true;	
 }	
 </script>	



    <script language="javascript" type="text/javascript">	
 function dropdownlistadvance(listindex1)	
 {	
 	
document.formname1.subcategory1.options.length = 0;	
 switch (listindex1)	
 {	
 	
 case "England" :	
 document.formname1.subcategory1.options[0]=new Option("Select County","");	
 
 <?php 
						$connection=mysqli_connect("UK1MYSQL2482.eechost.net","sql164621","Q5xikq7r","sql164621");

				$sql = "SELECT * FROM `webuk` WHERE `country` like 'England' group by `states`";
			$results = $connection->query($sql);
			$var=0;
			while($row = $results->fetch_assoc()) {
			echo 'document.formname1.subcategory1.options['.$var.']=new Option("'.$row["states"].'","'.$row["states"].'");';
			$var++;
			}
			echo 'document.formname1.subcategory1.options['.$var.']=new Option("--Others--","0");';
					
						 mysqli_close($connection);
						  ?>
 	
 
 	
 break;	
 	
 case "Northern Ireland" :	
 document.formname1.subcategory1.options[0]=new Option("Select County","");	
<?php 
					$connection=mysqli_connect("UK1MYSQL2482.eechost.net","sql164621","Q5xikq7r","sql164621");

				$sql = "SELECT * FROM `webuk` WHERE `country` like 'Northern Ireland' group by `states`";
			$results = $connection->query($sql);
			$var=0;
			while($row = $results->fetch_assoc()) {
			echo 'document.formname1.subcategory1.options['.$var.']=new Option("'.$row["states"].'","'.$row["states"].'");';
			$var++;
			}
			
					echo 'document.formname1.subcategory.options['.$var.']=new Option("--Others--","0");';
						 mysqli_close($connection);
						  ?>
 	
 	
 	
 break;	
 	
 case "Republic Of Ireland" :	
 document.formname1.subcategory1.options[0]=new Option("Select County","");	
 <?php 
					$connection=mysqli_connect("UK1MYSQL2482.eechost.net","sql164621","Q5xikq7r","sql164621");

				$sql = "SELECT * FROM `webuk` WHERE `country` like 'Republic Of Ireland' group by `states`";
			$results = $connection->query($sql);
			$var=0;
			while($row = $results->fetch_assoc()) {
			echo 'document.formname1.subcategory1.options['.$var.']=new Option("'.$row["states"].'","'.$row["states"].'");';
			$var++;
			}
			
						echo 'document.formname1.subcategory1.options['.$var.']=new Option("--Others--","0");';
						 mysqli_close($connection);
						  ?>	
 	
 break;	
 case "Scotland" :	
 document.formname1.subcategory1.options[0]=new Option("Select County","");	
<?php 
						$connection=mysqli_connect("UK1MYSQL2482.eechost.net","sql164621","Q5xikq7r","sql164621");

				$sql = "SELECT * FROM `webuk` WHERE `country` like 'Scotland' group by `states`";
			$results = $connection->query($sql);
			$var=0;
			while($row = $results->fetch_assoc()) {
			echo 'document.formname1.subcategory1.options['.$var.']=new Option("'.$row["states"].'","'.$row["states"].'");';
			$var++;
			}
			
					echo 'document.formname1.subcategory1.options['.$var.']=new Option("--Others--","0");';
						 mysqli_close($connection);
						  ?>		
 	
 break;	
 case "Wales/Cymru" :	
 document.formname1.subcategory1.options[0]=new Option("Select County","");	
<?php 
						$connection=mysqli_connect("UK1MYSQL2482.eechost.net","sql164621","Q5xikq7r","sql164621");

				$sql = "SELECT * FROM `webuk` WHERE `country` like 'Wales/Cymru' group by `states`";
			$results = $connection->query($sql);
			$var=0;
			while($row = $results->fetch_assoc()) {
			echo 'document.formname1.subcategory1.options['.$var.']=new Option("'.$row["states"].'","'.$row["states"].'");';
			$var++;
			}
			
					echo 'document.formname1.subcategory1.options['.$var.']=new Option("--Others--","0");';
						 mysqli_close($connection);
						  ?>		
 	
 break;	
 	
 }	
 return true;	
 }	
 </script>	
  </head>
  <body>

	    <div id="wrapper">
        <!--div class="overlay"></div>-->
        <!-- Sidebar -->  
        
        
     
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            
            
           
            <div class="maincontainer padding0">
            	 <!--login-->
                 	<section class="login_section">
                    	<div class="container">
                    			<div class="row">
                                	<div class="col-md-6 col-sm-6 col-xs-12">
                                    	<div class="login">
                                        	<span class="login_txt"><a href="register.php">Login</a></span>
                                            / <span class="register"><a href="register.php">Register</a></span>
                                        </div>
                                    </div>
                                	<div class="col-md-6 col-sm-6 col-xs-12">
                                    	<div class="details">
                                    		<span class="tel"><a href="tel:0333-1234562"><i class="fa fa-phone"></i>0333-1234562</a>  </span>
                                            <span class="mail"><a href="mailto:sales@ownersellers.com"><i class="fa fa-envelope"></i>sales@ownersellers.com</a></span>
                                        </div>
                                    </div>	
                                </div>
                    	</div>
                    </section>
                    <section class="logo_section">
                    	<div class="container">
                  			  <div class="row">
                                	<div class="col-lg-3 col-md-12 col-sm-12 padding0">
                                    	<div class="logo">
                                        	<h1><a href="index.php"><img src="images/logo.png" alt="" class="" /></a></h1>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    <div class="col-lg-9 col-md-12 col-sm-12 pad-rt0">
                                    <div class="navigation">
                                    	<nav class="navbar navbar-default">
                                                  <div class="navbar-header">
                                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                                      <span class="sr-only">Toggle navigation</span>
                                                      <span class="icon-bar"></span>
                                                      <span class="icon-bar"></span>
                                                      <span class="icon-bar"></span>
                                                    </button>
                                                   <!-- <a class="navbar-brand" href="#">Project name</a>-->
                                                  </div>
                                                  <div id="navbar" class="navbar-collapse collapse">
                                                    <ul class="nav navbar-nav">
                                                      <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sell a house <i class="fa fa-angle-down down_img"></i></a>
                                                        <ul class="dropdown-menu">
                                                          <li><a href="selling-a-house.php">Selling a house</a></li>
                                                          <li><a href="house-seller-login.php">Seller login</a></li>
                                                          <li><a href="free-property-valuation.php">Free property valuation</a></li>
                                                          <li><a href="house-call-back.php">Request a call back</a></li>
                                                          <li><a href="seller-house-how-it-works.php">How it works</a></li> <li><a href="house-package.php">House package</a></li>
                                                          <li><a href="house-faq-seller.php">Help/FAQ</a></li>
                                                         
                                                        </ul>
                                                      </li>
                                                      
                                                       <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buy a house <i class="fa fa-angle-down down_img"></i></a>
                                                        <ul class="dropdown-menu">
                                                          <li><a href="buying-a-house.php">Houses for Sale</a></li>
                                                          <li><a href="house-buyer-login.php">Buyer login</a></li>
                                                          <li><a href="buyer-house-how-it-works.php">How it works</a></li><li><a href="house-wanted.php">House wanted</a></li>
                                                            <li><a href="house-alerts.php">House Alerts</a></li>
                                                             <li><a href="house-buyer-faq.php">Help/FAQ</a></li>
                                                          
                                                        </ul>
                                                      </li>
                                                      
                                                       <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">sell a business <i class="fa fa-angle-down down_img"></i></a> <ul class="dropdown-menu">
                                                          <li><a href="selling-a-business.php">Selling a business</a></li>
                                                          <li><a href="business-seller-login.php">Seller login</a></li>
                                                          <li><a href="free-business-valuation.php">Free business valuation</a></li><!--   <li><a href="business-call-back.php">Request a call back</a></li> -->
                                                            <li><a href="business-how-it-works.php">How it works</a></li>
                                                             <li><a href="business-package.php">Business package</a></li>
                                                              <li><a href="seller-business-faq.php">Help/FAQ</a></li>
                                                         
                                                        </ul>
                                                      </li>
                                                       <li class="dropdown active">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">buy a business <i class="fa fa-angle-down down_img"></i></a>
                                                        <ul class="dropdown-menu"> <li><a href="buying-a-business.php">Businesses for Sale</a></li>
                                                          <li><a href="business-buyer-login.php">Buyer login</a></li>
                                                          <li><a href="searchsec.php">Complete Business Listing</a></li><li><a href="business-buyer-how-it-works.php">How it works</a></li>
                                                           <li><a href="business-wanted.php">Business wanted</a></li>  <li><a href="business-alerts.php">Business Alerts</a></li>
                                                             <li><a href="business-buyer-faq.php">Help/FAQ</a></li>
                                                         
                                                        </ul>
                                                      </li>
                                                       <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">advice centre <i class="fa fa-angle-down down_img"></i></a>
                                                        <ul class="dropdown-menu">
                                                           <li><a href="mortgages.php">Mortgages</a></li>
                                                          <li><a href="solicitors.php">Solicitors</a></li><li><a href="house-buyer-seller.php">House Buyers & Sellers</a></li>
                                                          <li><a href="business-buyer-seller.php">Business Buyers & Sellers</a></li>
                                                        
                                                        </ul>
                                                      </li>
                                                       <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">alerts <i class="fa fa-angle-down down_img"></i></a>
                                                        <ul class="dropdown-menu">
                                                           <li><a href="business-alerts.php">Business Alerts</a></li>
                                                          <li><a href="house-alerts.php">House Alerts</a></li>
                                                         
                                                        </ul>
                                                      </li>    <li class="dropdown">
                                                        <a href="https://ownersellers.com//blog" target="_blank">blog </a>  </li>
                                                    </ul>
                                                    
                                                  </div><!--/.nav-collapse -->
                                                </div><!--/.container-fluid -->
                                              </nav>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                </div>
                 		</div>
                     </section>
                 
                      <section class="banner">
                     	<img src="images/selling_bus_bg.jpg" alt="" class="img-responsive" />
                     
                     </section>
                    <div class="clearfix"> </div>
                      
                     <section class="seeling_busines_section">
                     	<div class="container padding0">
                     		<div class="col-lg-8  col-md-8 col-sm-12">
                            	<div class="details_part">
                            		<h3 class="txt_blue">Newsletter</h3>
                                   <p> If you haven&rsquo;t found a business that interests you yet, fill in the form below and we will send businesses that match your criteria directly to your inbox.</p>
                                   <br>
                                   <p>Your personal details will not be published or given to third parties.</p>
                                   <p><br>
                                   </p>
                                   <form action="https://ownersellers.com//processnl.php" method="post">
                                     <table width="582" border="0">
                                       <tbody>
                                         <tr>
                                           <td width="134">Email Address</td>
                                           <td width="656"><input type="text" name="email" id="email"></td>
                                         </tr>
                                         <tr>
                                           <td>First name</td>
                                           <td><input type="text" name="fname" id="fname"></td>
                                         </tr>
                                         <tr>
                                           <td>Last name</td>
                                           <td><input type="text" name="lname" id="lname" value=" "></td>
                                         </tr>
                                         <tr>
                                           <td>Interested in</td>
                                           <td><input type="checkbox" name="0" id="0" onClick="sel()" value="1">
                                             All Sectors</td>
                                         </tr>
                                         <tr>
                                           <td>(Business Sectors)</td>
                                           <td><input type="checkbox" name="1" id="1" value="1">
                                             Manufacturing &amp; Engineering</td>
                                         </tr>
                                         <tr>
                                           <td> </td>
                                           <td><input type="checkbox" name="2" id="2" value="1">
                                             Agricultural &amp; Materials</td>
                                         </tr>
                                         <tr>
                                           <td> </td>
                                           <td><input type="checkbox" name="3" id="3" value="1">
                                             Garage Transport &amp; Construction</td>
                                         </tr>
                                         <tr>
                                           <td> </td>
                                           <td><input type="checkbox" name="4" id="4" value="1">
                                             Services &amp; Properties</td>
                                         </tr>
                                         <tr>
                                           <td> </td>
                                           <td><input type="checkbox" name="5" id="5" value="1">
                                             Retail &amp; Consumer</td>
                                         </tr>
                                         <tr>
                                           <td> </td>
                                           <td><input type="checkbox" name="6" id="6" value="1">
                                             IT &amp; E-Commerce</td>
                                         </tr>
                                         <tr>
                                           <td> </td>
                                           <td><input type="checkbox" name="7" id="7" value="1">
                                             Hotels &amp; Restaurants Business</td>
                                         </tr>
                                         <tr>
                                           <td> </td>
                                           <td><input type="checkbox" name="8" id="8" value="1">
                                             
                                             Wholesalers &amp; Disrtributors</td>
                                         </tr>
                                         <tr>
                                           <td colspan="2"><div align="center"><br>
                                             <br>
                                             <input name="sub_nu" type="submit" id="sub_nu" value="Submit">
                                             
                                             <input name="sub_nu" type="reset" id="sub_nu" value="Reset">
                                           </div></td>
                                         </tr>
                                       </tbody>
                                     </table>
                                   </form>
                                   
                                   <script type="application/javascript">
								   function sel()
								   {
								    if(document.getElementById("0").checked==true)
	  {
		document.getElementById("1").disabled=true; 
		document.getElementById("2").disabled=true; 
		document.getElementById("3").disabled=true; 
		document.getElementById("4").disabled=true; 
		document.getElementById("5").disabled=true; 
		document.getElementById("6").disabled=true; 
		document.getElementById("7").disabled=true; 
		document.getElementById("8").disabled=true; 
	
	  }
	  else
	  {
		document.getElementById("1").disabled=false; 
		document.getElementById("2").disabled=false; 
		document.getElementById("3").disabled=false; 
		document.getElementById("4").disabled=false; 
		document.getElementById("5").disabled=false; 
		document.getElementById("6").disabled=false; 
		document.getElementById("7").disabled=false; 
		document.getElementById("8").disabled=false; 
		
		
	  }
								   }
								   
								   </script>
                                   <br><br>
                                   <blockquote>To Unsubscribe fill in your email address and submit, 
                                   <form action="https://ownersellers.com//newsapp/unsuscribe.php" method="get">
                                   <input type="text" name="email" id="email" placeholder="Enter Email Address">
                                   <input type="submit" name="" id="" value="Unsubscribe">
                                   
                                   
                                   </form> </blockquote>

                            	</div>
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12" >
                            	<div class="downlaod_part">
                                <div class="booklet blue">
                            <h2>How to sell a business booklet</h2>
                            <hr/>
                            <div class="clearfix"></div>
                            <p>Download our Free Guide on "How to Sell a Business"</p>

<p>Click on the "Download" button and learn from the experts how to Sell a Business</p>
<div class="clearfix"> </div>
<a href="https://ownersellers.com//HowtoSellaBusinessHandbook.pdf" target="_blank"><button type="submit" class="search_btn">Download</button></a>
                            </div>
                            	<div class="busineess_sale blue">
                                	  <h2>Businesses for sale</h2>
                                        <hr/>
                                        <div class="clearfix"></div>
                                        <p class="search_sec">Search Here</p>
                                <form class="form-horizontal" role="form" action="searchsec.php" method="get" id="formname" name="formname" >
                                <div class="form-group">
                                      
                                      <div class="col-sm-12">
                                        <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Keywords">
                                      </div>
                                    </div>
                                    <div class="form-group">   
                            <div class="col-sm-12">  
                            
                             <select name="category" id="category" onChange="javascript: dropdownlist(this.options[this.selectedIndex].value);" >	
 <option value="any">Select Region</option>	
 <option value="England">England</option>	
 <option value="Northern Ireland">Northern Ireland</option>	
 <option value="Republic Of Ireland">Republic Of Ireland</option>	
  <option value="Scotland">Scotland</option>	
 <option value="Wales/Cymru">Wales/Cymru</option>	

 </select>
                                  
                                  </div>
                        </div>
                                    <div class="form-group">   
                                        <div class="col-sm-12">  
                                        
                                          <script type="text/javascript" language="JavaScript">	
 document.write('<select name="subcategory"><option value="any" >Select County</option></select> <br>')	
 </script>	
 <noscript><select name="subcategory" id="subcategory" >	
 <option  value="any">Select Sub-Category</option>	
 </select>	<br>
 </noscript> 
                                              
                                              </div>
                                    </div>
                  					<a href="#"><button class="btn_all">SEARCH </button></a>
                                   
                  					</form>
                                </div>
                        
                            	</div>
                            </div>
                     	
                     
                     	</div>
                     </section>
                     
					 
                     
                     
                     <div class="clearfix"> </div>
              

                <!-- footer -->
               <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-xs-12">
                            <div class="footer-properties">
                                <h4>HOUSES</h4>
                                <ul>
                                    <li><a href="free-property-valuation.php">House Valuation</a></li>
                                    <li><a href="selling-a-house.php">Sell a House</a></li>
                                    <li ><a href="buying-a-house.php">Buy a House</a></li>
                                    <li><a href="house-alerts.php">House Alerts</a></li> <li><a href="sold-houses.php">Sold Houses</a></li>
                               <li><a href="buying-a-house.php">International Houses</a></li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                            <div class="footer-properties">
                                <h4>BUSINESSES</h4>
                                <ul> <li><a href="free-business-valuation.php">Business Valuation</a></li>
                                    <li><a href="selling-a-business.php">Sell a Business</a></li>
                                    <li><a href="buying-a-business.php">Buy a Business</a></li>
                               <li><a href="business-alerts.php">Business Alerts</a></li>  <li><a href="sold-businesses.php">Sold Businesses</a></li> <li><a href="international-businesses.php">International Businesses</a></li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                            <div class="footer-properties">
                                <h4>QUICK LINKS</h4>
                                <ul> <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                    <li><a href="recommend.php">Recommend to a Friend</a></li>
                                 <li><a href="https://ownersellers.com//blog/">Blog/News</a></li> <li><a href="register.php">User Login</a></li><li><a href="https://ownersellers.com//pressrelease" target="_blank">Press Release</a></li>
                                </ul>
                            </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                            <div class="footer-properties">
                                <h4>CONTACT US</h4>
                                <ul class="footer">
                                    <li>
                                    <img src="images/map.png" class="img-responsive addr" alt="address"/><span>2-4 High Road,Ickenham House,Ickenham<br/>
                                    Middlesex , UB10 8LJ</span></li>
                                    <li><img src="images/phone-icon.png" class="img-responsive addr" alt="phone"/>
                                   <span> <a href="tel:0333-1234562">0333-1234562</a></span>                                    </li>
                                    <li><img src="images/globe-icon.png" class="img-responsive addr" alt="globe"/>
                                    <span><a href="mailto:sales@ownersellers.com" target="_blank">sales@ownersellers.com</a></span>                                    </li>
                                    <li><img src="images/globe-icon.png" class="img-responsive addr" alt="globe"/>
                                    <span><a href="https://www.ownersellers.com//" target="_blank">www.ownersellers.com</a></span>                                    </li>
                                </ul>
                               
                            </div>
                            </div>
                        </div>
                    <div class="row">
                    	<div class="container">
                        
                         <div class="social_section">
<span itemscopeitemtype=http://schema.org/Organization”">
<link itemprop="url" href=https://www.ownersellers.com”">


                           <a itemprop=sameAs" href="https://www.facebook.com/ownersellers/" target="_blank"> <i class="fa fa-facebook fb_icon"></i></a>
                           <a itemprop=sameAs" href="https://twitter.com/OwnerSellers" target="_blank">  <i class="fa fa-twitter twit_icon"></i></a>
                            <a itemprop=sameAs" href="https://plus.google.com/b/117385093149984160301/+Ownersellers-sellingyourbusiness/posts" target="_blank"> <i class="fa fa-google-plus gplus_icon"></i></a>
                           <a itemprop=sameAs" href="https://uk.linkedin.com/in/ownersellers" target="_blank">  <i class="fa fa-linkedin lin_icon"></i></a>
                            <a href="https://www.pinterest.com/ownersellers/" target="_blank"> <i class="fa fa-pinterest fb_icon"></i></a>
                           <a itemprop=sameAs" href="https://www.youtube.com/channel/UCjRpeCsJ7X59tegfOhG3Bww" target="_blank">  <i class="fa fa-youtube twit_icon"></i></a>
                            <a itemprop=sameAs" href="http://ownersellers.tumblr.com/" target="_blank"> <i class="fa fa-tumblr gplus_icon"></i></a>
                            <a itemprop=sameAs" href="http://ownersellers-businessesforsale.blogspot.in/" target="_blank"> <i class="fa"><img src="images/blog.png" style="width:45px; height:45px;"></i></a><img src="logolist-os.png" style="height: 100%;width: 50%;" >
                            </span>
                            </div>
                          
                           </div>
                    </div>
                    </div>
                    <div class="copyright">
                          <div class="container padding0">
                          <div class="col-md-6 col-xs-12 copy">&copy; 2015-2016 OwnerSellers. All Rights Reserved | Company Reg No :6394532</div> <div class="col-md-6 col-xs-12 sm-power" style="text-align:right;"><a href="terms-and-conditions.php">Terms & Conditions</a> | <a href="privacy-policy.php">Privacy Policy</a> | <a href="cookies.php">Cookies</a></div>
                          </div>
                          </div>
           
                </footer>
                <!-- footer ends-->
                      
                                                     
            
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
















   <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!-- custom scrollbar plugin -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/readmore.js"></script>
    <script src="js/common.js"></script>
  </body>
</html>