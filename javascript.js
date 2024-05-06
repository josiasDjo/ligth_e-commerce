// menu bar

function navbarChange() {
    var menuBar = document.getElementById('navbar-responsive');

    menuBar.classList.remove('navbar-responsive');
    menuBar.classList.add('navbar-show-menu');

    var closeNav = document.getElementsByClassName('close-nav');

    // for (var i = 0; i < closeNav.length; i++) {
    //     var closeNavChild = closeNav[i];

    //     if (closeNavChild.style.display == "")
    // }

    if (closeNav.style.display == "none") {
        closeNav.style.display = "block";
    } else {
        // 
    }
}

// défilements des artices à la page d'accueil
var scrollingContainer = document.getElementById('scrolling-container');
var scrollingContent = document.getElementById('scrolling-content');

function scroll() {
    scrollingContent.appendChild(scrollingContent.firstElementChild);
}


var scrollInterval = setInterval(scroll, 3000);

scrollingContainer.addEventListener('mouseenter', function() {
    clearInterval(scrollInterval);
});

scrollingContainer.addEventListener('mouseleave', function() {
    scrollInterval = setInterval(scroll, 3000);
});



// animation scolling
var element = document.getElementsByClassName('container_accueil');

gsap.to(element, { 
    duration: 1, 
    scrollTop: 500, 
    ease: 'power2.out'
});
