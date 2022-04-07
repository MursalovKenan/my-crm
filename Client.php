<?php

namespace app;

class Client
{
    private $firstName;
    private $lastMame;
    private $phone;

    /**
     * @param $firstName
     * @param $lastMame
     * @param $phone
     */
    public function __construct($firstName, $lastMame, $phone)
    {
        $this->firstName = $firstName;
        $this->lastMame = $lastMame;
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastMame(): string
    {
        return $this->lastMame;
    }

    /**
     * @return mixed
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName(mixed $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastMame
     */
    public function setLastMame(mixed $lastMame): void
    {
        $this->lastMame = $lastMame;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone(mixed $phone): void
    {
        $this->phone = $phone;
    }

    public function printInfo()
    {
        echo 'first name is ' . $this->firstName. "\n";
        echo 'last name is ' , $this->lastMame. "\n";
        echo 'Phone is ' . $this->phone;
    }

}