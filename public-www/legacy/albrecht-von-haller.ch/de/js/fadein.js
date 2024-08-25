$(document).ready(function(){
$(".extracontent").fadeTo("slow", 0.3);
$(".extracontent").hover(function(){
$(this).fadeTo("slow", 1.0);
},function(){
$(this).fadeTo("slow", 0.3);
});
});