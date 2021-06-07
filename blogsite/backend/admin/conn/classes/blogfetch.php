<?php

class blogfetch{
        
    private $db;
 function __construct($con)
 {
     $this->db=$con;
 }




 function fetchblog()
 {
    
    $statmetm=$this->db->prepare("SELECT id, title, descr ,slug FROM blogpost ");
    $statmetm->execute();
   $data=$statmetm->fetchAll(PDO::FETCH_ASSOC);
   return $data;
 }

 public function fetchpost($slug){
   $stmt=  $this->db->prepare("SELECT * FROM blogpost WHERE slug=:slug");
    $stmt->bindparam(':slug',$slug);
    $stmt->execute();
   $result= $stmt->fetch(PDO::FETCH_ASSOC);
   return $result;
 }











}
