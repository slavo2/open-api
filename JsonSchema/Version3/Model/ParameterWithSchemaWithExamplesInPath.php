<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\JsonSchema\Version3\Model;

class ParameterWithSchemaWithExamplesInPath extends \ArrayObject
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $in;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var bool
     */
    protected $required;
    /**
     * @var bool
     */
    protected $deprecated;
    /**
     * @var bool
     */
    protected $allowEmptyValue;
    /**
     * @var string
     */
    protected $style;
    /**
     * @var bool
     */
    protected $explode;
    /**
     * @var bool
     */
    protected $allowReserved;
    /**
     * @var Schema|Reference
     */
    protected $schema;
    /**
     * @var Example[]|Reference[]
     */
    protected $examples;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getIn(): ?string
    {
        return $this->in;
    }

    /**
     * @param string $in
     *
     * @return self
     */
    public function setIn(?string $in): self
    {
        $this->in = $in;

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
     * @return bool
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }

    /**
     * @param bool $required
     *
     * @return self
     */
    public function setRequired(?bool $required): self
    {
        $this->required = $required;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDeprecated(): ?bool
    {
        return $this->deprecated;
    }

    /**
     * @param bool $deprecated
     *
     * @return self
     */
    public function setDeprecated(?bool $deprecated): self
    {
        $this->deprecated = $deprecated;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowEmptyValue(): ?bool
    {
        return $this->allowEmptyValue;
    }

    /**
     * @param bool $allowEmptyValue
     *
     * @return self
     */
    public function setAllowEmptyValue(?bool $allowEmptyValue): self
    {
        $this->allowEmptyValue = $allowEmptyValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getStyle(): ?string
    {
        return $this->style;
    }

    /**
     * @param string $style
     *
     * @return self
     */
    public function setStyle(?string $style): self
    {
        $this->style = $style;

        return $this;
    }

    /**
     * @return bool
     */
    public function getExplode(): ?bool
    {
        return $this->explode;
    }

    /**
     * @param bool $explode
     *
     * @return self
     */
    public function setExplode(?bool $explode): self
    {
        $this->explode = $explode;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowReserved(): ?bool
    {
        return $this->allowReserved;
    }

    /**
     * @param bool $allowReserved
     *
     * @return self
     */
    public function setAllowReserved(?bool $allowReserved): self
    {
        $this->allowReserved = $allowReserved;

        return $this;
    }

    /**
     * @return Schema|Reference
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param Schema|Reference $schema
     *
     * @return self
     */
    public function setSchema($schema): self
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * @return Example[]|Reference[]
     */
    public function getExamples(): ?\ArrayObject
    {
        return $this->examples;
    }

    /**
     * @param Example[]|Reference[] $examples
     *
     * @return self
     */
    public function setExamples(?\ArrayObject $examples): self
    {
        $this->examples = $examples;

        return $this;
    }
}
