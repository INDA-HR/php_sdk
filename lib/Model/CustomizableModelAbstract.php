<?php

namespace OpenAPI\Client\Model;

abstract class CustomizableModelAbstract
{
    public function __construct(private array $customizableFields)
    {}

    /**
     * @return mixed
     */
    public function getCustomizableFields(): array
    {
        return $this->customizableFields;
    }

    /**
     * @param mixed $customizableFields
     * @return CustomizableModelAbstract
     */
    public function setCustomizableFields(array $customizableFields)
    {
        $this->customizableFields = $customizableFields;
        return $this;
    }
}
