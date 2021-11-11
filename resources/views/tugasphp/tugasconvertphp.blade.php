<!DOCTYPE html>
<html>

<head>
    <title>Calculate Factorial</title>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="css/tugasphpstyle.css">
    <script src="js/tugasphpvalidationscript.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="container pt-5">
                    <div class="card shadown rounding">
                        <div class="text-center mt-4 mb-2">
                            <img src="https://webstatic-sea.mihoyo.com/ys/event/e20210930card/images/wy.ee508638.png"
                                style="width: 25%;">
                        </div>
                        <div class="text-center mb-3">
                            <h1>Calculate Factorial</h1>
                        </div>
                        <div class="card-body">
                            <div class="container mb-3 px-5">
                                <form id="factorial" action="fact" method="post">
                                    @csrf
                                    <div class="input-group">
                                        <input type="number" name="xNumber" id="xNumber" class="form-control"
                                            placeholder="Input any non-negative number">
                                        <div class="input-group-append">
                                            <span class="input-group-text"
                                                style="background-color: #32d59f; border: none;"><b>!</b></span>
                                        </div>
                                    </div>
                                </form>
                                <div class="d-flex justify-content-center mt-4">
                                    <button type="submit" form="factorial"
                                        class="btn-danger btn px-3 mr-3">Calculate</button>
                                    <button type="button" class="btn-success btn px-3" id="resetbutton">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
