//hide not needed elements from beginning
// $( document ).ready(function() {
//     // checkForGlobal();
//     $("#page2").hide();
//     $("#page3").hide();
// });

var clicked = false;

$(document).ready(function () {
    if (window.location.href.indexOf("id") > -1) {
        // alert("your url contains the name franky");
        $("#jsform").hide();
        $("#par").hide();
        $("#page3").hide();
        $("#page2").show();
        getDate();
        getName();
        // $("#welTxt").append("Welcome " + document.getElementById('name').value + " !to Flammen" );
    } else {
        $("#page2").hide();
        $("#page3").hide();
    }
});


//sumbit using ajas so the page is not reloading
$("#clickme").on("click", function () {
    clickButton();
    $("#jsform").hide();
    $("#par").hide();
    $("#page2").show();
    // $("#welTxt").append("Welcome " + document.getElementById('name').value + " to Flammen" );
    // if (clicked = true) {
    //     getDate();
    // }
});


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
            // alert(html);
            // $('#msg').html(html);
            getDate();
            getName();
        }
    });
};

function getDate() {
    $.ajax({
        url: '../inDate.php',
        type: 'POST',
        data: {
            id: getVariable(),
        },
        success: function (html) {
            $('#inDate').html(html);
            // alert(getVariable());
            // $('#welTxt').append(html);
        }
    })
};

function getName(){
    $.ajax({
        url: '../name.php',
        type: 'POST',
        data: {
            id: getVariable(),
        },
        success: function (html) {
            $('#welTxt').html(html);
            // alert(getVariable());
            // $('#welTxt').append(html);
        }
    })
}

function getVariable() {
    const queryString = window.location.search;

    const urlParams = new URLSearchParams(queryString);

    const id = urlParams.get('id');

    return id;
};

