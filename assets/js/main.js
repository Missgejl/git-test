document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('#contact-form');
  if (form) form.addEventListener('submit', (event) => {
    event.preventDefault();
    document.querySelector('#form-message').textContent = 'Tak for din besked. Formularen er en demo og sender ikke data endnu.';
  });
});
