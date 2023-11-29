<?php

declare(strict_types=1);

namespace Firefox;

class Version
{
    public readonly string $version;
    public readonly int $major;

    public function __construct(string $version)
    {
        $this->version = $version;
        $this->major = $this->setMajor($version);
    }
    /**
     * Get the major version number (91) from a string such as 91.0.1
     */
    private function setMajor(): int
    {
        return (int) explode('.', $this->version)[0];
    }
}

var_dump(new Version('115.1.0'));
