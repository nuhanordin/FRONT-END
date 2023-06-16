var firebaseConfig = {
    apiKey: "AIzaSyC-OC5KRv21MOWZZBNis15MHDWR4Inea3M",
    authDomain: "mars-da149.firebaseapp.com",
    databaseURL: "https://mars-da149-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "mars-da149",
    storageBucket: "mars-da149.appspot.com",
    messagingSenderId: "437341298914",
    appId: "1:437341298914:web:478f8c0ccc1d93cfc5bebb",
    measurementId: "G-RKKR7JW0J1"
  };
  firebase.initializeApp(firebaseConfig);

 //set database variable
 var database = firebase.database()

 function save() {
    var email = document.getElementById('email').value
    var username = document.getElementById('username').value
    var password = document.getElementById('password').value
    var describe = document.getElementById('describe').value

    database.ref('users/' + username).set({
        email: email,
        username: username,
        password: password,
        describe: describe
    })
    alert('Data successfully saved!')
 };