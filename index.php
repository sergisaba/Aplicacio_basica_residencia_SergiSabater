<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <!-- JS -->
    <script src="./js/ajax.js"></script>
    <title>Sergi Sabater - residencia</title>
</head>
<body>
    <div class="container text-center">
        <h3>Log-in residencia</h3>
        <input type="text" name="nombre" id="nombre" placeholder="Nom" required />
        <br><br>
        <input type="password" name="pass" id="pass" placeholder="Password" required />
        <br><br>
        <button id="blog" class="btn btn-primary" onclick="login()">log-in</button>
        <button id="blogout" class="btn btn-danger" onclick="logout()">log-out</button>
    </div>
    <div class="container">
        <div id="logm"></div>
    </div>
</body>
</html>