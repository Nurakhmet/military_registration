<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP WEB SITE</title>
	<link rel="stylesheet" href="css/CssStyle.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">IITU</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="index.php">Home</a>
    <a class="p-2 text-dark" href="slideshows.php">Slideshows</a>
    <a class="p-2 text-dark" href="registration.php">Registration</a>
    <a class="p-2 text-dark" href="contact.php">Contact</a>
  </nav>
  <a class="btn btn-outline-primary" href="#">Sign in</a>
</div>

	<div class="container">
		<div class="row mt-5">
      		<div class="col-sm-6 offset-3 ">
      			<h1>Edit Student</h1>
        			<form action="#" method="post">
			          <div class="form-group">
			            <label>Email Adress</label>
			            <input type="email" required class="form-control" name="email">
			            <small id="emailHelp" class="form-text text-muted">Input your email</small>
			          </div>
			          <div class="form-group">
			            <label>Name</label>
			            <input type="text" required class="form-control" name="name">
			            <small id="nameHelp" class="form-text text-muted">Input your name</small>
			          </div>
			          <div class="form-group">
			            <label>Surname</label>
			            <input type="text" required class="form-control" name="surname">
			            <small id="surnameHelp" class="form-text text-muted">Input your surname</small>
			          </div>
			          <div class="form-group">
			            <label>Birthdate</label>
			            <input type="date" class="form-control" name="birthdate">
			            <small id="birthdateHelp" class="form-text text-muted">Input your birthdate</small>
			          </div>
						<label>Attached certificate (original)</label>
			          <div class="input-group mb-3">
						  <div class="custom-file">
						  	
						    <input type="file" class="custom-file-input" id="inputGroupFile02">
						    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
						  </div>
						  <div class="input-group-append">
						    <span class="input-group-text" id="">Upload</span>
						  </div>
						</div>
						<label>ID card (original).</label>
						<div class="input-group mb-3">
						  <div class="custom-file">
					
						    <input type="file" class="custom-file-input" id="inputGroupFile02">
						    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
						  </div>
						  <div class="input-group-append">
						    <span class="input-group-text" id="">Upload</span>
						  </div>
						</div>
			          <div class="form-group">
			          	<div class="row">
			          		<div class="col">
				            	<button class="btn btn-secondary">Save</button>
				            </div>
				            <div class="col">
				            	<button class="btn btn-danger float-right">Cancel</button>
				            </div>
			            </div>
			          </div>
        			</form>
                </div>
        </div>
	</div>
</body>
</html>