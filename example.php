<?php

use TomTom\Forms\FormBuilder;
use TomTom\Test\User;

require __DIR__ . '/vendor/autoload.php';


$builder = new FormBuilder("registration", User::class);

$builder->add("a",FormBuilder::TYPE_TEXT)
    ->add("email", FormBuilder::TYPE_EMAIL);
