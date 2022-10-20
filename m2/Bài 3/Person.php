<?php
class Person
{
    public $name = '';
    public $age = 0;
    public function __construct()
    {
    }
    public function sayHello()
    {
        return "xin chào các bạn";
        
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getName()
    {
        return $this->name;
    }
}
    //khởi tạo đối tượng
    $person = new Person();

    //- thiết lập giá trị cho thuộc tính age và name
    $person->name = "Trần Văn Trường";
    $person->age = 19;

    //truy xuất phương thức 
    echo  $person->sayHello(); 
    echo '<br> ';
     echo $person->getName();
     echo '<br>';
     echo $person->getAge();
     echo '<br>';

    //in ra
    echo "<pre>";
    print_r($person);
    echo "</pre>";
