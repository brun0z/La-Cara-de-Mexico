var config = {

  apiKey: "AIzaSyCw1b2DkiAKiT4yAQZiN16BbZL67bO5fE8",

  authDomain: "la-cara-de-mexico.firebaseapp.com",

  databaseURL: "https://la-cara-de-mexico-default-rtdb.firebaseio.com/",

  projectId: "la-cara-de-mexico",

  storageBucket: "la-cara-de-mexico.appspot.com",

  messagingSenderId: "4004895578",

  appId: "1:4004895578:web:4da671517af2db62c13163"

};

firebase.initializeApp(config);

// Reference messages collection
var messagesRef = firebase.database().ref('messages');

// Listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm);

// Submit form
function submitForm(e){
  e.preventDefault();

  // Get values
  var name = getInputVal('name');
  var email = getInputVal('email');
  var phone = getInputVal('phone');
  var message = getInputVal('message');

  // Save message
  saveMessage(name, email, phone, message);

  // Show alert
  document.querySelector('.alert').style.display = 'block';

  // Hide alert after 3 seconds
  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },3000);

  // Clear form
  document.getElementById('contactForm').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}

// Save message to firebase
function saveMessage(name, email, phone, message){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    name: name,
    email:email,
    phone:phone,
    message:message
  });
}