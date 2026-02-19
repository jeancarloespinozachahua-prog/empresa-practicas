// Posicionamiento aleatorio de estrellas decorativas
document.querySelectorAll('.star').forEach(star => {
  const randomX = Math.random() * window.innerWidth;
  const randomY = Math.random() * window.innerHeight;
  star.style.left = `${randomX}px`;
  star.style.top = `${randomY}px`;
});

// Animación de atención en botón de WhatsApp
const whatsappBtn = document.querySelector('.whatsapp-btn');
setInterval(() => {
  whatsappBtn.classList.toggle('pulse');
}, 3000); // ← aquí estaba el error: faltaba el tiempo en milisegundos
