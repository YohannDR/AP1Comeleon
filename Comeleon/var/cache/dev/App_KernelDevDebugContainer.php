<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPEmqD99\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPEmqD99/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPEmqD99.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPEmqD99\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPEmqD99\App_KernelDevDebugContainer([
    'container.build_hash' => 'PEmqD99',
    'container.build_id' => '7aed43ea',
    'container.build_time' => 1632858292,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPEmqD99');
