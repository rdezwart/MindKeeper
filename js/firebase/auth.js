firebase.auth().onAuthStateChanged(function (user) {
    window.user = user;

    console.log(user);
});

document.addEventListener("DOMContentLoaded", function (event) {

    document.querySelector('#signIn').addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        logIn("signIn");

    });

    document.querySelector('#signUp').addEventListener('click', function (e) {
        e.preventDefault()
        e.stopPropagation;
        logIn("signUp");
    });

    document.querySelector('#signOut').addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        firebase.auth().signOut();
    });
});


function logIn(signType) {
    console.log("Logging in...");

    var email = document.querySelector('#email').value;
    var password = document.querySelector('#password').value;

    if (signType === "signIn") {
        firebase.auth().signInWithEmailAndPassword(email, password).catch(function (error) {
            var errorCode = error.code;
            var errorMessage = error.message;
            console.log(errorMessage);
        });
    } else if (signType === "signUp") {
        firebase.auth().createUserWithEmailAndPassword(email, password).catch(function (error) {
            var errorCode = error.code;
            var errorMessage = error.message;
            console.log(errorMessage);
        });
    }
}
