var user = null;

var config = {
  apiKey: "AIzaSyD2H2pkMY33ikhUZiD8NPxZbAqq5AQot5o",
  authDomain: "moveon-f8c06.firebaseapp.com",
  databaseURL: "https://moveon-f8c06.firebaseio.com",
  projectId: "moveon-f8c06",
  storageBucket: "moveon-f8c06.appspot.com",
  messagingSenderId: "435549598206"
};
firebase.initializeApp(config);

var database = firebase.database;

let btnIniciar = document.getElementById("inicio");

if(btnIniciar) {
  btnIniciar.addEventListener("click", function() {

  var provider = new firebase.auth.GoogleAuthProvider();

  firebase.auth().signInWithPopup(provider)
    .then(result => {
     console.log(result.user);
     user = result.user;
     loginOn(user);
    })
    .catch(error => console.log(`Error ${error.conde} Auth: ${error.message}`)).bind;
  })
}

function loginOn({displayName, photoURL}) {
  var login = document.getElementById("inicio");
  login.innerHTML = `<img src="${photoURL}" class="circle" width="25px" /> ${displayName}`;
  document.getElementById("registrar").style.opacity = "0";
}