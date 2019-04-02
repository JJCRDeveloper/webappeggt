const dbRef= firebase.database().ref();

const queryOneRef=dbRef.child('VotingTable').orderByChild('status').equalTo('activo');
var totalVotes= 0;
var pendingVotes=0;
var registeredCitizens=0;

console.log("Total de votos emitidos: ");
console.log(totalVotes);
    
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
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        
    });
    
    
    
}); 







//console.log("Eureka he descubierto algo bueno: "+total)
