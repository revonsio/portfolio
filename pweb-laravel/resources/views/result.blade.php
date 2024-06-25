<html>
    <head>
    <title>Report Submitted!</title>
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
            background-image: linear-gradient(rgba(0, 0, 0, 0.829), rgba(0, 0, 0, 0.829)), url("d3395ed9226a8a74c22891f4b2fe688f.png");
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            font-family: 'Roboto', sans-serif;
            color: white;
            overflow: hidden;
        }
        #card {
            background: rgba(0, 0, 0, 0.6);
        }
    </style>
    </head>

    <body>
    <?php
        $uname = $_POST["username"];
        $sel1 = $_POST["sel1"];
        $sel2 = $_POST["sel2"];
        $alert = "";
        
        $category = count($_POST['check_list']);
        if ($category > "6") {
            $alert = "<font color=red> Important </font>";
        } elseif ($category > "3") {
            $alert = "<font color=orange> Medium </font>";
        } else {
            $alert = "<font color=green>Standart </font>";
        }

       
    ?>
    <div class="container d-flex h-100 justify-content-center">
        <div class="row align-self-center w-100">
            <div class="col col-sm-7 mx-auto">
                <div class="card card-body p-sm-3" id="card">
                    <h2 style="text-align: center;">Your Report Has Been Submitted!</h2>
                    <h3 style="text-align: center;">Ticket Category: <?php echo $alert ?> </h3>
                    <p style="text-align: center;">Hello <?php echo "<b>$uname</b>"  ?>! 
                    We have received your report regarding bugs and errors in the game. We will immediately make improvements for your playing comfort. Thank you for your participation! Best regards.</p>
                    <p>User Account Ticket's Information:</p>
                    <ul>
                        <li>Username: <?php echo $uname ?></li>
                        <li>Windows OS: <?php echo $sel1 ?></li>
                        <li>Game Server: <?php echo $sel2 ?></li>
                    </ul>

                    <p>Reported bug(s) & error(s):</p>
                    <?php
                    if(isset($_POST['submit'])){
                        if(empty($_POST['check_list'])){
                            echo"None of the list you reported";
                        }
                        else{
                            foreach($_POST['check_list'] as $item){  
                                echo $item .","; 
                            }
                            
                        }
                        $comment = ($_POST['comment']);
                        echo "<b>Your comment: </b>";
                        echo "<font color=white>$comment</font>"; 
                        }
                    ?>
                   
                </div>
            </div>
        </div>
    </div>
    </body>
</html>