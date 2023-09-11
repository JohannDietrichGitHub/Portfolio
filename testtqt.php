<?php

class Animal {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function eat() {
        echo $this->name . " is eating.\n";
    }
}

class Dog extends Animal {
    public function bark() {
        echo $this->name . " is barking.\n";
    }
}

// Utilisation des classes
$animal = new Animal("Animal");
echo "Animal name: " . $animal->getName() . "\n";
$animal->eat();

$dog = new Dog("Max");
echo "Dog name: " . $dog->getName() . "\n";
$dog->eat();
$dog->bark();
