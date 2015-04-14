// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

//Add your images, we'll set the path in the next step
var images = ['background-1.jpg', 'background-2.jpg', 'background-3.jpg', 'background-4.jpg'];

//Build the img, then do a bit of maths to randomize load and append to a div. Add a touch off css to fade them badboys in all sexy like.
$('head').append('<style>body:before{ background-image: url( "assets/images/' + images[Math.floor(Math.random() * images.length)] + '") }</style>');