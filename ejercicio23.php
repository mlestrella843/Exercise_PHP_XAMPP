<?php 

    class person {

        public $name; //Property name
        private $age;

        public function setName($newName){  //Method setName
            $this->name = $newName;
        }
        //method tha print a name
        public function printName(){
            echo "Hello I am ".$this->name."<br/>";
        }

        public function showAge(){
            $this->age=20;
            echo "This is my age ".$this->age;
            return $this->age;
        }
    }

        class worker extends person{
        public $typeJob;

        public function presentsAsWorker(){
            echo "Hello I am a ".$this->name." and I am a ".$this->typeJob."<br/>"; 
        }
    }

    //Instantiate new object person
    $Student1 = new person();
    $Student1->setName("Maria Luisa");
    $Student1->printName();
    $Student1->showAge();
    
?>