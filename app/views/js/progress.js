/**
*
* MaLinked Progress
*
**/
var app = angular.module('progressApp', ['ngProgress']);

app.config(function(ngProgressProvider){
    // Default color is firebrick
    ngProgressProvider.setColor('#eb068c');
    // Default height is 2px
    ngProgressProvider.setHeight('2px');
});