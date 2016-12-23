<head>
  <title>SOFe Avatar Generator</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>

  <style>
  .centered {text-align: center;}
  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.js" integrity="sha384-jgQsvNMr8zkb64e1g7aH9Yj/ZLpqINIFzdatFD7RgOak1XaPpfKVmNMCsVmPgTfJ" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="jumbotron">
      <div class="centered">
        <img src="sofeavatar.php?hex=63d957" height="70" width="70">
        <h1>SOFe Avatar Generator</h1>
        <form action="sofeavatar.php">
          <p>
            Avatar Color:
            <input name="hex" class="jscolor" value="63d957">
          </p>
          
          <p>
            Background Color:
            <input name="bghex" class="jscolor" value="eeeeee">
          </p>
          
          <input class="btn btn-primary" type="submit">
        </form>
      </div>
    </div>
  </div>
</body>
