<?php 

    class person {

        public $name; //Property name

        public function setName($newName){  //Method setName
            $this->name = $newName;
        }
        //method tha print a name
        public function printName(){
            echo "Hello I am ".$this->name."<br/>";
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
    //set newname to person with Maria Luisa
    $Student1->setName("Maria Luisa");
    //Print new name for the person created
    echo $Student1->name."<br/>";

    $Student2 = new person();
    //set newname to person with Maria Luisa
    $Student2->setName("Jose David");
    //Print new name for the person created with the second metohd created
    $Student2->printName();

    $worker1 = new worker();
    $worker1->setName("Alberto");
    $worker1->typeJob = "Developer";
    $worker1->presentsAsWorker();

?>