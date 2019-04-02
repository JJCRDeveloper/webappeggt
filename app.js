function login(){
    var email=document.getElementById('inputEmail').value;
    var passw=document.getElementById('inputPassword').value;

    firebase.auth().signInWithEmailAndPassword(email, passw).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorMessage);
        // ...
      });
}

function authStateObserver(){
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          // User is signed in.

          var displayName = user.displayName;
          var email = user.email;
          var emailVerified = user.emailVerified;
          var photoURL = user.photoURL;
          var isAnonymous = user.isAnonymous;
          var uid = user.uid;
          var providerData = user.providerData;

          location.href="index.html";
          console.log("Usuario conectado: "+email);
          // ...
        } else {
          // User is signed out.
          // ...
          console.log("No existe usuario autenticado");

        }
      });
}

authStateObserver();
