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
     * @param array $data
     */
    public function addField(string $fieldName, string $fieldType, array $data = []): void
    {
        $this->fields[$fieldName] = [
            'type' => $fieldType,
            'data' => array_key_exists('data', $data) ? $data['data'] : [],
            'options' => array_key_exists('options', $data) ? $data['options'] : [],
            'class' => array_key_exists('class', $data) ? $data['class'] : [],
        ];
    }
}