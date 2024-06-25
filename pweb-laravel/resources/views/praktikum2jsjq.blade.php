<!DOCTYPE html>
<html>

<head>
    <title>Js Form Validation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        .container {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        #content {
            border: 2px #d4d4d4 solid;
            border-radius: 10px;
            padding-bottom: 50px;
        }

        #form-title {
            background-color: #fcfcec;
            padding: 15px 0px;
        }

        #title {
            text-align: center;
            margin: 10px 0;
            font-weight: 600;
            font-size: x-large;
        }

        #red {
            margin-top: 15px;
            margin-bottom: 20px;
            color: red;
            font-size: small;
        }

        #form {
            padding-left: 20px;
            padding-right: 20px;
        }

        .error_form {
            color: red;
        }

        #button {
            background-color: #FFBC01;
            color: #fff;
            padding: 8px 0;
            font-size: larger;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-sm-4 m-auto" id="content">
            <div class="row" id="form-title">
                <div class="col-sm">
                    <p id="title">JavaScript Form Validation</p>
                </div>
            </div>

            <div id="form">
                <p id="red">' All fields are mandatory '</p>
                <form action="https://github.com/revonsio" id="form-regist">
                    <div class="form-group">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="form-fname" placeholder="Enter Your Name" required>
                        <small class="error_form" id="fname_error_message"></small>
                    </div>
                    <div class="form-group">
                        <label>Username(6-8
                            characters):</label>
                        <input type="text" class="form-control" id="form-uname" placeholder="Enter Your Username"
                            required>
                        <small class="error_form" id="uname_error_message"></small>
                    </div>
                    <div class="form-group">
                        <label for="name">Email:</label>
                        <input type="text" class="form-control" id="form-email" placeholder="Enter Your E-mail"
                            required>
                        <small class="error_form" id="email_error_message"></small>
                    </div>
                    <div class="form-group">
                        <label for="sel1">State:</label>
                        <select class="form-control list-group" id="sel1">
                            <option>(Select State)</option>
                            <option>Alabama</option>
                            <option>Arizona</option>
                            <option>Florida</option>
                            <option>Alaska</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Address:</label>
                        <input type="text" class="form-control" placeholder="Enter Your Address" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Zip Code:</label>
                        <input type="text" class="form-control" id="form-zipcode" placeholder="Enter Your Zip Code"
                            required>
                        <small class="error_form" id="zipcode_error_message"></small>
                    </div>
                    <button id="button" type="submit" class="btn btn-block">Check Form</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(function () {

            $("#fname_error_message").hide();
            $("#uname_error_message").hide();
            $("#email_error_message").hide();
            $("#zipcode_error_message").hide();


            var error_fname = false;
            var error_uname = false;
            var error_email = false;
            var error_zipcode = false;


            $("form-fname").focusout(function () {
                check_fname();
            });
            $("form-uname").focusout(function () {
                check_uname();
            });
            $("form-email").focusout(function () {
                check_email();
            });
            $("form-zipcode").focusout(function () {
                check_zipcode();
            });


            function check_fname() {
                var pattern = /^[a-z A-Z]*$/;
                var fname = $("#form-fname").val()
                if (pattern.test(fname)) {
                    $("#fname_error_message").hide();
                } else {
                    $("#fname_error_message").html("**Should Contain Only Characters");
                    $("#fname_error_message").show();
                    error_fname = true;
                }
            }

            function check_uname() {
                var pattern = /^([a-zA-z0-9]{6,8})*$/;
                var uname = $("#form-uname").val()
                if (pattern.test(uname)) {
                    $("#uname_error_message").hide();
                } else {
                    $("#uname_error_message").html("**Should be 6-8 Characters");
                    $("#uname_error_message").show();
                    error_uname = true;
                }

            }

            function check_email() {
                var pattern = /^([a-zA-Z0-9_.])+\@(([a-z])+\.)+([a-z]{2,4})+$/;
                var email = $("#form-email").val()
                if (pattern.test(email)) {
                    $("#email_error_message").hide();
                } else {
                    $("#email_error_message").html("**Invalid E-mail Format");
                    $("#email_error_message").show();
                    error_email = true;
                }
            }
            function check_zipcode() {
                var pattern = /^([0-9]{6})+$/;
                var zipcode = $("#form-zipcode").val()
                if (pattern.test(zipcode)) {
                    $("#zipcode_error_message").hide();
                } else {
                    $("#zipcode_error_message").html("**Invalid ZipCode");
                    $("#zipcode_error_message").show();
                    error_zipcode = true;
                }
            }

            $("#form-regist").submit(function () {
                error_fname = false;
                error_uname = false;
                error_email = false;
                error_zipcode = false;


                check_fname();
                check_uname();
                check_email();
                check_zipcode();

                if (error_fname === false && error_uname === false &&
                    error_email === false && error_zipcode === false) {
                    alert("Registration Complete.");
                    return true;
                } else {
                    alert("Please complete the form requirement.");
                    return false;
                }
            })
        })
    </script>
</body>

</html>