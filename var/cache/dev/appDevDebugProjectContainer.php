<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerS8xgu78\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerS8xgu78/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerS8xgu78.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerS8xgu78\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerS8xgu78\appDevDebugProjectContainer([
    'container.build_hash' => 'S8xgu78',
    'container.build_id' => 'c6f252a2',
    'container.build_time' => 1564644983,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerS8xgu78');
