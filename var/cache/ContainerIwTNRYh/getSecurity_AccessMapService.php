<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

include_once $this->targetDirs[2].'\\vendor\\symfony\\security\\Http\\AccessMapInterface.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\security\\Http\\AccessMap.php';

return $this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap();