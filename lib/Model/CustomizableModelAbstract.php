<?php

namespace OpenAPI\Client\Model;

abstract class CustomizableModelAbstract
{
    public function __construct(private array $customizableFields)
    {
    }

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
    public function setCustomizableFields(array $customizableFields): self
    {
        $this->customizableFields = $customizableFields;
        return $this;
    }

    /**
     * @param array $customizableFields
     * @return $this
     */
    public function addCustomizableFields(array $customizableFields): self
    {
        $fields = $this->customizableFields ?? [];
        $this->customizableFields = array_merge($fields, $customizableFields);
        return $this;
    }
}
