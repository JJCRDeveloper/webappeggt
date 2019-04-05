const dbRef= firebase.database().ref();

const queryOneRef=dbRef.child('VotingTable').orderByChild('status').equalTo('activo');
var totalVotes= 0;
var pendingVotes=0;
var registeredCitizens=0;
console.log("Total de votos emitidos: ");
console.log(totalVotes);
// ---- Drawing the Pie Chart("Grafica General")----
queryOneRef.once('value', function(snapshot) {
    snapshot.forEach(function(childSnapshot) {
        var childKey = childSnapshot.key;
        var childData = childSnapshot.val();
        var cantidadVotos=parseInt(childData.votes);
        var empadronados=parseInt(childData.registered);
        
        registeredCitizens=registeredCitizens+empadronados;
        totalVotes=totalVotes+cantidadVotos;
        pendingVotes=registeredCitizens-totalVotes;
        
        console.log(childKey);
        console.log(childData.votes);
        console.log(totalVotes);
        
    });
    // Draw Pie Chart using Google charts  
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);   
}); 

//----Fill the <select> Centro
const queryRef2=dbRef.child('VotingCenter').orderByChild('status').equalTo('activo');
var select = document.getElementById("inputGroupSelect04");

queryRef2.once('value', function(snapshot) {
    snapshot.forEach(function(childSnapshot) {
        var childKey = childSnapshot.key;
        var childData = childSnapshot.val();
        var textOption= childKey+". "+childData.name; 
        select.options[select.options.length] = new Option(textOption, childKey);
        console.log("centro: "+childKey);
    });   
}); 

//-----Drawing the Pie Chart("Grafica por Centro")

var totalVotesxCentro= 0;
var pendingVotesxCentro=0;
var registeredxCentro=0;
var titleGraficaxCentro="";
function graficaxCentro(){

    var idCentro=document.getElementById("inputGroupSelect04").value; 
    titleGraficaxCentro=document.getElementById("inputGroupSelect04").text;
    //alert(idCentro);
    var queryRef3=dbRef.child('VotingTable').orderByChild('status_idVotingCenter').equalTo('activo_'+idCentro);
    queryRef3.once('value', function(snapshot) {
        snapshot.forEach(function(childSnapshot) {
            var childKey = childSnapshot.key;
            var childData = childSnapshot.val();
            var cantidadVotos=parseInt(childData.votes);
            var empadronados=parseInt(childData.registered);
            
            registeredxCentro=registeredxCentro+empadronados;
            totalVotesxCentro=totalVotesxCentro+cantidadVotos;
            pendingVotesxCentro=registeredxCentro-totalVotesxCentro;
            
            console.log(childKey);
            console.log(childData.votes);
            console.log(totalVotes);
            
        });
        // Draw Pie Chart using Google charts  
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChartByCentro);   
    }); 

    

}





//console.log("Eureka he descubierto algo bueno: "+total)
