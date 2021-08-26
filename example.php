<?php

use TomTom\Forms\FormBuilder;

require __DIR__ . '/vendor/autoload.php';


$builder = new FormBuilder("registration");

$builder->add("a",FormBuilder::TYPE_TEXT)
    ->add("email", FormBuilder::TYPE_EMAIL);
