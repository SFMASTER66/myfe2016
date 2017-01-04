<?php


class message_model extends CI_Model{

    public function showResMessage(){
        $sql="select message.*,user.username
from tt_message message,tt_user user
where message.user_id=user.user_id";
        return $this->db->query($sql)->result();
    }

    public function countMessageNum(){
        $sql="select count(message.message_id) num,message.*,user.username
from tt_message message,tt_user user
where message.user_id=user.user_id";
        return $this->db->query($sql)->result();
    }

    public function show_ResMessage($userid,$resMessage,$messageId){
        $this->db->where("message_id",$messageId);
        $this->db->update("tt_message",array(
            "responser"=>$userid,
            "res_message"=>$resMessage,
        ));
        return $this->db->affected_rows();
    }


    public function insertSendMsgOK($userid,$sendContent,$time){
        $this->db->insert("tt_message",array(
            "user_id"=>$userid,
            "message"=>$sendContent,
            "create_time"=>$time
        ));
        return $this->db->affected_rows();
    }


    public function showSendMessage($userid){
        return $this->db->get_where("tt_message",array(
           "user_id"=>$userid
        ))->result();
    }

    public function deleteSendMsg($messageId,$userId){
        $this->db->delete("tt_message",array(
            "message_id"=>$messageId,
            "user_id"=>$userId
        ));
        return $this->db->affected_rows();
    }


    public function countMyOwnMessage($userid){
        $sql="select count(*) num
from tt_message message
where message.user_id=?";
        return $this->db->query($sql,array(
            "user_id"=>$userid
        ))->row();
    }
}