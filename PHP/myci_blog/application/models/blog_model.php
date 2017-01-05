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
        return $this->db->get_where("tt_blog_type",array(    //tt_blog_type这个要跟数据库的表名相同
            "user_id"=>$userid        //user_id这个也要跟数据库的字段名相同，而$userid是从控制器里传过来的值。
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

//    public function indexHasBlogs($userid){    //有文章，也有评论
//        $sql="select count(tt_blog.blog_id) num,tt_blog.*,tt_blog_type.type_name
//from tt_blog , tt_comment  ,tt_blog_type
//WHERE tt_blog.type_id=tt_blog_type.type_id and tt_blog.user_id=?
//GROUP BY tt_blog.blog_id";
//        return $this->db->query($sql,array(
//            "user_id"=>$userid
//        ))->result();
//    }

//    public function indexShowBlogs($userid){    //有文章，也有评论
//        $sql="select count(tt_blog.blog_id) num,tt_blog.*,tt_blog_type.type_name
//from tt_blog , tt_comment  ,tt_blog_type
//WHERE tt_blog.blog_id=tt_comment.blog_id and tt_blog.type_id=tt_blog_type.type_id and tt_blog.user_id=?
//GROUP BY tt_blog.blog_id";
//        return $this->db->query($sql,array(
//            "user_id"=>$userid
//        ))->result();
//    }

    public function indexShowBlogs($userid){    //有文章，也有评论
        $sql="select tt_blog.*, tt_blog_type.*,(select count(*) from tt_comment comm where tt_blog.blog_id=comm.blog_id) num
from tt_blog,tt_blog_type
where tt_blog.user_id = ? and tt_blog.type_id = tt_blog_type.type_id";
        return $this->db->query($sql,array(
            "user_id"=>$userid
        ))->result();
    }

    public function indexShowPureBlogs($userid){
        $sql="select tt_blog.*
from tt_blog
where tt_blog.user_id=?";
        return $this->db->query($sql,array(
           "user_id"=> $userid
        ))->result();
    }

    public function indexShowNoCommentsBlogs($userid){   //没有评论，但有文章
        $sql="select count(tt_blog.blog_id) num,tt_blog.*,tt_blog_type.type_name
from tt_blog , tt_comment  ,tt_blog_type
WHERE tt_blog.type_id=tt_blog_type.type_id and tt_blog.user_id=?
GROUP BY tt_blog.blog_id";
        return $this->db->query($sql,array(
            "user_id"=>$userid
        ))->result();
    }

    public function indexShowComments($userid){     //有文章，也有评论
        $sql="select tt_blog.blog_id,tt_blog.title,tt_blog.user_id,tt_blog.type_id,tt_blog_type.type_name,tt_comment.create_time,tt_user.username ,tt_comment.content
from tt_blog , tt_comment  ,tt_blog_type,tt_user
WHERE tt_blog.blog_id=tt_comment.blog_id and tt_blog.type_id=tt_blog_type.type_id and tt_comment.user_id=tt_user.user_id and tt_blog.user_id=?";
        return $this->db->query($sql,array(
            "user_id"=>$userid
        ))->result();
    }
    public function indexShowrespectivelyComments($userid,$blogId){     //有文章，也有评论
        $sql="select tt_blog.blog_id,tt_blog.title,tt_blog.user_id,tt_blog.type_id,tt_blog_type.type_name,tt_comment.create_time,tt_user.username ,tt_comment.content
from tt_blog , tt_comment  ,tt_blog_type,tt_user
WHERE tt_blog.blog_id=tt_comment.blog_id and tt_blog.type_id=tt_blog_type.type_id and tt_comment.user_id=tt_user.user_id and tt_blog.user_id=?  and tt_blog.blog_id=?";
        return $this->db->query($sql,array(
            "user_id"=>$userid,
            "blog_id"=>$blogId
        ))->result();
    }

    public function indexShowGroupByComments($userid){     //有文章，也有评论
        $sql="select tt_blog.blog_id,tt_blog.title,tt_blog.user_id,tt_blog.type_id,tt_blog_type.type_name,tt_comment.create_time,tt_user.username ,tt_comment.content
from tt_blog , tt_comment  ,tt_blog_type,tt_user
WHERE tt_blog.blog_id=tt_comment.blog_id and tt_blog.type_id=tt_blog_type.type_id and tt_comment.user_id=tt_user.user_id and tt_blog.user_id=? GROUP BY tt_blog.blog_id";
        return $this->db->query($sql,array(
            "user_id"=>$userid
        ))->result();
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

    public function deleteIndexBlogs($blog_id){   //可以级联删除跟博客相关的评论
        $this->db->delete("tt_blog",array(
            "blog_id"=>$blog_id
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


    public function showTypeBlogNum($userid){
        $sql="select blog_type.*,(select count(*) from tt_blog blog where blog.type_id=blog_type.type_id) num
from tt_blog_type blog_type, tt_blog blog
where blog_type.user_id=blog.user_id and blog.user_id=?
GROUP BY blog_type.type_id";
        return $this->db->query($sql,array(
            $userid
        ))->result();
    }

    public function blogSearchBlogByTitle($userid,$blogTitle){
       return $this->db->get_where("tt_blog",array(
            "user_id"=>$userid,
            "title"=>$blogTitle
        ))->result();
    }

}