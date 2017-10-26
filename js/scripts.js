var GAMEOFLIFE = GAMEOFLIFE || {};
var iteration = 1;
GAMEOFLIFE.init = function(){

    setInterval(function(){GAMEOFLIFE.ajaxCall()}, 2000 );

};

GAMEOFLIFE.ajaxCall = function(){
    iteration = iteration+1;
    console.log("called");
    $.ajax({
        method: 'POST',
        url: "createCells.php",
        data: {iteration : iteration},
        contentType: "text/html",
        success: function (resp) {
            $('#cells').html(resp);
        }
    });
}

$(document).ready(function(){
    GAMEOFLIFE.init();
});

