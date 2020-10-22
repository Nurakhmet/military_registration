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
    <a class="p-2 text-dark" href="adminPanel.php">All Students</a>
    <a class="p-2 text-dark" href="#">Add new Student</a>
  </nav>
  <a class="btn btn-outline-primary" href="#">Sign out</a>
</div>

	<div class="container">
		<div class="row mt-5">
      		<div class="col-sm-12">
      			<h1>Admin Page</h1>
      			<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Surname</th>
				      <th scope="col">Course</th>
				      <th scope="col">Details</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>3</td>
				      <td><a class="btn btn-primary" href="userPage.php">Details</a></td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>3</td>
				      <td><a class="btn btn-primary" href="userPage.php">Details</a></td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>the Bird</td>
				      <td>3</td>
				      <td><a class="btn btn-primary" href="userPage.php">Details</a></td>
				    </tr>
				  </tbody>
				</table>
				<br>
				<form action="">
					<h4>Make report about students</h4>
					<button class="btn btn-secondary">Report</button>
				</form>
            </div>
        </div>
	</div>
</body>
</html>