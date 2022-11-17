<?php

/*
Using polymorphism instead of swich case
*/

abstract class Person
{
    abstract public function greet();
}

class English extends Person
{
    public function greet()
    {
        return 'Hello';
    }
}

class French extends Person
{
    public function greet()
    {
        return 'Bonjour!';
    }
}

class Arabic extends Person
{
    public function greet()
    {
        return "مرحبا";
    }
}

$person = new French();
echo $person->greet();



/*
    Using dependency injection 
    also following the naming convention in the code of conduct
    and the Source code structure
*/

class Author
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
}

class Question
{
    private $author;
    private $question;

    public function __construct($question, Author $author)
    {
        $this->author = $author;
        $this->question = $question;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getQuestion()
    {
        return $this->question;
    }
}
