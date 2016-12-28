<?php

  class user_model extends CI_Model{

      public function getusersByUsernameandPwd($username,$pwd){
         return  $this->db->get_where("tt_user",array(  //除了差是返回一个row（），然后可以这么写return，别的增删改都不行
              "username"=>$username,
              "password"=>$pwd
          ))->row(); //一个数据返回row（），多个数据返回result（）。
      }

      //查询返回的是对象或者数组，其他的增删改返回的是一个影响的行数。
      public function getAllUser($username){
          return $this->db->get_where("tt_user",array(
              "username"=>$username
          ))->result();  //get查询所有数据，然后get_where根据具体的东西查询我要的东西。
      }

      public function saveUser($pwd1,$pwd2,$username){
          $this->db->insert("tt_user",array(
              "username"=>$username,
              "password"=>$pwd1,
              "repassword"=>$pwd2
          ));
          return $this->db->affected_rows();  //增删改返回的是affected_rows()
      }

      public function getByUsername($username){
           return $this->db->get_where("t_user",array(
              "username"=>$username
          ))->row();
      }

      public function deleteUser($userid){

          $this->db->delete("t_user",array(
              "user_id"=>$userid
          ));
          return $this->db->affected_rows();
      }

      public function getuserByid($userid){
          return $this->db->get_where("t_user",array(
              "user_id"=>$userid
          ))->row();
      }

      public function updateUser($username,$password,$userid){
          $this->db->where("user_id",$userid);   //就只有这个update比较特殊，要这么写，
          $this->db->update("t_user",array(
              "username"=>$username,
              "password"=>$password
          ));
          return $this->db->affected_rows();
      }
  }