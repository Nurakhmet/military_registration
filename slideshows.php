<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP WEB SITE</title>
	<link rel="stylesheet" href="css/CssStyle.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  >

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
<div class="container text-center">
    <div id="carousel" class="carousel slide d-inline-block">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="img/111.jpg" width="500" height="600" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/222.jpg" width="500" height="600" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="img/333.jpg" width="500" height="600" alt="...">
            </div>
        </div>
    </div>

    <div class="my-2">
        <button class="btn btn-primary" data-action="cycle">Запустить</button>
        <button class="btn btn-primary" data-action="pause">Остановить</button>
        <button class="btn btn-primary" data-action="prev">Предыдущий</button>
        <button class="btn btn-primary" data-action="next">Следующий</button>
        <button class="btn btn-primary" data-action="to-1">На 1 слайд</button>
        <button class="btn btn-primary" data-action="to-2">На 2 слайд</button>
        <button class="btn btn-primary" data-action="to-3">На 3 слайд</button>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $(function () {
        // метод cycle
        $('.btn').click(function () {
            var action = $(this).attr('data-action');
            if (action.indexOf('to') >= 0) {
                var action = parseInt(action.substring(3))-1;
            }
            console.log(action);
            $('#carousel').carousel(action);
        });
    });
</script>

</body>
</html>
    