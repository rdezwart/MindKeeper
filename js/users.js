// Register
firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
    var errorCode = error.code;
    var errorMessage = error.message;
});

// SignIn
firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
    var errorCode = error.code;
    var errorMessage = error.message;
});

// SignOut
firebase.auth().signOut().then(function() {
    // success
}).catch(function(error) {
    // error
})