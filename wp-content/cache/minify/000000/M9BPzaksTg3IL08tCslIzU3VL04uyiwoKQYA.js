function greeting(){var d=new Date();var n=d.getHours();if(n<"12"){return"Good morning. ";}
if(n>="12"&&n<"17"){return"Good afternoon. ";}
if(n>="17"&&n<"19"){return"Hi, there. ";}
else{return"Hi, there. ";}};$(document).ready(function(){var myGreeting=greeting();$(".greeting").html(myGreeting);});