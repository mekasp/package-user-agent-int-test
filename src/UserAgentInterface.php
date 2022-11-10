<?php

namespace Mekas\UserAgent\Int\Test;

/**
 * Interface UserAgentInterface
 * @package Mekas\UserAgent\Int\Test v1.0.0
 */

interface UserAgentInterface
{
    public function getBrowser(): ?string;

    public function getSystem(): ?string;
}

