<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Student details</title>
</head>
<body class="backcolor">
   <center><h1 class="textstyle">Student form</h1></center> 
   
   <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="main.php">contact us</a>
      </li>
      
    </ul>
  </nav>
  
   <div class="container">
       <div class="row">
           <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
           <div class="col col-12 col-sm-4 col-md-4col-lg-4 col-xl-4">
            <Table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" class="formcontrol">

                    </td>
                    <td>Last Name</td>
                    <td><input type="text" class="formcontrol"></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" class="formcontrol"></td>
                    <td>Dob</td>
                    <td><input type="text" class="formcontrol"></td>
                </tr>
                <tr>
                    <td>Mobile Number</td>
                    <td><input type="text" class="formcontrol"></td>
                    <td>Email id</td>
                    <td><input type="text" class="formcontrol"></td>
                </tr>
                <tr>
                    <td>Place</td>
                    <td><input type="text" class="formcontrol"></td>
                    <td>Username</td>
                    <td><input type="text" class="formcontrol"></td>
                </tr>
                <tr>
                <td>Password</td>
                    <td><input type="password" class="formcontrol"></td>
                    <td>Confirm password</td>
                    <td><input type="password" class="formcontrol"></td>
                </tr>
               
            </Table>
            <tr><center><Button class="btn btn-danger">submit</Button></center>
                
              
           </div>
           <div class="col col-12 col-sm-4 col-md-4col-lg-4 col-xl-4">

       </div>
   </div>
   
</body>
</html>