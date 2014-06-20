
function greeting(){
	var d = new Date();
	var n = d.getHours();
	if (n < "12") {
        return "Good morning. ";
    }
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if (n >= "12" && n < "17") {
        return "Good afternoon. ";
    } 
    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if (n >= "17" && n < "19") {
        return "Hi, there. ";
    } 
    /* Finally, show good night if the time is greater than or equal to 1900 hours */
    else {
        return "Hi, there. ";
    }
};
$(document).ready(function() {
    
   var myGreeting= greeting();
   $(".greeting").html(myGreeting);
});
