<?php 

require 'post_repo.php';

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$price = $_POST["price"];

try {
	 //create post
     $post = new Post;
     $post->setName($name);
     $post->setEmail($email);
     $post->setSubject($subject);
     $post->setPrice($price);

     //call repo

     $repo = new BookRepo;
     $repo->createConnection();
     $repo->create($post);


} 
catch (Exception $e) {
	echo $e->getMessage();
}

   

 ?>