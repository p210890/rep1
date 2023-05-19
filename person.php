<?php

class Person
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother = null, $father = null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  function sayHi($name)
  {
    return "Hi, $name, I`m " . $this->name;
  }
  function setHp($hp)
  {
    if ($this->hp + $hp > 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp()
  {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getLastname() {
    return $this->lastname;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }
  function getInfo() {
    return "<h3>A few words about myself:</h3><br>" . "My name is: " . $this->getName() . "<br>my lastname is: " . $this->getLastname() . "<br>my father is: " . $this->getFather()->getName(). "<br>my mother is: " . $this->getMother()->getName() . "<br>my father's mother is: " . $this->getFather()->getMother()->getName() . "<br>my mother's father is: " . $this->getMother()->getFather()->getName() . "<br>my mother's mother is: " . $this->getMother()->getMother()->getName();
    //Дальше фамилии и имена всех родственников
  }
}

//Здоровье человека не может быть выше 100%
$vasili = new Person("Vasili", "Petrov", 74);
$ivan = new Person("Ivan", "Ivanov", 72);
$olga = new Person("Olga","Petrova",70);
$maria = new Person("Maria","Ivnova",69);
$igor = new Person("Igor", "Petrov", 41, $maria,$vasili);
$ksenia = new Person("Ksenia", "Petrova", 35, $olga, $ivan);
$kuzya = new Person("Kuzya", "Petrov", 8, $ksenia, $igor);

echo $kuzya->getInfo();