$(document).ready(function() {    
$("a.preview").fancybox({prevEffect:'elastic',nextEffect:'elastic',closeBtn:true});
initBD();
$("#open_bd").click(function(evt) { afficheBD(); });
});
function initBD() {$("#bd").dialog({autoOpen: false,modal: true,width: 600});}
function afficheBD(){$("#bd").dialog("open");}