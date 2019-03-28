<?php 
 
  require 'post.php';
  class BookRepo
  {
  	private $con;
  	public function createConnection(){

  		$this->con = new PDO("mysql:host=localhost;dbname=test");
  	}

  	public function create(Post $post)
  	{
  		$qury = "INSERT INTO user (name, email, subject, price) VALUES ('".$post->getName()."','". $post->getEmail()."', '".$post->getSubject()."','". $post->getPrice()."')";
  		 //$this->con->exec($qury);
  	}


  	public function delete($id)
  	{
  		$qury = "DELETE FROM user WHERE id = '$id'";
  		$this->con->exec($qury);
  	}
  	public function update($id)
  	{
  		$qury = "UPDATE test set subject=". $payload['subject'].",".$payload['price'];
  		$this->con->exec($qury);
  	}
    public function fetchData()
    { 
      $stmt = "SELECT * FROM user";
      $result =$this->con->query($stmt);
      while ($rows=$result->fetch()) {
       echo "<tr>
           <td>". $rows['name']."</td>
           <td>". $rows['email']."</td>
           <td>". $rows['subject']."</td>
           <td>". $rows['price']."</td>
           <td> <a href='delete.php?id=".$rows['id']."'> Delete</a>
                <a href='update.php?id=".$rows['id']."'> Update</a>
           </td>
       </tr>";
      }
    }
  }
  ?>
