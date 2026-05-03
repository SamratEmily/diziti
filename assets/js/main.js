/**
 * Diziti Theme - Main JavaScript
 *
 * Handles: header scroll, mobile menu, scroll reveal animations, counter animation
 *
 * @package Diziti
 */

(function () {
  'use strict';

  /* --------------------------
     Header scroll effect
     -------------------------- */
  const header = document.getElementById('dz-header');
  let lastScroll = 0;

  function handleHeaderScroll() {
    const scrollY = window.scrollY;
    if (scrollY > 60) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
    lastScroll = scrollY;
  }

  window.addEventListener('scroll', handleHeaderScroll, { passive: true });

  /* --------------------------
     Mobile menu toggle
     -------------------------- */
  const menuToggle = document.getElementById('dz-menu-toggle');
  const nav = document.getElementById('dz-nav');

  if (menuToggle && nav) {
    menuToggle.addEventListener('click', function () {
      nav.classList.toggle('active');
      const isOpen = nav.classList.contains('active');
      menuToggle.setAttribute('aria-expanded', isOpen);
    });

    // Close mobile menu on link click
    nav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        nav.classList.remove('active');
        menuToggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /* --------------------------
     Smooth scroll for anchor links
     -------------------------- */
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        const headerHeight = header ? header.offsetHeight : 0;
        const targetPos = target.getBoundingClientRect().top + window.scrollY - headerHeight;
        window.scrollTo({ top: targetPos, behavior: 'smooth' });
      }
    });
  });

  /* --------------------------
     Scroll reveal animations
     -------------------------- */
  const revealElements = document.querySelectorAll('.dz-reveal');

  const revealObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          revealObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
  );

  revealElements.forEach(function (el, index) {
    el.style.transitionDelay = (index % 3) * 0.12 + 's';
    revealObserver.observe(el);
  });

  /* --------------------------
     Counter animation
     -------------------------- */
  const counters = document.querySelectorAll('[data-count]');

  const counterObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.5 }
  );

  counters.forEach(function (counter) {
    counterObserver.observe(counter);
  });

  function animateCounter(el) {
    const target = parseInt(el.getAttribute('data-count'), 10);
    const duration = 2000;
    const startTime = performance.now();

    function easeOutCubic(t) {
      return 1 - Math.pow(1 - t, 3);
    }

    function updateCounter(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const easedProgress = easeOutCubic(progress);
      const currentValue = Math.floor(easedProgress * target);

      el.textContent = currentValue + '+';

      if (progress < 1) {
        requestAnimationFrame(updateCounter);
      } else {
        el.textContent = target + '+';
      }
    }

    requestAnimationFrame(updateCounter);
  }

  /* --------------------------
     Active nav highlighting
     -------------------------- */
  const sections = document.querySelectorAll('section[id]');

  function highlightNav() {
    const scrollPos = window.scrollY + 150;
    sections.forEach(function (section) {
      const top = section.offsetTop;
      const height = section.offsetHeight;
      const id = section.getAttribute('id');
      const navLink = document.querySelector('.dz-nav a[href="#' + id + '"]');
      if (navLink) {
        if (scrollPos >= top && scrollPos < top + height) {
          navLink.style.color = '#fff';
        } else {
          navLink.style.color = '';
        }
      }
    });
  }

  window.addEventListener('scroll', highlightNav, { passive: true });

})();
