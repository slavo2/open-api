<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Tests\Expected\Model;

class Foo
{
    /**
     * @var string
     */
    protected $bar;
    /**
     * A description.
     *
     * @var string
     */
    protected $foo;

    /**
     * @return string
     */
    public function getBar(): ?string
    {
        return $this->bar;
    }

    /**
     * @param string $bar
     *
     * @return self
     */
    public function setBar(?string $bar): self
    {
        $this->bar = $bar;

        return $this;
    }

    /**
     * A description.
     *
     * @return string
     */
    public function getFoo(): ?string
    {
        return $this->foo;
    }

    /**
     * A description.
     *
     * @param string $foo
     *
     * @return self
     */
    public function setFoo(?string $foo): self
    {
        $this->foo = $foo;

        return $this;
    }
}
