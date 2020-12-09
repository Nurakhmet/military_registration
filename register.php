<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="shortcut icon" href="images/gerb_logo.png" type="image/png">

    <div class="container">    
        
        <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <?php if(isset($_GET['error'])) {?>
                        <div class="alert alert-danger" role="alert">
                          Registration Error
                        </div>       
                        <?php } ?>
                        <?php if(isset($_GET['success'])) {?>
                        <div class="alert alert-success" role="alert">
                          Registration Completed
                        </div>     
                        <?php } ?>
                        <div class="panel-heading" style="width: 100%; height: 10%; background: url(https://img2.akspic.ru/image/115022-dizajn-uzor-kamuflyazh-voennyj_kamuflyazh-voennosluzhashhie-1920x1080.jpg) center center no-repeat; background-size: cover; text-shadow: 1px 1px 2px black, 0 0 1em black;">
                        <div class="panel-title" style="color: white; font-weight: bold">Sign Up</div>
                            <div style="float:right; font-size: 100%; position: relative; top:-25px; font-weight: bold"><a class="btn btn-success" id="signinlink" href="auth.php">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form action="to_register.php" method="post" id="signupform" class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="surname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <input type="submit" class="btn btn-info" value="Sign up">
                                         
                                    </div>
                                </div>
                            </form>
                         </div>
                    </div>
         </div> 
    </div>

<!--<section class="reg">
    <div class="container">
    <div class="panel panel-info">
                        <?php if(isset($_GET['error'])) {?>
                        <div class="alert alert-danger">
                          Registration Error
                        </div>       
                        <?php } ?>
                        <?php if(isset($_GET['success'])) {?>
                        <div class="alert alert-success">
                          Registration Completed
                        </div>     
                        <?php } ?>
        <h1>Create Account</h1>
        <h2>Free and Fast.</h2>
        <form action="to_register.php" method="post" id="signupform"role="form">
        <div class="reg__inner">
            <div class="reg__nav">

                <input class="reg__fullname" type="text" placeholder="First name" name="name">
                <input class="reg__fullname" type="text" placeholder="Last name" name="surname">
            </div>
            <div class="reg__email">
                <input class="reg__emaill" placeholder="Enter your email or phone number" name="email" type="text">
            </div>
            <div class="reg__pass">
                <div class="reg__password">
                    <input type="password" placeholder="Enter your password" name="password">
                </div>
                <div class="reg__password1">
                    <input type="password" placeholder="Enter your password again" name="password2">
                </div>
            </div>
            <button name="regis" class="bt__regis" value="Sign up">Registration</button>
        </div>
    </div>
</section>-->