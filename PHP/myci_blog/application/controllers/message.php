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
        $row=$this->message_model->showResMessage();
        if($row){
            $num=$this->message_model->countMessageNum();
            if($num){
                foreach($num as $value){     //这样就直接是个对象了，前台直接这样（->）就可用属性了
                    $this->session->set_userdata(array(
                        "messageNum"=>$value
                    ));
                    $this->load->view("inbox",array(
                        "message"=>$row,
                        "num"=>$value,
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

}