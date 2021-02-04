
<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
   
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles_2.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="container-fluid">
     <form action="registration_submit.php" method="POST" class="register-form"> 
      <div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
              <label for="firstName">NAME</label>
               <input name="user" class="form-control" type="text">    
           </div>            
      </div><!-- 
      <div class="row">
           <div class="col-md-4 col-sm-4 col-lg-4">
              <label for="email">EMAIL</label>
               <input name="email" class="form-control" type="email">             
           </div>            
      </div> -->
      <div class="row">
           <div class="col-md-4 col-sm-4 col-lg-4">
              <label for="password">PASSWORD</label>
               <input name="password" class="form-control" type="password">             
           </div>            
      </div>
      <hr>
      <div class="row">
           <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
           <button type="submit" class="btn btn-default regbutton">Register</button>
           
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
           <a class="btn btn-default logbutton" href="Login.php"> Login </a>
          </div>          
      </div>    
    </form>
</div>


</body>
</html>

