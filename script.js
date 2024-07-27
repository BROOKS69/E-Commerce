// Get the navigation menu and menu icon elements
const navMenu = document.querySelector('.nav-links');
const menuIcon = document.querySelector('.bx-cart');

// Add an event listener to the menu icon to toggle the navigation menu
menuIcon.addEventListener('click', () => {
  navMenu.classList.toggle('active');
});

// Add an event listener to the window to detect screen size changes
window.addEventListener('resize', () => {
  // Check if the screen width is less than or equal to 768px (tablet size)
  if (window.innerWidth <= 768) {
    // Add the 'active' class to the navigation menu to show it
    navMenu.classList.add('active');
  } else {
    // Remove the 'active' class from the navigation menu to hide it
    navMenu.classList.remove('active');
  }
});

// Add an event listener to the navigation menu links to close the menu when clicked
navMenu.addEventListener('click', (e) => {
  if (e.target.tagName === 'A') {
    navMenu.classList.remove('active');
  }
});


// Get all product image elements
const productImages = document.querySelectorAll('.product-item img');

// Set the desired radius for the images
const radius = 10; // adjust this value to change the radius

// Loop through each product image
productImages.forEach((image) => {
  // Get the parent element of the image (the product card)
  const card = image.parentNode;

  // Set the image to be a circle with the desired radius
  image.style.borderRadius = `${radius}px`;
  image.style.width = '100%';
  image.style.height = '100%';
  image.style.objectFit = 'cover';

  // Set the card to have a matching radius
  card.style.borderRadius = `${radius}px`;
  card.style.overflow = 'hidden';
});


// Get the login form elements
const loginForm = document.getElementById('login-form');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');

// Add an event listener to the login form
loginForm.addEventListener('submit', (e) => {
  e.preventDefault();

  // Get the user's input
  const username = usernameInput.value;
  const password = passwordInput.value;

  // Validate the user's input
  if (username === '' || password === '') {
    alert('Please enter both username and password');
    return;
  }

  // Send a request to the PHP authenticator script
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'authenticator.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.send(`username=${username}&password=${password}`);

  // Handle the response from the PHP script
  xhr.onload = () => {
    if (xhr.status === 200) {
      const response = xhr.responseText;
      if (response === 'success') {
        // Login successful, redirect to dashboard
        window.location.href = 'dashboard.php';
      } else {
        alert('Invalid username or password');
      }
    } else {
      alert('Error occurred during login');
    }
  };
});