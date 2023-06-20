document.querySelector('.login-form').addEventListener('submit', function(event) {
    event.preventDefault();
  
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var errorMsg = document.getElementById('error-msg');
  
    if (username.length === 0 || password.length === 0) {
      errorMsg.textContent = "Please fill in all fields.";
    } else if (username.length < 5 || password.length < 5) {
      errorMsg.textContent = "Username and password must be at least 5 characters long.";
    } else {
      // Validation passed, perform login logic here
      // For this example, let's just display a success message
      alert("Login successful!");
    }
  });