<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Model;

class Schema extends \ArrayObject
{
    /**
     * @var string
     */
    protected $dollarRef;
    /**
     * @var string
     */
    protected $format;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var mixed
     */
    protected $default;
    /**
     * @var float
     */
    protected $multipleOf;
    /**
     * @var float
     */
    protected $maximum;
    /**
     * @var bool
     */
    protected $exclusiveMaximum;
    /**
     * @var float
     */
    protected $minimum;
    /**
     * @var bool
     */
    protected $exclusiveMinimum;
    /**
     * @var int
     */
    protected $maxLength;
    /**
     * @var int
     */
    protected $minLength;
    /**
     * @var string
     */
    protected $pattern;
    /**
     * @var int
     */
    protected $maxItems;
    /**
     * @var int
     */
    protected $minItems;
    /**
     * @var bool
     */
    protected $uniqueItems;
    /**
     * @var int
     */
    protected $maxProperties;
    /**
     * @var int
     */
    protected $minProperties;
    /**
     * @var string[]
     */
    protected $required;
    /**
     * @var mixed[]
     */
    protected $enum;
    /**
     * @var Schema|bool
     */
    protected $additionalProperties;
    /**
     * @var mixed|mixed[]
     */
    protected $type;
    /**
     * @var Schema|Schema[]
     */
    protected $items;
    /**
     * @var Schema[]
     */
    protected $allOf;
    /**
     * @var Schema[]
     */
    protected $properties;
    /**
     * @var string
     */
    protected $discriminator;
    /**
     * @var bool
     */
    protected $readOnly;
    /**
     * @var Xml
     */
    protected $xml;
    /**
     * information about external documentation.
     *
     * @var ExternalDocs
     */
    protected $externalDocs;
    /**
     * @var mixed
     */
    protected $example;

    /**
     * @return string
     */
    public function getDollarRef(): ?string
    {
        return $this->dollarRef;
    }

    /**
     * @param string $dollarRef
     *
     * @return self
     */
    public function setDollarRef(?string $dollarRef): self
    {
        $this->dollarRef = $dollarRef;

        return $this;
    }

    /**
     * @return string
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * @param string $format
     *
     * @return self
     */
    public function setFormat(?string $format): self
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param mixed $default
     *
     * @return self
     */
    public function setDefault($default): self
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return float
     */
    public function getMultipleOf(): ?float
    {
        return $this->multipleOf;
    }

    /**
     * @param float $multipleOf
     *
     * @return self
     */
    public function setMultipleOf(?float $multipleOf): self
    {
        $this->multipleOf = $multipleOf;

        return $this;
    }

    /**
     * @return float
     */
    public function getMaximum(): ?float
    {
        return $this->maximum;
    }

    /**
     * @param float $maximum
     *
     * @return self
     */
    public function setMaximum(?float $maximum): self
    {
        $this->maximum = $maximum;

        return $this;
    }

    /**
     * @return bool
     */
    public function getExclusiveMaximum(): ?bool
    {
        return $this->exclusiveMaximum;
    }

    /**
     * @param bool $exclusiveMaximum
     *
     * @return self
     */
    public function setExclusiveMaximum(?bool $exclusiveMaximum): self
    {
        $this->exclusiveMaximum = $exclusiveMaximum;

        return $this;
    }

    /**
     * @return float
     */
    public function getMinimum(): ?float
    {
        return $this->minimum;
    }

    /**
     * @param float $minimum
     *
     * @return self
     */
    public function setMinimum(?float $minimum): self
    {
        $this->minimum = $minimum;

        return $this;
    }

    /**
     * @return bool
     */
    public function getExclusiveMinimum(): ?bool
    {
        return $this->exclusiveMinimum;
    }

    /**
     * @param bool $exclusiveMinimum
     *
     * @return self
     */
    public function setExclusiveMinimum(?bool $exclusiveMinimum): self
    {
        $this->exclusiveMinimum = $exclusiveMinimum;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }

    /**
     * @param int $maxLength
     *
     * @return self
     */
    public function setMaxLength(?int $maxLength): self
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinLength(): ?int
    {
        return $this->minLength;
    }

    /**
     * @param int $minLength
     *
     * @return self
     */
    public function setMinLength(?int $minLength): self
    {
        $this->minLength = $minLength;

        return $this;
    }

    /**
     * @return string
     */
    public function getPattern(): ?string
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     *
     * @return self
     */
    public function setPattern(?string $pattern): self
    {
        $this->pattern = $pattern;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxItems(): ?int
    {
        return $this->maxItems;
    }

    /**
     * @param int $maxItems
     *
     * @return self
     */
    public function setMaxItems(?int $maxItems): self
    {
        $this->maxItems = $maxItems;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinItems(): ?int
    {
        return $this->minItems;
    }

    /**
     * @param int $minItems
     *
     * @return self
     */
    public function setMinItems(?int $minItems): self
    {
        $this->minItems = $minItems;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUniqueItems(): ?bool
    {
        return $this->uniqueItems;
    }

    /**
     * @param bool $uniqueItems
     *
     * @return self
     */
    public function setUniqueItems(?bool $uniqueItems): self
    {
        $this->uniqueItems = $uniqueItems;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxProperties(): ?int
    {
        return $this->maxProperties;
    }

    /**
     * @param int $maxProperties
     *
     * @return self
     */
    public function setMaxProperties(?int $maxProperties): self
    {
        $this->maxProperties = $maxProperties;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinProperties(): ?int
    {
        return $this->minProperties;
    }

    /**
     * @param int $minProperties
     *
     * @return self
     */
    public function setMinProperties(?int $minProperties): self
    {
        $this->minProperties = $minProperties;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRequired(): ?array
    {
        return $this->required;
    }

    /**
     * @param string[] $required
     *
     * @return self
     */
    public function setRequired(?array $required): self
    {
        $this->required = $required;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getEnum(): ?array
    {
        return $this->enum;
    }

    /**
     * @param mixed[] $enum
     *
     * @return self
     */
    public function setEnum(?array $enum): self
    {
        $this->enum = $enum;

        return $this;
    }

    /**
     * @return Schema|bool
     */
    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }

    /**
     * @param Schema|bool $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties($additionalProperties): self
    {
        $this->additionalProperties = $additionalProperties;

        return $this;
    }

    /**
     * @return mixed|mixed[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed|mixed[] $type
     *
     * @return self
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Schema|Schema[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Schema|Schema[] $items
     *
     * @return self
     */
    public function setItems($items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return Schema[]
     */
    public function getAllOf(): ?array
    {
        return $this->allOf;
    }

    /**
     * @param Schema[] $allOf
     *
     * @return self
     */
    public function setAllOf(?array $allOf): self
    {
        $this->allOf = $allOf;

        return $this;
    }

    /**
     * @return Schema[]
     */
    public function getProperties(): ?\ArrayObject
    {
        return $this->properties;
    }

    /**
     * @param Schema[] $properties
     *
     * @return self
     */
    public function setProperties(?\ArrayObject $properties): self
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscriminator(): ?string
    {
        return $this->discriminator;
    }

    /**
     * @param string $discriminator
     *
     * @return self
     */
    public function setDiscriminator(?string $discriminator): self
    {
        $this->discriminator = $discriminator;

        return $this;
    }

    /**
     * @return bool
     */
    public function getReadOnly(): ?bool
    {
        return $this->readOnly;
    }

    /**
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(?bool $readOnly): self
    {
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * @return Xml
     */
    public function getXml(): ?Xml
    {
        return $this->xml;
    }

    /**
     * @param Xml $xml
     *
     * @return self
     */
    public function setXml(?Xml $xml): self
    {
        $this->xml = $xml;

        return $this;
    }

    /**
     * information about external documentation.
     *
     * @return ExternalDocs
     */
    public function getExternalDocs(): ?ExternalDocs
    {
        return $this->externalDocs;
    }

    /**
     * information about external documentation.
     *
     * @param ExternalDocs $externalDocs
     *
     * @return self
     */
    public function setExternalDocs(?ExternalDocs $externalDocs): self
    {
        $this->externalDocs = $externalDocs;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * @param mixed $example
     *
     * @return self
     */
    public function setExample($example): self
    {
        $this->example = $example;

        return $this;
    }
}
