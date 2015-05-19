$(document).foundation();
var images = ["coming-soon/background-1.jpg", "coming-soon/background-2.jpg", "coming-soon/background-3.jpg", "coming-soon/background-4.jpg"];
$("head").append('<style>body:before{ background-image: url( "assets/images/' + images[Math.floor(Math.random() * images.length)] + '") }</style>');