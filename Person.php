<?php

class Person {
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;
  
  function __construct($name, $lastname, $age, $mother=null, $father=null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  
  function sayHi($name) {
    return  "Hi $name, I'm " . $this->name;
  }
  function setHp($hp) {
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp() {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;
  }
  function getLastname() {
    return $this->lastname;
  }
  function getInfo() {
    return "<h3>Обо мне: </h3>" . "Меня зовут: " . $this->getName() . "<br> Моя фамилия: " . $this->getLastname() . 
      "<br> Моего папу зовут: " . $this->getFather()->getName() . 
      "<br> Мою маму зовут: " . $this->getMother()->getName() . 
      "<br> Моего дедушку зовут: " . $this->getMother()->getFather()->getName() . " " . $this->getMother()->getFather()->getLastname() . 
      "<br> Мою бабушку зовут: " . $this->getMother()->getMother()->getName() . " " . $this->getMother()->getMother()->getLastname() . 
      "<br> Моего второго дедушку зовут: " . $this->getFather()->getFather()->getName() . " " . $this->getFather()->getFather()->getLastname() . 
      "<br> Мою вторую бабушку зовут: " . $this->getFather()->getMother()->getName() . " " . $this->getFather()->getMother()->getLastname();
    //вывести данные обо всей родне, вкл бабушек и дедушек
  }
}

$alex = new Person("Alex", "Ivanov", 72);
$irina = new Person("Irina", "Ivanova", 70);
$anna = new Person("Anna", "Petrova", 74);
$oleg = new Person("Oleg", "Petrov", 76);
$igor = new Person("Igor", "Petrov", 40, $anna, $oleg);
$olga = new Person("Olga", "Petrova", 38, $irina, $alex);
$valera = new Person("Valera", "Petrov", 10, $olga, $igor);

//echo $valera->getMother()->getFather()->getName();
echo $valera->getInfo();

//здоровье не больше 100;
//$medkit = 50;
//$alex->setHp(-30); //упал
//echo $alex->getHp() . "<br>";
//$alex->setHp($medkit); //нашел аптечку
//echo $alex->getHp();
//echo $alex->sayHi($igor->name) . "<br>";
//echo $igor->sayHi($alex->name);
