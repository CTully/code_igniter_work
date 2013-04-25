<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);
 class Post extends CI_Model{
    function get_posts($num=20,$start=0){
    
        $this->db->select()->from('posts')->where('active',1)->order_by('date_added','desc')->limit($num,$start);
        $query=$this->db->get();
        //$this->db->select('*');
        //$this->db->from('posts');
        //$this->db->where('active',1);
        //$this->db->where(array('active'=>1));
        //$query=$this->db->get_where('posts'array('active'=>1),$num,$start);
        
        //Joins in Code igniter
       //$query=$this->db->join('users','users.userID=posts.userID','left');
        
        return $query->result_array();
    }
    
    function get_post($postID){
     $this->db->select()->from('posts')->where(array('active'=>1,'postID'=>$postID))->order_by('date_added','desc');
     $query=$this->db->get();
     return $query->first_row('array');
 }
 
 function insert_post($data)
 {
   $this->db->insert('posts',$data);
   return $this->db->insert_id();
 
 }
 
 function update_post($postID,$data){
 $this->where('postID',$postID);
 $this->db->update('posts',$data);
 
 }
 
 function delete_post($postID){
  
   $this->db->where('postID',$postID);
   $this->db->delete('posts');
 }
 
    }
    //inserts a post
   /* function insert_post($data){
       $data=array('title'=>'this is a test',
                    'description'=>'this is the description'
                  );
                  $this->db->insert('posts',$data);
                  return $this->db->insert_id();
    
    }
    
    
    function update_post($postID,$data){
     
      $this->db->where('postID',$postID);
      $this->db->update('posts',$data);
     
    }
    
    function delete_posts($postID,$data){
     
     $this->db->where('postID',$postID);
     $this->db->delete('posts',$data);
    }
    
    function query(){
     $this->db->query("Select * From posts Where active=1 Order by date_added desc Limit $num,$start");     
    }
    */
    
    
 