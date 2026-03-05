<?php
    class Employee{
        private $lName;
        private $fName;
        private $age;
        private $position;
        private $salary;

        public function __construct($lName, $fName, $age, $position, $salary) {
            $this->lName = $lName;
            $this->fName = $fName;
            $this->age = $age;
            $this->position = $position;
            $this->salary = $salary;
        }

        function getLname(){
            return $this->lName;
        }

        function getFname(){
            return $this->fName;
        }

        function getAge(){
            return $this->age;
        }

        function getPosition(){
            return $this->position;
        }

        function getSalary(){
            return $this->salary;
        }
    }
?>