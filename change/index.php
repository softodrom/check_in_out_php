<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flammen</title>

    <!-- Responsive to mobile devices-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--    Add style.css-->
    <link href="css/style.css" rel="stylesheet">

    <!--    For slide plugin-->
    <link href="css/slideToUnlock.css" rel="stylesheet">
    <link href="css/iphone.theme.css" rel="stylesheet">

</head>
<body>
<div id="test1"></div>
<div id="test"></div>
<img src="'../img/flammen-logo-neg.svg">
<!---Submit page-->
<div class="container" id="page1">
    <div class="d-flex justify-content-center align-items-center p-1">
        <img class="center-block" src="img/flammen-logo.svg" id="frontImg">
    </div>

    <div class="d-flex justify-content-center p-1">
        <h5><p class="tt text-center">Fill in the forms to check in to Flammen</p></h5>
    </div>

    <form id="jsform">
        <div class="d-flex justify-content-center p-2">
            <input type="text" class="form-control text-center formInput" id="name" placeholder="Name" name="name">
        </div>

        <div class="d-flex justify-content-center p-2">
            <input type="number" class="form-control text-center formInput" id="phone" placeholder="Phone nr."
                   name="phone" pattern="[0-9]*" inputmode="numeric">
        </div>

        <div class="d-flex justify-content-center p-2" id="divClick">
            <input id="clickme" type="button" name="" value="Submit" class="btn btn-light">
        </div>
    </form>
</div>

<!--Check-in page-->
<div class="container" id="page2">
    <div class="d-flex justify-content-center align-items-center p-1">
        <img class="center-block" src="img/flammen-logo.svg" id="frontImg">
    </div>

    <div class="d-flex justify-content-center p-1">
        <h5><p class="text-center tt" id="welTxt"></p></h5>
    </div>

    <div class="d-flex justify-content-center align-items-center p-2">
        <img class="ima" src="img/check.png">
    </div>

    <div class="d-flex justify-content-center p-2">
        <h5>
            <b><p class="text-center" id="inDate"></p></b>
            <b><p class="text-center">Flammen - Odense</p></b>
        </h5>
    </div>

    <div class="d-flex justify-content-center p-2">
        <h6>
            <p class="text-center tt">You are now checked in.</p>
            <p class="text-center tt">A text with the link to this check</p>
            <p class="text-center tt">out page, has been sent to the</p>
            <p class="text-center tt">provided phone number</p>
        </h6>
    </div>


    <div id="slider" data-lock-text="Check-out" class="text-center d-flex justify-content-center"></div>
</div>

<!--Check-out page-->
<div class="container" id="page3">
    <div class="d-flex justify-content-center align-items-center p-1">
        <img class="center-block" src="img/flammen-logo.svg" id="frontImg">
    </div>

    <div class="d-flex justify-content-center p-1">
        <h5><p class="text-center tt" id="outTxt"></p></h5>
    </div>

    <div class="d-flex justify-content-center align-items-center p-2">
        <img class="ima" src="img/wave.png">
    </div>

    <div class="d-flex justify-content-center p-2">
        <h5>
            <b><p class="text-center" id="outDate"></p></b>
            <b><p class="text-center">Flammen - Odense</p></b>
        </h5>
    </div>

    <div class="d-flex justify-content-center p-2">
        <h6>
            <p class="text-center tt">You are now checked out.</p>
            <p class="text-center tt">Thank you for your visit to</p>
            <p class="text-center tt">Flammen.</p>
            <p class="text-center tt">Have a nice day.</p>
        </h6>
    </div>
</div>

<div id="footer">
    <img class="logo" src="img/dds.png">
</div>

<!--Slider check in-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
<script src="js/jquery.slideToUnlock.js"></script>
<script>
    $(document).ready(function () {
        $("#slider").slideToUnlock();
    })
</script>
<script src="js/script.js"></script>
</body>
</html>