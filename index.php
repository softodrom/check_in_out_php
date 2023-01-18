<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check-in</title>

    <!-- Responsive to mobile devices-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--    Add style.css-->
    <link href="css/style.css" rel="stylesheet">

    <!--    For slide plugin-->
    <link href="css/slideToUnlock.css" rel="stylesheet">
    <link href="css/iphone.theme.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid" >

    <div class="row">
        <div class="col-xs-12">
            <img class="center-block" src="img/flammen-logo.svg" id="frontImg">
        </div>
    </div>
    <div id="page1">
        <div class="row">
            <h3><p class="text-center tt" id="par">Fill in the forms to check in to Flammen</p></h3>
        </div>
        <form id="jsform">
            <div class="row mar">
                <div class="col-xs-12">
                    <div class="form-group">
                        <!--                    <input type="hidden" name="name" value="value">-->
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                    </div>
                </div>
            </div>

            <div class="row mar">
                <div class="col-xs-12">
                    <div class="form-group">
                        <input type="number" class="form-control" id="phone" placeholder="Phone nr." name="phone">
                    </div>
                </div>
            </div>
            <div class="form-group" id="divClick">
                <input id="clickme" type="button" name="" value="submit" class="btn btn-default">
            </div>
        </form>
    </div>


    <!--    Page two(check-out)-->
    <div id="page2">
        <div class="row">
            <h3><p class="text-center tt" id="welTxt"></p></h3>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <img class="center-block ima" src="img/check.png">
            </div>
        </div>

        <div class="row">
            <h3>
                <b><p class="text-center" id="inDate"></p></b>
                <b><p class="text-center">Flammen - Odense</p></b>
            </h3>
        </div>

        <div class="row">
            <h4>
                <p class="text-center tt">You are now checked in.</p>
                <p class="text-center tt">A text with the link to this check</p>
                <p class="text-center tt">out page, has been sent to the</p>
                <p class="text-center tt">provided phone number</p>
            </h4>
        </div>

        <div class="container center-block">
            <div class="row">
                <div id="slider" data-lock-text="Check-out" class="col-5"></div>
            </div>
        </div>
    </div>


    <!--    Log-out page-->
    <div id="page3">
        <div class="row">
            <h3><p class="text-center tt" id="outTxt"></p></h3>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <img class="center-block ima" src="img/wave.png">
            </div>
        </div>

        <div class="row">
            <h3>
                <b><p class="text-center" id="outDate"></p></b>
                <b><p class="text-center">Flammen - Odense</p></b>
            </h3>
        </div>

        <div class="row">
            <h4>
                <p class="text-center tt">You are now checked out.</p>
                <p class="text-center tt">Thank you for your visit to</p>
                <p class="text-center tt">Flammen.</p>
                <p class="text-center tt">Have a nice day.</p>
            </h4>
        </div>
    </div>
    <div class="row" id="bottom-right">
        <img class="logo" src="img/dds.png">
    </div>

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