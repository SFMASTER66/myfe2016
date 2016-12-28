<?php

class blog_model extends CI_Model{
    public function saveblogTypeName($blogTypeName,$userid){
        $this->db->insert("tt_blog_type",array(
            "user_id"=>$userid,
            "type_name"=>$blogTypeName
        ));
        return $this->db->affected_rows();
    }

    public function getblogTypeName($userid){
        return $this->db->get_where("tt_blog_type",array(
            "user_id"=>$userid
        ))->result();
    }


    public function saveBlogs($userid,$blogtitle,$blogTypeid,$content){
        $this->db->insert("tt_blog",array(
            "user_id"=>$userid,
            "title"=>$blogtitle,
            "type_id"=>$blogTypeid,
            "content"=>$content
        ));
        return $this->db->affected_rows();
    }

    public function showBlogs($userid){
        return $this->db->get_where("tt_blog",array(
            "user_id"=>$userid
        ))->result();

    }
}