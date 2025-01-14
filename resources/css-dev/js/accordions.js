// ### Accordion Script ###
let animationInProgress = false;
// slideUp function
function slideUp(target, parent, duration = 300) {

    if(target) {
        animationInProgress = true;
        target.style.height = target.offsetHeight + 'px';
        parent.style.pointerEvents = "none";

        window.setTimeout( () => {
            target.style.overflow = 'hidden';
            target.style.boxSizing = 'border-box';
            target.style.transitionProperty = "height, margin, padding";
            target.style.transitionDuration = duration + 'ms';
            target.style.paddingTop = 0;
            target.style.paddingBottom = 0;
            target.style.marginTop = 0;
            target.style.marginBottom = 0;
            target.style.height = 0;
        }, 100);
        window.setTimeout( () => {
            target.style.display = 'none';
            target.style.removeProperty('height');
            target.style.removeProperty('padding-top');
            target.style.removeProperty('padding-bottom');
            target.style.removeProperty('margin-top');
            target.style.removeProperty('margin-bottom');
            target.style.removeProperty('transition-duration');
            target.style.removeProperty('transition-property');
            parent.style.removeProperty('pointer-events');
            animationInProgress = false;
        }, duration + 100);
    }

}
// slideDown function
function slideDown(target, parent, duration = 300){
    if(target) {
        animationInProgress = true;
        target.style.removeProperty('display');
        parent.style.pointerevents = "none";
        let display = window.getComputedStyle(target).display;

        if (display === 'none')
            display = 'block';

        target.style.display = display;
        let height = target.offsetHeight;
        target.style.height = 0;
        target.style.paddingTop = 0;
        target.style.paddingBottom = 0;
        target.style.marginTop = 0;
        target.style.marginBottom = 0;

        window.setTimeout( () => {
            target.style.overflow = 'hidden';
            target.style.boxSizing = 'border-box';
            target.style.transitionProperty = "height, margin, padding";
            target.style.transitionDuration = duration + 'ms';
            target.style.height = height + 'px';
            target.style.removeProperty('padding-top');
            target.style.removeProperty('padding-bottom');
            target.style.removeProperty('margin-top');
            target.style.removeProperty('margin-bottom');
        }, 100);
        window.setTimeout( () => {
            target.style.removeProperty('height');
            target.style.removeProperty('transition-duration');
            target.style.removeProperty('transition-property');
            parent.style.removeProperty('pointer-events');
            animationInProgress = false;
        }, duration + 100);
    }
}

// slideToggle function
function slideToggle(target, parent, duration = 300) {

    if(target && !animationInProgress) {
        if (window.getComputedStyle(target).display === 'none') {
            return slideDown(target, parent, duration);
        } else {
            return slideUp(target, parent, duration);
        }
    }

}

// Accordion Script to target and make active on click
let accordions = document.querySelectorAll('.js-accordion');

accordions.forEach(item => { item.addEventListener('click', toggleItem)});

function toggleItem(e) {
    e.preventDefault();

    let item = e.target.closest('.accordion')
    item.classList.toggle('active')
    slideToggle(item.querySelector('.accordion__content'), item)

    for (let sibling of item.parentNode.children) {
        if (sibling !== item) {
            sibling.classList.remove('active');
            slideUp(sibling.querySelector('.accordion__content'), sibling);
        }
    }
}