<template>
  <header class="header-container">
    <h1 class="typing-animation">
      Solarlösungen und Ladestationen für Elektrofahrzeuge für die Zukunft.
    </h1>
    <router-link to="/energielosungen"><i class="fa-solid fa-arrow-pointer"></i>Energie-Lösungen hier entdecken. </router-link>
  </header>
</template>

<style scoped>
.header-container {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: #FFF;
  animation: fadeInBlur 1s forwards;
  text-align: center;
  padding: 0 20px;
}

.header-container::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('https://renovaenergie.ch/storage/header-background.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  filter: blur(1px);
  opacity: 1;
  z-index: -2;
}

a {
  cursor: pointer;
  background: transparent;
  padding: 9px 30px;
  border: 2px solid #437D1F;
  border-radius: 5px;
  margin-top: 5%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1rem;
  color: #437D1F;
  text-decoration: none;
  transition: all .4s ease;
}

a i {
  font-size: 1.2rem;
  margin-right: 10px;
}

a:hover {
  background: #437D1F;
  color: #FFF;
}

.header-container::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: -1;
}

.typing-animation {
  font-size: 2rem;
  overflow: hidden;
  border-right: .15em solid #FFF;
  white-space: normal;
  margin: 0 auto;
  letter-spacing: .05em;
  animation: typing 4s steps(40, end) forwards, blink-caret .75s step-end infinite;
  font-weight: 400;
}

@keyframes typing {
  from { max-width: 0 }
  to { max-width: 100% }
}

@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: #FFF }
}

/* Medya sorguları */
@media (max-width: 768px) {
  .header-container {
    padding: 0 10px;
  }

  .typing-animation {
    font-size: 1.5rem;
  }

  a {
    padding: 8px 20px;
    font-size: 0.9rem;
  }
}

@media (max-width: 480px) {
  .typing-animation {
    font-size: 1.2rem;
  }

  a {
    padding: 7px 15px;
    font-size: 0.8rem;
  }
}
</style>

<script>
export default {
  mounted() {
    // Animasyon tamamlandığında sınıf ekle
    setTimeout(() => {
      const typingElement = document.querySelector('.typing-animation');
      typingElement.style.animation = 'none'; // Animasyonu durdur
      typingElement.style.borderRight = 'none'; // İmleci gizle
    }, 4000); // `typing` animasyon süresi kadar süre bekle
  }
}
</script>