<?php
class ContactEntity
{
    private int $id;

    private string $user_name;
    private string $user_nameError;

    private string $user_email;
    private string $user_emailError;

    private string $user_pass;
    private string $user_passError;

    private int $user_phoneNumber;
    private int $user_phoneNumberError;



    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }
}
