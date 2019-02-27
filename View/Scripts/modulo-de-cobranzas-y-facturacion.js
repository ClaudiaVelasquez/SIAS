

$(document).ready(function(){

    //$('select').formSelect();
    
    /* ----------------------------- */     

    // $('.sidenav').sidenav();    

    // /* Habilitar tabs */

    // $('.tabs').tabs();

    /* ----------------------------- */ 
    //GetToken();

    $("#btn").click(function(){

            // alert("winder");

            // var clientId = "client";
            // var clientSecret = "secret";

            // var authorizationBasic = window.btoa(clientId + ':' + clientSecret);

            // // Post a user
            // var url = "https://ose-gw1.efact.pe:443/api-efact-ose/oauth/token";

            // var data = {};
            // data.username = "20167858067";
            // data.password  = "cee8c5a93de87a307472496b67655f6e1a02751ef40e50bac6c84bfab9388bc1";
            // data.grant_type  = "password";
            // var json = JSON.stringify(data);

            // var xhr = new XMLHttpRequest();
            // xhr.open("POST", url, true);
            // //xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            // xhr.setRequestHeader('Authorization', 'Basic ' + authorizationBasic);
            // xhr.setRequestHeader('Content-type','application/json; charset=utf-8');
            // xhr.onload = function () {
            //     var users = JSON.parse(xhr.responseText);
            //     if (xhr.readyState == 4 && xhr.status == "201") {
            //         console.table(users);
            //     } else {
            //         console.error(users);
            //     }
            // }
            // xhr.send(json);

            GetToken();

    });



    
 });









 function GetToken() {

    var clientId = "client";
    var clientSecret = "secret";

    var authorizationBasic = window.btoa(clientId + ':' + clientSecret);
    //alert(authorizationBasic);
    var au = 'Basic ' + authorizationBasic;
    $.ajax({
        type: 'POST',
        headers:{
            'Content-Type':'application/x-www-form-urlencoded',
            'Authorization': 'Basic ' + authorizationBasic
            //'Access-Control-Allow-Origin':'*'
        },
        url: "https://ose-gw1.efact.pe:443/api-efact-ose/oauth/token",
        data: { username: '20167858067', password: 'cee8c5a93de87a307472496b67655f6e1a02751ef40e50bac6c84bfab9388bc1', grant_type: 'password' },
        //dataType: "json",
        //contentType: 'application/x-www-form-urlencoded; charset=utf-8',
        
        xhrFields:{
            withCredentials:true
        },
        crossDomain:true,

        // beforeSend: function (xhr){ 
        //     xhr.setRequestHeader('Authorization', au); 
        // },
        success: function (result) {
        var token = result;
        console.log(token);
        },
        //complete: function (jqXHR, textStatus) {
        //},
        error: function (req, status, error) {
        //alert($.parseJSON(error).toString());
        console.log(req);
        }
    });
     
 }

 // https://stackoverflow.com/questions/35588699/response-to-preflight-request-doesnt-pass-access-control-check

 // https://gist.github.com/EtienneR/2f3ab345df502bd3d13e

