// Lazyload
const lazyLoadInstance = new LazyLoad({ threshold: 800 });

// This section toggles a class on the header based on scroll position
const header = document.querySelector(".js-header");

function scrollActive() {
    const scrollPosition = window.scrollY;
    if (scrollPosition > 40) {
        header.classList.add("header-active");
    } else {
        header.classList.remove("header-active");
    }
}

function handleScroll() {
    scrollActive();
}

scrollActive();

window.addEventListener("scroll", handleScroll);

// This section handles the responsive menu toggle functionality
const navToggle = document.querySelector(".nav-toggle");
const nav = document.querySelector(".nav-primary");
const bodyClass = document.body;
const navOverlay = document.querySelector(".nav-overlay");

function doToggle(e) {
    e.preventDefault();
    bodyClass.classList.toggle("menu-triggered");
}

function removeClass(e) {
    bodyClass.classList.remove("menu-triggered");
}

function handleNavLinkClick(event) {
    allNavLinks.forEach(elem => elem.classList.remove("active-link"));
    event.currentTarget.classList.add("active-link");
}

for (const link of nav.querySelectorAll("a")) {
    link.addEventListener("click", function(e) {
        removeClass(e);
    });
}

navToggle.addEventListener("click", e => doToggle(e));
navOverlay.addEventListener("click", e => doToggle(e));

// Handling the behavior of navigation links when clicked
const navLinks = document.querySelectorAll(".js-nav-link");
const allNavLinks = document.querySelectorAll(".js-nav a");

navLinks.forEach(link => {
    link.addEventListener("click", handleNavLinkClick);
});

// Adding a 'active-link' class to the active navigation link based on the current URL
allNavLinks.forEach(link => {
    if (link.href === window.location.href) {
        link.classList.add("active-link");
    }
});

// Function for smooth scrolling to a target element
function smoothScroll(target, offset, duration) {
    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;

    let startTime = null;

    requestAnimationFrame(animate.bind(null, startTime, startPosition, distance, duration));
}

function animate(startTime, startPosition, distance, duration, currentTime) {
    if (startTime === null) {
        startTime = currentTime;
    }
    const timeElapsed = currentTime - startTime;
    const run = ease(timeElapsed, startPosition, distance, duration);
    window.scrollTo(0, run);
    if (timeElapsed < duration) {
        requestAnimationFrame(animate.bind(null, startTime, startPosition, distance, duration));
    }
}

function ease(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
}

function getCurrentHeaderHeight() {
    return header.offsetHeight;
}

function updateHeaderHeight() {
    headerHeight = getCurrentHeaderHeight();
}
updateHeaderHeight();
window.addEventListener('resize', updateHeaderHeight);

// Select all anchor elements with href starting with '#'
const anchorLinks = document.querySelectorAll('a[href^="#"]');
anchorLinks.forEach(anchor => {
    anchor.addEventListener('click', e => {
        e.preventDefault();
        const targetId = anchor.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            const targetOffset = getCurrentHeaderHeight();
            smoothScroll(targetElement, targetOffset, 1000);
        }
    });
});


// Registering GSAP ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);

// Selecting all elements with the class 'js-gsap-scrolltrigger-wrapper'
const wrappers = document.querySelectorAll('.js-gsap-scrolltrigger-wrapper');

// Looping through each wrapper element
wrappers.forEach((wrapper) => {
  // Selecting child elements within the current wrapper
  const elements = wrapper.querySelectorAll('.js-gsap-scrolltrigger-up');
  const headerGsap = wrapper.querySelector('.js-gsap-header');
  const footerGsap = wrapper.querySelector('.js-gsap-footer');

  // Setting initial properties for elements using GSAP
  gsap.set(elements, {
    opacity: 0,
    y: 50,
  });

  // Setting initial properties for the header element
  gsap.set(headerGsap, {
    opacity: 0,
    y: 0,
  });

  // Setting initial properties for the header element
  gsap.set(footerGsap, {
    opacity: 0,
    y: 0,
  });

  // Creating a ScrollTrigger for the current wrapper
  ScrollTrigger.create({
    trigger: wrapper, // Element that triggers the ScrollTrigger
    start: 'top 85%', // Start position for the trigger
    end: 'top 85%', // End position for the trigger
    toggleActions: 'play none', // Actions when the trigger enters or exits the defined range
    onEnter: () => { // Function to execute when the trigger enters the defined range
      // Animating elements when they enter the trigger range
      elements.forEach((element, index) => {
        gsap.to(element, {
          opacity: 1,
          y: 0,
          ease: 'linear',
          duration: 0.5,
          delay: index * 0.3, // Adding delay to each element for sequential animation
        });
      });
    },
  });
});

const scrollers = document.querySelectorAll(".scroller");

// If a user hasn't opted in for recuded motion, then we add the animation
if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
  addAnimation();
}

function addAnimation() {
  scrollers.forEach((scroller) => {
    // add data-animated="true" to every `.scroller` on the page
    scroller.setAttribute("data-animated", true);

    // Make an array from the elements within `.scroller-inner`
    const scrollerInner = scroller.querySelector(".scroller__inner");
    const scrollerContent = Array.from(scrollerInner.children);

    // For each item in the array, clone it
    // add aria-hidden to it
    // add it into the `.scroller-inner`
    scrollerContent.forEach((item) => {
      const duplicatedItem = item.cloneNode(true);
      duplicatedItem.setAttribute("aria-hidden", true);
      scrollerInner.appendChild(duplicatedItem);
    });
  });
}