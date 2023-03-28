const lordicon = document.querySelector('#lordicon-container lord-icon');

// Set an initial flag to track the click count
let clickCount = 0;

// Add a click event listener to the lord-icon element
lordicon.addEventListener('click', function() {
  // Increment the click count
  clickCount++;

  // Change the primary color to white and the secondary color to black if the click count is even, or to the initial colors if it's odd
  const primaryColor = clickCount % 2 === 0 ? '#FFFFFF' : '#121331';
  const secondaryColor = clickCount % 2 === 0 ? '#000000' : '#121331';
  lordicon.setAttribute('colors', `primary:${primaryColor},secondary:${secondaryColor}`);

  // Change the state to morph-2 if the click count is even, or to morph-1 if it's odd, except for the second click where the animation state should stay the same
  let state = clickCount % 2 === 0 ? 'morph-2' : 'morph-1';
  if (clickCount === 2) {
    state = 'morph-1';
    lordicon.setAttribute('colors', 'primary:#121331,secondary:#121331');
  }
  lordicon.setAttribute('state', state);
});
