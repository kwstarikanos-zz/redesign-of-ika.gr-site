/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


require('./jquery.PrintArea');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    //el: '#app'
});

function loading(v) {
    if (v) {
        $('#login-spinner').show();
        $('#submit-login-btn').html("");
        $('#submit-login-btn').removeClass('active');
        $('#submit-login-btn').addClass('disabled');
    }
    else {
        $('#login-spinner').hide();
        $('#submit-login-btn').html("Σύνδεση");
        $('#submit-login-btn').removeClass('disabled');
        $('#submit-login-btn').addClass('active');
    }
}

$(document).ajaxComplete(function (e, xhr, settings) {
    switch (xhr.status) {
        case 301:
            alert("Redirection");
            break;
        case 401:
            $('#login_modal').modal('show');
            break;
    }
});

$(document).ready(function () {

    $('#login-form-reg-btn').on('click', function (e) {
        $('#login_modal').modal('hide');
        $('#register_modal').modal('show');
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    loading(false);

    $('#login-form').on('submit', function (e) {
        e.preventDefault();
        loading(true);
        $('#username-error').html("");
        $('#password-error').html("");


        var geturl = $.ajax({
            url: $('#login-form').attr('action'),
            dataType: 'json',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded',
            data: $('#login-form').serializeArray(),
            success: function (data, textStatus, request) {
                loading(false);


            },
            error: function (jqXhr, textStatus, errorThrown) {
                loading(false);

            },
            complete: function (httpObj, textStatus) {

            }
        });
    });

    $('#employer-options > a').on('click', function (e) {
        /*        e.preventDefault();
                var url = $(this).attr('href');

                $.ajax({
                    url: url,
                    type: 'get',
                    /!*dataType: 'json',*!/
                    /!* contentType: 'application/json',*!/
                    success: function (data, textStatus, request) {
                        console.log("success");

                        console.log(data);

                    },
                    error: function (jqXhr, textStatus, errorThrown) {
                        console.log("error");
                        $('#login_modal').modal('show');



                    }
                });*/
    });

    $('#certifications_radio input').on('change', function () {
        /*alert($('input[name=certification]:checked', '#certifications_radio').val());*/
        $('#ama').removeAttr('disabled');
        $('#amka').removeAttr('disabled');
        $('#afm').removeAttr('disabled');
        $('#cert-submit').removeAttr('disabled');

        $("#cert-type").val($('input[name=certification]:checked', '#certifications_radio').val());

        $("#ama").focus();


        /*$('input[name=cert-type]','#cert-type').val() = $('input[name=certification]:checked', '#certifications_radio').val()*/
    });


    /*Language Selector*/

    var grImgLink = "https://image.flaticon.com/icons/png/128/206/206682.png";
    var engImgLink = "https://image.flaticon.com/icons/png/128/206/206592.png";

    var imgBtnSel = $('#imgBtnSel');
    var imgBtnGr = $('#imgBtnGr');
    var imgBtnEng = $('#imgBtnEng');

    var imgNavSel = $('#imgNavSel');
    var imgNavGr = $('#imgNavGr');
    var imgNavEng = $('#imgNavEng');

    var spanNavSel = $('#lanNavSel');
    var spanBtnSel = $('#lanBtnSel');

    imgBtnSel.attr("src", grImgLink);
    imgBtnGr.attr("src", grImgLink);
    imgBtnEng.attr("src", engImgLink);

    imgNavSel.attr("src", grImgLink);
    imgNavGr.attr("src", grImgLink);
    imgNavEng.attr("src", engImgLink);

    $(".language").on("click", function (event) {
        var currentId = $(this).attr('id');

        if (currentId == "navGr") {
            imgNavSel.attr("src", grImgLink);
            spanNavSel.text("ΕΛΛ");
        } else if (currentId == "navEng") {
            imgNavSel.attr("src", engImgLink);
            spanNavSel.text("ENG");
        }

        if (currentId == "btnGr") {
            imgBtnSel.attr("src", grImgLink);
            spanBtnSel.text("ΕΛΛ");
        } else if (currentId == "btnEng") {
            imgBtnSel.attr("src", engImgLink);
            spanBtnSel.text("ENG");
        }

    });

    //employee search
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    $("#insured-fields").hide();
    $('#_submit-register-btn').prop('disabled', true);

    var radioButtons = document.getElementsByName("role");

    $('#certifications_radio input').on('change', function () {

        if (radioButtons[0].checked) {
            $("#insured-fields").slideDown("slow");
            $('#_submit-register-btn').prop('disabled', false);

        } else if (radioButtons[1].checked) {
            $("#insured-fields").slideUp("slow");
            $('#_submit-register-btn').prop('disabled', false);
        }

    });

    //clickable rows
    $(".clickable-row").click(function () {
        var form = jQuery(this).find("form");
        console.log(form);
        form.submit();
    });

    $("#printButton").click(function(){
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div.printableArea").printArea( options );
    });

});
