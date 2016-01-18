<?php
 
class UserAction extends Action {
    
   
    public function text(){
        exit(json_encode("beauty2")) ;
    }
 public function test($id = 2)
    {
        $user = M('user_info','helper_', 'DB_DSN');
        //$user->create();
//        for ($i = 4; $i < 10; $i++) {
//            $data['pa_id'] = $i;
//            $data['pa_name'] = 'neo' . ($i + 2);
//            $data['pa_pwd'] =$id;
//            // echo $data['pa_name'].'<br/>';
//
//            $returnId=$user->add($data);
//            echo $returnId.'<br/>';
//        }
        //  echo $user->outPut().'<br/>';

        $tmp = $user->select();
//        echo $tmp['pa_id'];
        //$user->select();


        //echo 'test work pk is '.$user->getPK().'<br/>';
        // echo 'ThinkPHP_VERSION';

        //echo 'userid = '.$data[1];
//        $user->where('pa_id>3')->delete();
        //$this->ajaxReturn(output_json($tmp,'neo'),'json');
        $this->ajaxReturn(output_json_success($tmp));
    }
    
    
    //用户登录接口函数 默认值是为了方便测试
    public function login($userPhone=13580461074,$userPassword=123456)
    {
        //使用D方法获取数据库连接
        $user = D('user_info','helper_', 'DB_DSN');
        //根据手机号到数据库中查询密码，不一起验证是为了防止sql注入攻击
        $tmpData=$user->where('user_phone='.$userPhone)->select('user_id,user_id');
        if($tmpData==null){
            //用户不存在，output_json_fail 是一个自写函数，输出错误情况下的json，参数为错误码，错误码列表见有道云协作群
            $this->ajaxReturn(output_json_fail(104));
            return;
        }
        if($tmpData['user_password']!=$userPassword){
            //密码错误
            $this->ajaxReturn(output_json_fail(101));
            return;
        }

        $id= $user->add($tmpData);
        $returnData['user_id']=$id;
        $this->ajaxReturn(output_json_success($returnData));
    }
    
    
    //用户注册接口函数
     public function register($userPhone=13580461074, $userPassword=123456,$verification=8888)
    {
        $user = M('user_info','helper_', 'DB_DSN');
         //将数据打包放入数据库中
        $tmpData['user_phone']=$userPhone;
        $tmpData['user_password']=$userPassword;
        $id= $user->add($tmpData);
         //返回刚刚插入获得的user_id
        $returnData['user_id']=$id;
        $this->ajaxReturn(output_json_success($returnData));
    }
    public function getOrderById($orderId = 1)
    {
        $user = D('order_info','helper','DB_DSN');
		$tmpData = $user->where("orderid = $orderId",array($orderid,$order_content,$order_submittime,$order_location,$order_reward,$order_location_altitude))->select();
        if($tmpData==null)
        {  
            $this->ajaxReturn(output_json_fail(104));
            return;
        }
        
           
        $returnData['user_id']=$id;
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

?>