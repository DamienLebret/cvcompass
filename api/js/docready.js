$(document).ready(function() {   
/*$( "#nportfolio .element" ).hover(function() {$(".description").hide();$( this ).children( ".description" ).toggle( "blind", 500 );},function() {$( this ).children( ".description" ).toggle( "blind", 500 );});*/
$( "#nportfolio .element" ).hover(function() {$(".description").not($( this ).children( ".description" )).hide();$( this ).children( ".description" ).show( "slide", 500 );},function() {$( this ).children( ".description" ).hide( "slide", 500 );});
$("a.preview").fancybox({prevEffect:'elastic',nextEffect:'elastic',closeBtn:true,autoScale:true});
initBD();
$("#open_bd").click(function(evt) { afficheBD(); });
});
function initBD() {$("#bd").dialog({autoOpen: false,modal: true,width: 600});}
function afficheBD(){$("#bd").dialog("open");}