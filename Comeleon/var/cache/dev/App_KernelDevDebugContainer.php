<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIHlTxtx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIHlTxtx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIHlTxtx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIHlTxtx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIHlTxtx\App_KernelDevDebugContainer([
    'container.build_hash' => 'IHlTxtx',
    'container.build_id' => '1fee4e9a',
    'container.build_time' => 1632524904,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIHlTxtx');
