/**
 * Created by Felix on 2016/4/23.
 */


/*
* changeClass(cl1,cl2,clName)
* 给cl1移除类clName
* 给cl1添加类clName
* */
//
//function changeClass(cl1,cl2,clName){
//    cl1.removeClass(clName);
//    cl2.addClass(clName);
//}


var INFO ={
    base_url:"http://localhost/info-CodeIgniter/",
};


/*
* clickSwitch(current,choose,clName)点击切换类
* current当前选择 choose新点击 clName切换的类名
* 新点击与当前不一样的时候切换类名
* */
function clickSwitch(current,choose,clName){
    var currentData,chooseData;
    if(current.val()){
        currentData = current.val();
        chooseData = choose.val();
    }else{
        currentData = current.html();
        chooseData = choose.html();
    }
    if(currentData !== chooseData){
        current.removeClass(clName);
        choose.addClass(clName);
    }
    return false;
}
