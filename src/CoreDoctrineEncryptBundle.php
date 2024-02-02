<?php

namespace Core\DoctrineEncryptBundle;

use JetBrains\PhpStorm\Pure;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Core\DoctrineEncryptBundle\DependencyInjection\DoctrineEncryptExtension;

class CoreDoctrineEncryptBundle extends Bundle
{
    #[Pure]
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new DoctrineEncryptExtension();
    }
}
