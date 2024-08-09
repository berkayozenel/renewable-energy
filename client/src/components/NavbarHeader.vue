<template>
    <div class="container">
      <header :class="['navbar', { 'scrolled': isScrolled }]">
        <router-link to="/">
          <img :src="isScrolled ? 'src/assets/logo.svg' : 'src/assets/logo-white.svg'" alt="Renova Energie Logo" class="logo" />
        </router-link>
        <nav>
          <ul class="nav-links" :class="{ 'scrolled-links': isScrolled }">
            <li>
              <router-link to="/">Startseite</router-link>
            </li>
            <li>
                <router-link to="/ladestation">Ladestation</router-link>
            </li>
            <li>
              <router-link to="/energielosungen">Energielösungen</router-link>
            </li>
            <li>
              <router-link to="/preisgestaltung">Preisgestaltung</router-link>
            </li>
            <li>
              <router-link to="/uber-uns">Über uns</router-link>
            </li>
            <li>
              <router-link to="/kontakt">Kontaktieren Sie Uns</router-link>
            </li>
          </ul>
          <div class="hamburger" @click="toggleMenu">
            <span class="line" :style="isMenuOpen ? 'background-color: #e2e2e2': ''"></span>
            <span class="line" :style="isMenuOpen ? 'background-color: #e2e2e2': ''"></span>
            <span class="line" :style="isMenuOpen ? 'background-color: #e2e2e2': ''"></span>
          </div>
        </nav>
      </header>
      <nav v-if="isMenuOpen" class="open-menu">
        <ul class="nav-open-links">
          <li>
            <router-link to="/">Startseite</router-link>
          </li>
          <li>
            <router-link to="/ladestation">Ladestation</router-link>
          </li>
          <li>
            <router-link to="/energielosungen">Energielösungen</router-link>
          </li>
          <li>
            <router-link to="/preisgestaltung">Preisgestaltung</router-link>
          </li>
          <li>
            <router-link to="/uber-uns">Über uns</router-link>
          </li>
          <li>
            <router-link to="/kontakt">Kontaktieren Sie Uns</router-link>
          </li>
        </ul>
      </nav>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isMenuOpen: false,
        isScrolled: false,
      };
    },
    methods: {
      toggleMenu() {
        this.isMenuOpen = !this.isMenuOpen;
      },
      handleScroll() {
        const scrollTop = window.scrollY || document.documentElement.scrollTop;
        this.isScrolled = scrollTop > window.innerHeight * 0.8;
      },
      logo(isScrolled){
        return isScrolled ? '../assets/logo.svg': '../assets/logo-white.svg'
      }
    },
    mounted() {
      window.addEventListener('scroll', this.handleScroll);
    },
    beforeDestroy() {
      window.removeEventListener('scroll', this.handleScroll);
    }
  };
  </script>
  
  <style scoped>
  .navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 3% 5%;
    height: 70px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: transparent;
    color: #e2e2e2;
    z-index: 999;
    transition: background-color 0.3s ease, color 0.3s ease;
  }
  
  .navbar.scrolled {
    background-color: white;
    color: #437D1F;
  }
  
  .logo {
    width: 100%;
    height: 75px;
  }
  
  .nav-links {
    display: flex;
    list-style: none;
  }
  
  .nav-links.scrolled-links a {
    color: #437D1F;
  }
  
  .nav-links li {
    margin: 0 2rem;
  }
  
  .nav-links a {
    color: inherit;
    text-decoration: none;
    position: relative;
  }
  
  .nav-links a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -4px;
    left: 0;
    background-color: #437D1F;
    transition: width 0.3s ease-in-out;
  }
  
  .nav-links a:hover::after {
    width: 100%;
  }
  
  .hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
  }
  
  .hamburger .line {
    width: 30px;
    height: 2px;
    background-color: #437D1F;
    margin: 4px 0;
    border-radius: 5px;
  }
  .bg-white{
    background-color: #e2e2e2;
  }
  .hamburger:hover {
    transform: rotate(180deg);
    transition: transform 0.5s ease-in-out;
  }
  
  .open-menu {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #437D1F;
    padding: 20% 5% 5% 5%;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 998;
    transform: translateY(-100%);
    animation: slide-down .5s ease-in forwards;
  }
  
  @keyframes slide-down {
    from {
      transform: translateY(-100%);
      opacity: 0;
    }
    to {
      transform: translateY(0);
      opacity: 1;
    }
  }
  
  .nav-open-links {
    list-style-type: none;
  }
  
  .nav-open-links li {
    margin: 50% 0;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .nav-open-links li a {
    color: #fff;
    text-decoration: none;
  }
  
  /* Responsive */
  
  @media (max-width: 1024px) {
    .logo {
      width: 80%;
    }
    .navbar {
      padding: 5% 5%;
    }
    .nav-links {
      display: none;
      flex-direction: column;
      width: 100%;
    }
    .hamburger {
      display: flex;
    }
  }
  
  @media (max-width: 768px) {
    .logo {
      width: 70%;
    }
    .navbar {
      padding: 5% 5%;
    }
    .nav-links {
      display: none;
      flex-direction: column;
      width: 100%;
    }
    .hamburger {
      display: flex;
    }
  }
  
  @media (max-width: 480px) {
    .logo {
      width: 70%;
    }
  
    .navbar {
      padding: 5% 5%;
    }
    .nav-links {
      display: none;
      flex-direction: column;
      width: 100%;
    }
    .hamburger {
      display: flex;
    }
  }
  </style>