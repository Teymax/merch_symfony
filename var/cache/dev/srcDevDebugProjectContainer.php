<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOXrxAsc\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOXrxAsc/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerOXrxAsc.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerOXrxAsc\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerOXrxAsc\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'OXrxAsc',
    'container.build_id' => '873333bd',
    'container.build_time' => 1515764916,
));