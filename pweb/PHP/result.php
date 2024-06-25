<html>
    <head>
    <title>Light/Dark Mode Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.829), rgba(0, 0, 0, 0.829)), url("2576099.jpg");
            background-size: cover;
            background-attachment: fixed;
            background-position: 140px;
            font-family: 'Roboto', sans-serif;
            color: white;
        }
    </style>
    </head>
    <body>
        Hello <?php echo $_POST["username"]; ?>
    </body>
</html> 