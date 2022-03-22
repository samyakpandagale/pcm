require('./bootstrap');
window.Jquery = require('jquery');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
$('.btn').click(function(){
    $(this).toggleClass("click");
    $('.sidebar').toggleClass("show");
    });
    
    
    $('.sidebar ul li a').click(function(){
    var id = $(this).attr('id');
    $('nav ul li ul.item-show-'+id).toggleClass("show");
    $('nav ul li #'+id+' span').toggleClass("rotate");
    
    });
    
    $('nav ul li').click(function(){
    $(this).addClass("active").siblings().removeClass("active");
    });

    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").not('thead tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });