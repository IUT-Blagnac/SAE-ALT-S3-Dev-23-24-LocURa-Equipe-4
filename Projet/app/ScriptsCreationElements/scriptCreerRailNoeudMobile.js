document.addEventListener("DOMContentLoaded", function () {
    // Coordonnées des points de début et de fin
    let pointInit = document.getElementById("184");



    var startX = pointInit.style.left;
    console.log(startX);
    var startY = pointInit.style.top;
    console.log(startY);
    var endX = 1100;
    var endY = 570;

    // Calcul de la longueur et de l'angle du trait
    var length = Math.sqrt(Math.pow(endX - startX, 2) + Math.pow(endY - startY, 2));
    var angle = Math.atan2(endY - startY, endX - startX) * (180 / Math.PI);

    // Appliquer la transformation
    var ligne = document.getElementById("ligneMobile");
    ligne.style.width = length + "px";
    ligne.style.transform = "rotate(" + angle + "deg)";
    ligne.style.top = startY + "px";
    ligne.style.left = startX + "px";
});