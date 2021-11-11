<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <link rel="icon" href="https://webstatic-sea.mihoyo.com/ys/event/e20210930card/images/wy.ee508638.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #2a2c36;
        }

        .card {
            outline: none !important;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 5%;
            border-radius: 15px;
            background-color: #e9e9d5;
        }

        .container {
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 5%;
        }

        .judul {
            margin-bottom: 10px;
            text-align: center;
        }

        .form-control {
            border-radius: 20px;
            background-color: #f7f7ee;
        }

        .btn {
            border-radius: 20px;
        }

        .btn-primary {
            background-color: #32d59f;
            border-color: #32d59f ;
        }
    </style>

    <script>
        //Reset button
        $(document).ready(function () {
            $("#resetbutton").click(function () {
                $("#regist-form")[0].reset()
            });
        });
    </script>


</head>

<body>
    <div class="row justify-content-center no-gutters">
        <div class="col-sm-5">
            <div class="container-sm my-5">
                <div class="card p-sm-5">
                    <div class="text-center mb-sm-4">
                        <img src="https://webstatic-sea.mihoyo.com/ys/event/e20210930card/images/wy.ee508638.png"
                            style="width: 25%;">
                    </div>
                    <div class="judul">
                        <h1><b>REGISTRATION FORM</b></h1>
                    </div>
                    <div>
                        <form id="regist-form" action="https://google.com">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" placeholder="Enter your name"
                                    name="name" id="name" required pattern="[a-zA-Z]{1,}"
                                    oninvalid="this.setCustomValidity('Name only consist of alphabets')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" placeholder="Enter your address" name="address"
                                    id="address" required oninvalid="this.setCustomValidity('Must be filled')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail address:</label>
                                <input type="email" class="form-control" placeholder="Enter your E-mail address"
                                    name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" placeholder="Enter your password"
                                    name="password" id="password" required pattern=".{8,16}" oninvalid="this.setCustomValidity('Password should be between 8-16 characters long')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="telephone">Telephone:</label>
                                <input type="tel" class="form-control" placeholder="Enter your telephone number"
                                    name="telephone" id="telephone" required pattern="[0-9]{7,}"  oninvalid="this.setCustomValidity('Phone number should be numbers only and at least 7 digits')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="course">Select your course:</label>
                                <select class="form-control" name="course" id="course" required  oninvalid="this.setCustomValidity('Cannot choose blank')"
                                oninput="this.setCustomValidity('')">
                                    <option value=""></option>
                                    <option value="BTECH">BTECH</option>
                                    <option value="BBA">BBA</option>
                                    <option value="BCA">BCA</option>
                                    <option value="B.COM">B.COM</option>
                                    <option value="GEEKFORGEEKS">GEEKFORGEEKS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="zipcode">Zip-code:</label>
                                <input type="text" class="form-control" placeholder="Enter your zip-code" name="zipcode"
                                    id="zipcode" pattern="[0-9]{6,6}" required  oninvalid="this.setCustomValidity('Must be 6 digits number')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                        </form>
                        <div>
                            <button type="submit" form="regist-form" class="btn-primary btn px-3 mr-3"
                                id="sendbutton">Send</button>
                            <button type="button" class="btn-danger btn px-3" id="resetbutton">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>