<?php


class message extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("message_model");
    }

    public  function inbox(){
        $this->load->view("inbox");
    }

    public function resMessage(){

        $this->load->view("resMessage");
    }

    public function showResMessage(){
        $userid=$this->session->userdata("userinfo")->user_id;
        $row=$this->message_model->showResMessage();
        if($row){
            $num=$this->message_model->countMessageNum();
            $MyOwnMessageNum=$this->message_model->countMyOwnMessage($userid);
            if($num){
                foreach($num as $value){     //这样就直接是个对象了，前台直接这样（->）就可用属性了
                    $this->session->set_userdata(array(
                        "messageNum"=>$value
                    ));
                    $this->load->view("inbox",array(
                        "message"=>$row,
                        "num"=>$value,
                        "MyOwnMessageNum"=>$MyOwnMessageNum
                    ));
                }
            }else{
                echo "fail";
            }
            }
    }

    public function show_ResMessage(){
        $userid=$this->session->userdata("userinfo")->user_id;
        $resMessage=$this->input->post("message");
        $messageId=$this->input->post("messageId");
        $row=$this->message_model->show_ResMessage($userid,$resMessage,$messageId);
        if($row){
            redirect("message/showResMessage");
        }else{
            echo "fail";
        }
    }


    public function sendMsg(){
        $this->load->view("sendMsg");
    }
    public function outbox(){
        $this->load->view("outbox");
    }

    public function sendMsgOK(){
        $userid=$this->session->userdata("userinfo")->user_id;
        $sendContent=$this->input->post("sendContent");
        $flag=$this->input->post("flag");
        $time=$this->input->post("time");
        $messageNum=$this->input->get("messageNum");
//        var_dump($time);
//        die();
        $MyOwnMessageNum=$this->message_model->countMyOwnMessage($userid);   //这个取出来就是个对象
//        var_dump($row);
//        die();
        if($flag!=$this->session->userdata("flag")){
            $showSendMessage=$this->message_model->showSendMessage($userid);
//            var_dump($showSendMessage);
//            die();
            $this->load->view("outbox",array(
                "showSendMessage"=>$showSendMessage,
                "flag"=>$flag,
                "messageNum"=>$messageNum,
                "MyOwnMessageNum"=>$MyOwnMessageNum
            ));
        }else{
            $SendMsgOK=$this->message_model->insertSendMsgOK($userid,$sendContent,$time);
//        var_dump($SendMsgOK);
//        die();
            if($SendMsgOK){    //如果插入成功，再进行下面的搜索显示已发送信息
                $showSendMessage=$this->message_model->showSendMessage($userid);
//            var_dump($showSendMessage);
//            die();
                $this->session->set_userdata(array(  //这里的session改变，只要不进入sendMsg页面，sendMsg页面传过来的flag就还是1.
				"flag"=>2
			));
                $this->load->view("outbox",array(
                    "showSendMessage"=>$showSendMessage,
                    "flag"=>$flag,
                    "messageNum"=>$messageNum,
                    "MyOwnMessageNum"=>$MyOwnMessageNum
                ));

            }else{

            }
        }

    }

    public function showSendMessage(){
        $userid=$this->session->userdata("userinfo")->user_id;
        $showSendMessage=$this->message_model->showSendMessage($userid);
        $this->load->view("outbox",array(
            "showSendMessage"=>$showSendMessage,
        ));
    }


    public function deleteSendMsg(){
        $messageId=$this->input->get("messageId");
        $userId=$this->input->get("userId");
        $row=$this->message_model->deleteSendMsg($messageId,$userId);
//        var_dump($row);
//        die();
        if($row){
            redirect("message/sendMsgOK");
        }else{
            echo "fail";
        }

    }

}