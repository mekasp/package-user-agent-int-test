<?php

namespace Mekas\UserAgent\Int\Test;

interface UserAgentInterface
{
    public function getBrowser(): ?string;

    public function getSystem(): ?string;
}

