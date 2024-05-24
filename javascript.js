document.addEventListener('DOMContentLoaded', () => {

    const allElements = document.body.querySelectorAll('*');

    // function isElementVisible(element) {
    //     const rect = element.getBoundingClientRect();
    //     alert("Coordonnées récupérées !! ");
    //     console.log('Element rect:', rect);
    //     console.log('Window innerHeight:', window.innerHeight);
    //     console.log('Window innerWidth:', window.innerWidth);

    //     return (
    //         rect.top >= 0 &&
    //         rect.left >= 0 &&
    //         rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    //         rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    //     );
    // }
    function animateVisibleElements() {
        allElements.forEach((element, index) => {
            setTimeout(() => {
                element.style.opacity = 1;
                element.style.transform = 'translateY(0)';
            }, index * 10); // 500ms delay between each element
        });

        var animateElement = function isElementVisible(element) {
            const rect = element.getBoundingClientRect();
            alert("Coordonnées récupérées !! ");
            console.log('Element rect:', rect);
            console.log('Window innerHeight:', window.innerHeight);
            console.log('Window innerWidth:', window.innerWidth);
    
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

    }

    animateVisibleElements();

});


// menu bar

function navbarChange() {
    var menuBar = document.getElementById('navbar-responsive');

    menuBar.classList.remove('navbar-responsive');
    menuBar.classList.add('navbar-show-menu');

    var closeNav = document.getElementsByClassName('close-nav');

    if (closeNav.style.display == "none") {
        closeNav.style.display = "block";
    } else {
        // 
    }
}

function navbarClose() {
    var closemenu = document.getElementById('navbar-responsive');

    closemenu.classList.remove('navbar-show-menu');
    closemenu.classList.add('navbar-responsive');
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
// var element = document.getElementsByClassName('container_accueil');

// gsap.to(element, { 
//     duration: 1, 
//     scrollTop: 500, 
//     ease: 'power2.out'
// });



/* CONTENU EXPLORE SWITCH*/

function showTab(tabId) {
    var tabs = document.getElementsByClassName('panelCont');
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].style.display = 'none';
    }
    document.getElementById(tabId).style.display = 'flex';
    document.getElementsByClassName('btnSelect').style.border = '1px solid black';

    var selectedTab = document.getElementById(tabId)
    selectedTab.classList.add('active');

    // Animer les composants successivement
    var components = selectedTab.getElementsByClassName('sub-container');
    for (let i = 0; i < components.length; i++) {
        setTimeout(function() {
        components[i].style.opacity = 1;
        }, i * 3000); // Décalage de 500 ms entre chaque composant
    }
}

