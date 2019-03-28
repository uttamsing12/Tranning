<?php 
 class Post{
 	private $name;
 	private $email;
 	private $subject;
 	private $price;
    
      // setter methods
    public function setName($name)
    {
       $this->name = $name;
    }
     public function setEmail($email)
    {
       $this->email = $email;
    }
     public function setSubject($subject)
    {
       $this->subject = $subject;
    }
     public function setPrice($price)
    {
       $this->price = $price;
    }

    
     // getter methods

    public function getName()
    {
       return $this->name ;
    }
     public function getEmail()
    {
        return $this->email ;
    }
     public function getSubject()
    {
        return $this->subject ;
    }
     public function getPrice()
    {
        return $this->price ;
    }
 }
 ?>