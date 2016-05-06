/**
 * Created by Felix on 2016/4/25.
 */

$(document).ready(function(){
    $(".tab-wrap ul li").click(function(){
        var currentTab = $(".tab-choose");
        var chooseTab = $(this);
        var currentData = currentTab.data("box");
        var chooseData = chooseTab.data("box");
        clickSwitch(currentTab,chooseTab,"tab-choose");
        if(currentData !== chooseData){
            $("." + currentData).hide();
            $("." + chooseData).fadeIn(300);
        }
    });
});
