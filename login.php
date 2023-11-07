<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>bdctf</title>
</head>
<body class="bg-dark">
<!-- navbar -->
  <div class="topnav">
  <a class="active" href="#home">BDCTF</a>
  <div class="con1">
    
    <a href="index.php">Home</a>
    <a href="ctf.php">CTF</a>
    <a href="blog.php">blog</a>
    <a href="scoreboard.php">Scoreboard</a>
    <a href="wallpapers.php">wallpapers</a>
    <a href="#contact">Contact</a>
  </div>
  <div class="con2">
    <a href="registration.php">registration</a>
    <a href="login.php">login</a>
    <a class="logout" href="logout.php">logout</a>
  </div>

</div>
      
      </div>
      <div class="container">
        <form action="/action_page.php">
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" placeholder="Enter email" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" placeholder="Enter password" id="pwd">
            </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>
          </form>
      </div>
     
      <div class="card text-center bg-primary">

      <div class="card-body">
        <h5 class="card-title">All tasks and writeups are copyrighted by their respective authors.</h5>
        
        <a href="#" class="btn btn-warning">Privacy Policy</a>
      </div>
      <div class="card-footer text-muted">
        @BDCTF Team-2021
      </div>
    </div>


 
</body>
</html>