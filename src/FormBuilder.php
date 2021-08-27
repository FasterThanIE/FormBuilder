<?php

namespace TomTom\Forms;

use stdClass;
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

    /**
     * @var stdClass
     */
    private $dataHandler;

    public function __construct(string $formName, string $dataHandler)
    {
        $this->formName = $formName;
        $this->dataHandler = new $dataHandler();
        $this->formPool = new FormPool();
    }

    /**
     * @param string $name
     * @param string $fieldType
     * @param array $value
     * @return FormBuilder
     * @throws InvalidTypeException
     */
    public function add(string $name, string $fieldType, array $value = []): FormBuilder
    {
        if(!in_array($fieldType, self::ALLOWED_TYPES))
        {
            throw new InvalidTypeException();
        }
        $this->formPool->addField($name, $fieldType, $value);
        return $this;
    }
}