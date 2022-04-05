<?php 
  session_start(); 

  if (!isset($_SESSION['fname'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: slogin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['fname']);
  	header("location: slogin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
	Welcome to my project page	
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['fname'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['fname']; ?></strong></p>
        
    	<p> <a href="index1.php?logout='1'" style="color: red;">logout</a> </p>

      


        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Profile</title>
    <style>
        #mainNav{
        background: black;
    position: absolute;
    top: 2px;
    height: 58px;
    width: 100%;
        }
        #home1{
            position: absolute;
            top:5px;

        }
    </style>

    <meta name="author" content="Codeconvey" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"> - -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
  <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <!-- Footer -->
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/creative.css" type="text/css">
    <!--Only for demo purpose - no need to add.-->
    <!-- <link rel="stylesheet" href="css/demo.css" /> -->
      <link rel="stylesheet" href="css/demo.css">
	    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background:black" >
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                    <img  src="profileicon.ico" height="45" width="45">
                    <h1 style="color: aqua; text-align: center;">HIRING BOX</h1>
            
                    
                   
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="home.html" id="home1">Home</a>
                        </li>
                       
                    </ul>

            </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
		
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            <!-- Ad Here -->
            
        </div>
</div>



<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div  class="card shadow-sm">
            <h3>WELCOME: </h3>
          </div>
          <div class="card-body" >
            <p class="mb-0"><strong class="pr-1 " >FIRST NAME :</strong>musaddiq</p>
            <hr>
            <p class="mb-0"><strong class="pr-1" >DATE OF BIRTH:</strong><?php>01-03-2022</p>
            <hr>
            <p class="mb-0"><strong class="pr-1" >cgpa:</strong>9.31</p>
            <hr>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%" contenteditable="true">Name</th>
                <td width="2%" >:</td>
                <td contenteditable="true">musaddiq</td>
              </tr>
              <tr>
                <th width="30%">Branch</th>
                <td width="2%">:</td>
                <td contenteditable="true">CSE</td>
              </tr>
              <tr>
                <th width="30%" >Graduation Year	</th>
                <td width="2%">:</td>
                <td contenteditable="true">2023</td>
              </tr>
              <tr>
                <th width="30%">CGPA</th>
                <td width="2%">:</td>
                <td contenteditable="true">9.31</td>
              </tr>
              <tr>
                <th width="30%">Interested domain to work</th>
                <td width="2%">:</td>
                <td contenteditable="true">web development</td>
              </tr>
              
            </table>
          </div>
        </div>
          <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
          </div>
          <br>
          
          <div class="card-body pt-0">
             <h5><div class="card-body pt-0"><h5><u>Technical Skills</u></h5>
              <p>
          <li contenteditable="true">
            <b><ol>C</ol>
            <ol>UBUNTU</ol>
            <ol>HTML,CSS,JS</ol>
            <ol>sql</ol><b></p>
          </div>



          <div class="card-body pt-0">
             <h5><div class="card-body pt-0"><h5><u>Resume </u></h5>
              <form>
               <input type="file" id="resume" accept=".pdf">
               <p>upload your resume</p>
               <input type="button" name="upload">
               <p>upload</p>
              </form>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->

	</body>
</html>






















































































	
        


    <?php endif ?>
   


</div>

</body>
</html>