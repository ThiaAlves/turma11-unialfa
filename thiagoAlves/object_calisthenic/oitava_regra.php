<?php

//jeito errado
class StudentErrado
{
  public string $name;
  public string $email;
  public string $phone;
  public $address;
  public $city;
  public $country;
  public $courses;
  public $notes;
}

$student = new StudentErrado(
  "Testte",
  "jskdlfjdsk@gmail.com",
  "+74817489173",
  "...",
  "...",
  "...",
  "...",
  "..."
);

//jeito certo
class StudentCerto
{
  public string $name;
  public string $email;
  public string $phone;
}

class Address
{
  public string $address;
  public string $city;
  public string $country;
}

class Course
{
  public string $name;
  public string $description;
}

class Note
{
  public string $title;
  public string $description;
}







