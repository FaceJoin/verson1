<?php
	function show_db_errorxx(){
	exit('系统访问量大，请稍等添加数据');
    }
    
    //操作成功 返回json
    function output_json_success($data){
 		$json=array();
    	$json['data']=$data;
    	$json['status']='true';
        //$json['info']='成功';
        //	$json['code']=100;
    	return $json;
	}
    

	//操作不成功 返回错误码
	function output_json_fail($errorCode){
    	$json=array();
    	$json['status']='false';
    	$json['info']='失败';
    	$json['code']=$errorCode;
    	return $json;
	}

?>