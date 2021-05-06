<?php
class User{

    //access modifiers
    private $id;
    public $name;
    public $email;
    private $password;

    public function __construct($id,$name,$email,$password){
        if (!is_string($id)){
            $this->id = $id;
        } else{
            echo "$id is a string, id need to be integers";
            return;
        }
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId(){

        return $this->id;
    }

    public function getPass(){
        return $this->password;
    }

    public function setId($id){
        if (!is_string($id)){
            $this->id = $id;
        } else{
            echo "$id is a string, id need to be integers";
            return;
        }
    }
    public function setPass($pass){
        $this->password = $pass;
    }

    public function sayHi(){
        return "Hi ! $this->name";
    }
}

$userOne = new User(1,'First','first@guy.com','password');
$userTwo = new User(2,'Second','second@guy.com','password');

echo $userOne->name .'<br>';
echo $userOne->email .'<br>';

//cannot access due to private
//echo $userOne->id;
//echo $userOne->pass;

$userTwo-> name = 'changed';
echo $userTwo->name .'<br>';
$userTwo-> email = 'changed';
echo $userTwo->email .'<br>';

//cannot access due to private
//$userTwo-> id = 'changed';
//echo $userTwo-id;
//$userTwo-> password = 'changed';
//echo $userTwo->password;

//getters & setters
echo $userOne->getId() .'<br>';
echo $userOne->getPass() .'<br>';

$userTwo->setId(2);
$userTwo->setPass('pass');
echo $userTwo->getId() .'<br>';
echo $userTwo->getPass() .'<br>';
echo $userOne->sayHi() .'<br>';
echo $userTwo->sayHi() .'<br>';

//get all class methods and vars
print_r(get_class_vars('User')) ;echo '<br>';
print_r(get_class_methods('User')) ; echo '<br>';

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tut 1</title>
</head>
<body>


</body>
</html>
