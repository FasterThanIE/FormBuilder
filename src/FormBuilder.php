<?php

namespace TomTom\Forms;

use TomTom\Forms\Interfaces\FormBuilderInterface;
use TomTom\Forms\Pools\FormPool;

class FormBuilder implements FormBuilderInterface
{
    const TYPE_TEXT = "text";
    const TYPE_EMAIL = "email";
    const TYPE_SUBMIT = "submit";
    const TYPE_PASSWORD = "password";

    const ALLOWED_TYPES = [
        self::TYPE_EMAIL, self::TYPE_TEXT, self::TYPE_SUBMIT, self::TYPE_PASSWORD,
    ];

    /**
     * @var string
     */
    private $formName;

    /**
     * @var FormPool
     */
    private $formPool;

    public function __construct(string $formName)
    {
        $this->formName = $formName;
        $this->formPool = new FormPool();
    }

    /**
     * @param string $name
     * @param string $fieldType
     * @param null $value
     * @return FormBuilder
     * @throws InvalidTypeException
     */
    public function add(string $name, string $fieldType, $value = null): FormBuilder
    {
        if(!in_array($fieldType, self::ALLOWED_TYPES))
        {
            throw new InvalidTypeException();
        }
        $this->formPool->addField($name, $fieldType);
        return $this;
    }
}