<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.template_cache_warmer' shared service.

include_once $this->targetDirs[2].'\\vendor\\symfony\\twig-bundle\\TemplateIterator.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
include_once $this->targetDirs[2].'\\vendor\\symfony\\twig-bundle\\CacheWarmer\\TemplateCacheWarmer.php';

return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\ServiceLocator(array('twig' => function (): \Twig\Environment {
    return ($this->services['twig'] ?? $this->getTwigService());
})))->withContext('twig.template_cache_warmer', $this), new \Symfony\Bundle\TwigBundle\TemplateIterator(($this->services['kernel'] ?? $this->get('kernel')), ($this->targetDirs[2].'\\src'), array(($this->targetDirs[2].'/templates') => NULL, ($this->targetDirs[2].'\\vendor\\symfony\\twig-bridge/Resources/views/Form') => NULL)));