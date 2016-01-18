/*本文件定义页面跳转的逻辑*/

$(document).ready(function(){
	
	$("#container").load("../html/homeShow.html");
	$("#homeShow").click(function(){
		$("#container").load("../html/homeShow.html");
	});
//	$("#aboutUs").html(",,,,,,,,,");
	$("#activityShow").click(function(){
		$("#container").load("../html/activityTable/activityTable.html");
		$.getScript("../html/activityTable/activityTable.js");
	});
	
	$("#aboutUs").click(function(){
		$("#container").load("../html/aboutUs.html");
	});
});

