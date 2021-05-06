<?php
class Base{
    public $name;
    public $email;
    public $type = 'Base';
    protected $pass;

    public function __construct( $name, $email, $pass)
    {
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
    }
    public function getPass(){
        return $this->pass;
    }
    public function setPass($pass){
        $this->pass = $pass;
    }



    public function sayHi(){
        return "Hi ! $this->type, $this->name  ";
    }

}

class AdminUser extends Base {
    public $level;
    public $type = 'admin';

    public function __construct($name, $email, $pass,$level)
    {
        $this->level = $level;
        parent::__construct($name, $email, $pass);
        $this->pass = 'changed';
    }

    public function __clone()
    {
        $this->level = '1';
        $this->name = $this->name.'(clone)';
    }
    public function __destruct()
    {
        echo "$this->name was removed.";
    }

    public function sayHi(){
        return "Hi ! This is Admin Level $this->level , $this->name  ";
    }
}

$userOne = new AdminUser('one','p@w.com','pass','2');
echo $userOne->name.'<br>';
echo $userOne->email.'<br>';
echo $userOne->level.'<br>';
echo $userOne->getPass().'<br>';
echo $userOne->sayHi().'<br>';

//clone
$userTwo = clone $userOne;
echo $userTwo->name.'<br>';
echo $userTwo->level.'<br>';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial 2</title>
</head>
<body>

</body>
</html>
