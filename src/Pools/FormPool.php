<?php

namespace TomTom\Forms\Pools;

class FormPool
{
    /**
     * @var array
     */
    private $fields;

    /**
     * @param string $fieldName
     * @param string $fieldType
     * @param null $defaultValue
     */
    public function addField(string $fieldName, string $fieldType, $defaultValue = null): void
    {
        $this->fields[$fieldName] = [
            'type' => $fieldType,
            'data' => $defaultValue,
        ];
    }
}