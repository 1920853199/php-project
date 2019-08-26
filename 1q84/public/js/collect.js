$(function () {

    var lock = true
    $.get('http://collect.jebook.cn/collect',{
        "time":gettime(),
        "url":geturl(),
        "refer":getrefer(),
        "userAgent":getuser_agent(),
    },function () {
        lock = false
    });

});

/*
gettime(); //js获取当前时间
getip(); //js获取客户端ip
geturl(); //js获取客户端当前url
getrefer(); //js获取客户端当前页面的上级页面的url
getuser_agent(); //js获取客户端类型

*/
function gettime(){
    var nowDate = new Date();
    return nowDate.toLocaleString();
}
function geturl(){
    return window.location.href;
}
function getrefer(){
    return document.referrer;
}
function getuser_agent(){
    return navigator.userAgent;
}
