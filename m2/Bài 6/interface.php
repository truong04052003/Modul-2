<?php
abstract class Human {
    abstract function say();
}
interface Bird {
     function fly();

}
interface Fish{
     function swiming();

}
class SuperMan extends Human implements Bird , Fish{
    public function say(){

    }
    public function fly(){

    }
    public function swiming(){

    }
}



?>