<?php
   
class Animal
{
    public string $name;
    //like JS portals (needvar in function)
    public function __construct(string $name)
    {
        $this->name="name";
    }
    public function sayhello()
    {
        return "Hey {$this->name}";
    }
}

$dog = new Animal ( name: 'dog');
