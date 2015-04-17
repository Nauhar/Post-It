$(document).ready(function(){
    var g_updateInterval = 3000;

    var urlevenement = 'http://localhost:8888/index.php/messages/getmessages/gala';

    alert('ok');

    alert(urlevenement);



    function updateMsg() {
        console.log("dans updateMsg");
        $.post(urlevenement, function(data) {
            console.log(data);

            var json = $.parseJSON(data);
            var champ = 1;

            for (var i = json.length - 1; i >= 0; i--) {
                var msg = "<p>"+json[i].Message+"<br />PAR "+json[i].Auteur.toUpperCase()+"</p>";

                console.log(champ);
                document.getElementById("M"+champ).innerHTML = msg;

                champ +=1;
            }
        });
        setTimeout(updateLoop, g_updateInterval);
    }

    function updateLoop() {
        console.log("dans updateLoop");
        updateMsg();
    }

    $(function() {
        updateLoop();
        console.log("dans function()");
    });


});