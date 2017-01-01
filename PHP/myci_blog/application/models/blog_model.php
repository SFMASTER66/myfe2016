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

    public function getChangeblogTypeName($content,$title,$type_name){
//        $sql="select blog.*,blog_type.type_name
//from tt_blog blog ,tt_blog_type blog_type
//where blog.user_id=blog_type.user_id and blog.type_id=blog_type.type_id";
        $sql="select blog.*,blog_type.type_name
from tt_blog blog ,tt_blog_type blog_type
where blog.user_id=blog_type.user_id and blog.type_id=blog_type.type_id and blog.content=? and blog.title=? and blog_type.type_name=?";
        return $this->db->query($sql,array(
            $content,$title,$type_name
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
        //在CI里，也可以用原生的方法进行数据库的查询。
        $sql="select blog.* , blog_type.type_name from tt_blog  blog , tt_blog_type  blog_type where blog.type_id=blog_type.type_id and blog.user_id=?";

        return $this->db->query($sql,array(
            $userid
        ))->result();
    }


    public function deleteBlogs($blogId){
        $arr=explode(",",$blogId);
        $this->db->where_in("blog_id",$arr);
        $this->db->delete("tt_blog");
        return $this->db->affected_rows();
    }

    public function deleteBlogType($typeId){
        $this->db->delete("tt_blog_type",array(
            "type_id"=>$typeId
        ));
        return $this->db->affected_rows();
    }

    public function checkTypeName($typename,$userid){
        return $this->db->get_where("tt_blog_type",array(
            "type_name"=>$typename,
            "user_id"=>$userid
        ))->row();
    }

    public function change_BlogType($typename,$typeId){
        $this->db->where("type_id",$typeId);
        $this->db->update("tt_blog_type",array(
            "type_name"=>$typename
        ));
        return $this->db->affected_rows();
    }

    public function showBlogsOnComments(){
//        $sql="select blog.* , comment.content from tt_blog  blog , tt_comment comment  where blog.blog_id=comment.blog_id and blog.user_id=?";
        $sql="select comment.*,user.username
from tt_blog  blog , tt_comment comment,tt_user user
where blog.blog_id=comment.blog_id and comment.user_id=user.user_id";
        return $this->db->query($sql)->result();
    }


    public function deleteBlogComment($commentId){
        $this->db->delete("tt_comment",array(
            "comment_id"=>$commentId
        ));
        return $this->db->affected_rows();
    }

    public function deleteAllBlogCommentByUserId($userId){
        $this->db->delete("tt_comment",array(
            "user_id"=>$userId
        ));
        return $this->db->affected_rows();
    }

    public function indexShowBlogs(){
        $sql="select count(tt_blog.blog_id) num,tt_blog.*,tt_blog_type.type_name
from tt_blog , tt_comment  ,tt_blog_type
WHERE tt_blog.blog_id=tt_comment.blog_id and tt_blog.type_id=tt_blog_type.type_id
GROUP BY tt_blog.blog_id";
        return $this->db->query($sql)->result();
    }

    public function indexShowComments(){
        $sql="select tt_blog.blog_id,tt_blog.title,tt_blog.user_id,tt_blog.type_id,tt_blog_type.type_name,tt_comment.create_time,tt_user.username ,tt_comment.content
from tt_blog , tt_comment  ,tt_blog_type,tt_user
WHERE tt_blog.blog_id=tt_comment.blog_id and tt_blog.type_id=tt_blog_type.type_id and tt_comment.user_id=tt_user.user_id";
        return $this->db->query($sql)->result();
    }

    public function updateblogs($userid,$blogtitle,$blogTypeid,$content,$blogId){
        $this->db->where("user_id",$userid);
        $this->db->where("blog_id",$blogId);
        $this->db->update("tt_blog",array(
            "title"=>$blogtitle,
            "type_id"=>$blogTypeid,
            "content"=>$content
        ));
        return $this->db->affected_rows();
    }

    public function deleteIndexBlogs($blog_id){
        $sql="delete tt_blog
from tt_blog , tt_comment
where tt_blog.blog_id=tt_comment.blog_id and tt_blog.blog_id=?";
        $this->db->delete($sql,array(
            $blog_id
        ));
        return $this->db->affected_rows();
    }

    public function indexShowCommentsNum($blogId){
        $sql="select count(tt_blog.blog_id) num,tt_blog.*,tt_blog_type.type_name
from tt_blog , tt_comment  ,tt_blog_type
WHERE tt_blog.blog_id=tt_comment.blog_id and tt_blog.type_id=tt_blog_type.type_id and tt_blog.blog_id=?
GROUP BY tt_blog.blog_id";
        return $this->db->query($sql,array(
            $blogId
        ))->result();

    }

}