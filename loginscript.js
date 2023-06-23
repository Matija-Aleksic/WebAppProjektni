$(document).ready(function() {
  $('.login-form').submit(function(event) {
    var username = $('#username').val();
    var password = $('#password').val();

    if (username === '' || password === '') {
      event.preventDefault();
      $('#error-msg').text('Please fill in all fields.');
    }
  });

  $('.registration-form').submit(function(event) {
    var registrationUsername = $('#registration-username').val();
    var registrationPassword = $('#registration-password').val();

    if (registrationUsername === '' || registrationPassword === '') {
      event.preventDefault();
      $('#error-msg').text('Please fill in all fields.');
    }
  });
});

function toggleRegistrationForm() {
  var registrationForm = document.querySelector(".registration-form");
  registrationForm.style.display = registrationForm.style.display === "none" ? "block" : "none";
}