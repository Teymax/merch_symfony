<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Repository\MasterListingRepository' shared autowired service.

include_once $this->targetDirs[2].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Persistence\\ObjectRepository.php';
include_once $this->targetDirs[2].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Selectable.php';
include_once $this->targetDirs[2].'\\vendor\\doctrine\\orm\\lib\\Doctrine\\ORM\\EntityRepository.php';
include_once $this->targetDirs[2].'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepositoryInterface.php';
include_once $this->targetDirs[2].'\\vendor\\doctrine\\doctrine-bundle\\Repository\\ServiceEntityRepository.php';
include_once $this->targetDirs[2].'\\src\\Repository\\MasterListingRepository.php';

return $this->privates['App\Repository\MasterListingRepository'] = new \App\Repository\MasterListingRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));