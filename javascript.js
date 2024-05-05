// Récupérez les éléments nécessaires
var scrollingContainer = document.getElementById('scrolling-container');
var scrollingContent = document.getElementById('scrolling-content');

// Fonction pour effectuer le défilement
function scroll() {
  // Déplacez le premier élément enfant à la fin
    scrollingContent.appendChild(scrollingContent.firstElementChild);
}

// Démarrez le défilement automatique toutes les 2 secondes (ajustez la durée selon vos besoins)
var scrollInterval = setInterval(scroll, 3000);

// Arrêtez le défilement lorsque la souris survole le conteneur
scrollingContainer.addEventListener('mouseenter', function() {
    clearInterval(scrollInterval);
});

// Redémarrez le défilement lorsque la souris quitte le conteneur
scrollingContainer.addEventListener('mouseleave', function() {
    scrollInterval = setInterval(scroll, 3000);
});
