//execute few things before everything
$(document).ready(function () {
    getImage();
    $('input[type="button"]').attr('disabled', true);
    $('input[type="text"],input[type="number"]').on('keyup', function () {
        var name_value = $("#name").val();
        var number_val = $("#phone").val();

        if (number_val != '' && name_value != '') {
            $('input[type="button"]').attr('disabled', false);
        } else {
            $('input[type="button"]').attr('disabled', true);
        }
    });

    if(window.location.href.indexOf("id") > -1){
        getOutDate();
    }else{
        $("#page1").show();
    }
});


//sumbit data about user
$("#clickme").on("click", function () {
    clickButton();
    $("#page1").hide();
    $("#page2").show();
});

//register to database using ajax
function clickButton() {
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;

    $.ajax({
        url: '../action.php',
        type: 'POST',
        data: {
            name: name,
            phone: phone,
        },
        success: function (html) {
            window.history.replaceState({}, 'title', "?id=" + html);
            getDate();
            getName();
            // sendSms(phone);
        }
    });
};

//ajax request to get logo
function getImage() {
    $.ajax({
        url: '../getImage.php',
        type: 'POST',
        data: {
            key: getLocationKey(),
        },
        success: function (html) {
            $('#test1').html(html);
            // $('#test').prepend('<img src = "' + html + '">');
            var image = new Image();
            image.src = html;
            $('#test').append(image);
            // $("#test").attr('src', html);
        }
    })
};


// get check-in date
function getDate() {
    $.ajax({
        url: '../inDate.php',
        type: 'POST',
        data: {
            id: getVariable(),
        },
        success: function (html) {
            $('#inDate').html(html);
        }
    })
};

// get check-in name
function getName() {
    $.ajax({
        url: '../name.php',
        type: 'POST',
        data: {
            id: getVariable(),
        },
        success: function (html) {
            $('#welTxt').html(html);
        }
    })
};

// send sms to check-in number
function sendSms(phone) {
    $.ajax({
        url: '../sms.php',
        type: 'POST',
        data: {
            phone: phone,
            id: getVariable(),
        },
        success: function (html) {
        }
    });
};

// get check-out date
function getOutDate() {
    $.ajax({
        url: '../outDate.php',
        type: 'POST',
        data: {
            id: getVariable(),
        },
        success: function (html){
            if(html != ''){
                $("#page1").hide();
                $("#page2").hide();
                $("#page3").show();
                getNameFromId(getVariable());
            }else{
                $("#page1").hide();
                $("#page3").hide();
                $("#page2").show();
                getDate();
                getName();
            }
        }
    });
};

//get check-out name and date
function getNameFromId(id) {
    $.ajax({
        url: '../name2.php',
        type: 'POST',
        data: {
            id: id,
        },
        success: function (html) {
            $('#outTxt').html(html);
        }
    });
    $.ajax({
        url: '../outDate.php',
        type: 'POST',
        data: {
            id: id,
        },
        success: function (html) {
            $('#outDate').html(html);
        }
    });
};

//get global variable
function getVariable() {
    const queryString = window.location.search;

    const urlParams = new URLSearchParams(queryString);

    const id = urlParams.get('id');

    return id;
};

function getLocationKey(){
    const queryString = window.location.search;

    const urlParams = new URLSearchParams(queryString);

    const key = urlParams.get('key');

    return key;
};
