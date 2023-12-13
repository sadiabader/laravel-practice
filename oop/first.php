<?php
//classes

// class names{
// public $a, $b;

// public function display(){
//     echo "welcom to my website";
// echo "$this->a and $this->b";

// }
// }
// $obj = new names();
// $obj-> a = "sadia";
// $obj-> a = "bader";
// $obj-> display();


?>
<!-- form -->
<!-- <form action="first.php" method="POST">
  <div class="form-group">
    <label for="fname" class="form-label">first name</label>
    <input type="text" class="form-control"name="fname">
   <br><br>
    <label for="lname" class="form-label">last name</label>
    <input type="text" class="form-control"name="lname">
    <br><br>

  <button type="submit" class="btn btn-primary"value="submit"name="submit">Submit</button>
</form> -->

<?php

// if(isset($_POST['submit'])){

//     $firstname = $_POST['fname'];
//     $lastname = $_POST['lname'];

// class submit{
//     public $fname, $lname;

//     public function display(){
//         echo "$this->fname and $this->lname";
//     }
// }
// $obj= new submit();
// $obj-> fname = $firstname;
// $obj-> lname = $lastname;
// $obj-> display();
// }
?>
<!-- <h3> constructor function</h3>
<?php
// class person{

//   public function __construct($fname, $lname,$email, $contact){
//     echo "your Firstname is : $fname <br> your Lastname is :$lname <br> your email is: $email <br> your contact is : $contact <br><br> ";
//   }
// }
// $firstperson = new person("sadia","bader", "sadi@gmail.com", "12345");
// $secondperson = new person("suhaib","shazil", "suhaib@gmail.com","234511"); -->

// inheritence

class parents{

  public $father;

  public function display_parent(){
    echo "i am your $this->father";
  }
}
class childs extends parents{

  public function display_child(){

    echo "child method";
  }
}

$parent = new parents();
//$parent->father = "walid";

$child = new childs();
$child->father = "bader-ud-din";
$child->display_parent();
//$parent->display_parent();
?>