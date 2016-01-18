(function() {
	//向后台请求活动数据
	$.ajax({
		type: "POST",
		url: "../php/index.php?m=User&a=text",
		data: {},
		dataType: "json",
		success: function(data) {
			
		},
		error: function(data) {
			//alert("not do!");
			$("#container").append(data);
		}
	});
	var data = {tableHeader: [
						"姓名", "手机号码", "性别", "年纪", "学号", "住址"
					],
					tableList: [
						[
							"姓名", "手机号码", "性别", "年纪", "学号", "住址"
						], 
						[
							"姓名", "手机号码", "性别", "年纪", "学号", "住址"
						], 
						[
							"姓名", "手机号码", "性别", "年纪", "学号", "住址"
						], 
						[
							"姓名", "手机号码", "性别", "年纪", "学号", "住址"
						], 
						[
							"姓名", "手机号码", "性别", "年纪", "学号", "住址"
						], 
						[
							"姓名", "手机号码", "性别", "年纪", "学号", "住址"
						], 
						[
							"姓名", "手机号码", "性别", "年纪", "学号", "住址"
						]
					]
	};
		
	renderTable = function(data){
		if(!data || !data.tableHeader.length){
			//未返回数据或者表头数据为空，无法渲染
			return false;
		}
		var $table = $("#activityTable");
		var html=[];
		html.push("<tr>")
		for (var i=0;i<data.tableHeader.length;i++) {
			html.push("<th>"+data.tableHeader[i]+"</th>");
		}
		html.push("</tr>")
		if(!data.tableList){
			//没有报名数据可以加载
			return true;
		}
		for (var n=0;n<data.tableList.length;n++) {
			html.push("<tr>")
			for(var m=0;m<data.tableList[n].length;m++){
				html.push("<td>"+data.tableList[n][m]+"</td>");
			}
			html.push("</tr>")
		}
		$table.html(html.join(""));
		return true;
	}
	renderTable(data);	
})();