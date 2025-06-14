<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <!--user icon-->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body>
<!--display data using seeder-->
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-end mt-3">
                <form action="/logout" method="POST">
                    @csrf
                 
                    @auth
                    <i class="fas fa-user"></i>&nbsp;{{ auth()->user()->username }}&nbsp;&nbsp;
                   @endauth
                    <button class="btn btn-dark">Log Out</button> 
                </form>
            </div>
        </div>
        <br>

    
</body>
</html>
