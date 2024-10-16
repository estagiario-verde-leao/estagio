<?php


namespace Source;


class SayHello
{
    protected $property;

    public function __construct($property)
    {
        $this->property = $property;
    }

    public function sayHello(): void
    {
        echo "Olá, " . $this->property . "!" . PHP_EOL;
    }

    public function __destruct()
    {
        //* Code
    }
}
