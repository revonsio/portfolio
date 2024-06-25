<!DOCTYPE html>
<html lang="en">

<head>
    <title>Report Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="http://fonts.cdnfonts.com/css/valorant" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.829), rgba(0, 0, 0, 0.829)), url("5476661.jpg");
            background-size: cover;
            background-attachment: fixed;
            background-position: 140px;
            font-family: 'Roboto', sans-serif;
            color: white;
        }

        .container-sm {
            padding: 15px 15px;
        }

        .container-sm h1 {
            font-size: 45px;
            color: white;
            font-family: 'VALORANT', sans-serif;
        }

        .container-sm p {
            font-size: 17px;
            color: white;
        }

        .col-6 {
            box-shadow: 3px 4px 5px 6px black;
            background: rgba(0, 0, 0, 0.4);
            border-radius: 10px;
            padding: 20px;
        }

        .container-sm label {
            font-size: 17px;
            color: white;
            font-weight: normal;
            margin-top: 15px;
        }

        .container-sm .form-control {
            background: none;
            color: rgb(255, 255, 255);
        }

        .container-sm .form-control-textarea {
            background: none;
            color: rgb(255, 255, 255);
            width: 100%;
            margin-top: 20px;
        }

        .container-sm .form-control-file-border {
            color: rgb(255, 255, 255);
            width: 100%;
        }

        i {
            color: #ffffff;
            padding-right: 8px;
        }

        .container-sm .form-control .select {
            color: #ffffff;
        }

        option {
            background-color: #000 !important;
        }

        #button {
            background-color: #E4373C;
            border-radius: 0px;
            color: #ffffff;
            font-size: 11px;
            text-transform: uppercase;
            padding: 13px 90px;
            cursor: pointer;
            border: none;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container-sm">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h1 class="text-center">Submit a Report</h1>
                <p class="text-center">
                    From tech to tilt, we're here to help you!
                    Submit a Report! So long as it doesn't fall through a portal, we'll get back to you soon.
                </p>
                <form action="resultphp" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="form-group">
                        <i class="fa fa-user"></i><label for="username"> Username:</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-key"></i><label for="password">
                            Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password"
                            required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-desktop"></i><label for="sel1"> Windows OS:</label>
                        <select class="form-control list-group" name="sel1" required>
                            <option></option>
                            <option>Windows 10</option>
                            <option>Windows 8</option>
                            <option>Windows 7</option>
                            <option>Other</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-server" aria-hidden="true"></i><label for="sel2"> Game server:</label>
                        <select class="form-control" name="sel2" required>
                            <option></option>
                            <option>Asia</option>
                            <option>North America</option>
                            <option>KRJP</option>
                            <option>South America</option>
                            <option>Middle East</option>
                            <option>Europe</option>
                        </select>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <label>Please select the technical issue(s) you were experiencing:</label>
                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="check_list[]" value="Odd character movement">Odd character movement
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="check_list[]" value="Audio error">Audio error
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="check_list[]" value="Mini-map display error">Mini-map display error
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="check_list[]" value="Error reconnecting">Error reconnecting
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="check_list[]" value="Low/fluctuating FPS">Low/fluctuating FPS
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="check_list[]" value="Game is choppy">Game is choppy
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="check_list[]" value="Deformed graphics">Deformed graphics
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="check_list[]" value="Unstable connectionn">Unstable connectionn
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label>Comment:</label>
                        <textarea class="form-control-textarea" rows="5" name="comment"
                            placeholder="Describe your report here"></textarea>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-paperclip" aria-hidden="true"></i><label>Attachment below (if
                            necessary):</label>
                        <input type="file" class="form-control-file-border" name="file">
                    </div>
                    <center><button type="submit" name="submit" value="submit" id="button">Submit</button></center>
                </form>

            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

    <script>
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>