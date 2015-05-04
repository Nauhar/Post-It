$(document).ready(function(){

    function valider(id) {

        var validermessage = 'http://localhost:8888/index.php/messages/validermessage/'+arg;
        alert("POUEEEETTTTTT");


        $.post(validermessage, {p: id}, function(data) {
//		window.location = 'validator.php?jnm=nancy54&'+new Date().getTime();
            $("#post-" + id).slideUp();
        });
    }




/*    $.post(urlevenement, function(data) {
        console.log(data);

        var json = $.parseJSON(data);
        var champ = 1;

        for (var i = json.length - 1; i >= 0; i--) {
            var msg = "";
            if(json[i].URLPhoto !== "")
            {
                msg = "<img src='"+json[i].URLPhoto+"' style='max-width:300px; max-height:300px;'";
            }


            msg = msg+"<br /><p>"+json[i].Message+"<br />PAR "+json[i].Auteur.toUpperCase()+"</p>";

            //console.log(i);
            document.getElementById("M"+i).innerHTML = msg;

            champ +=1;
        }
    });*/





});