<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNQGBv84\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNQGBv84/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNQGBv84.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNQGBv84\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNQGBv84\App_KernelDevDebugContainer([
    'container.build_hash' => 'NQGBv84',
    'container.build_id' => '11a753ce',
    'container.build_time' => 1639402757,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNQGBv84');
