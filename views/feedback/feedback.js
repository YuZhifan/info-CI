/**
 * Created by Felix on 2016/4/25.
 */
$(document).ready(function(){
    $(".nav-feedback").addClass("nav-current");
});


$(document).ready(function(){

    $(".msg-box input").click(function(){
        $(".feedback-msg").hide();
        $(".question").fadeIn(200);
    });
});