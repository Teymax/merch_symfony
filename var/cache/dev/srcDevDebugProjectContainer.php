<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSwNcK0K\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSwNcK0K/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerSwNcK0K.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerSwNcK0K\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerSwNcK0K\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'SwNcK0K',
    'container.build_id' => '592de7f4',
    'container.build_time' => 1515767219,
));
