<?php

namespace Mekas\UserAgent\Int\Test;

/**
 * Interface UserAgentInterface
 *
 * @package Mekas\UserAgent\Int\Test v1.0.1
 */

interface UserAgentInterface
{
    public function parse();

    public function getBrowser(): ?string;

    public function getSystem(): ?string;
}

