<?php

namespace Ambta\DoctrineEncryptBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Ambta\DoctrineEncryptBundle\DependencyInjection\DoctrineEncryptExtension;

class AmbtaDoctrineEncryptBundle extends Bundle
{

  public function getContainerExtension(): ?ExtensionInterface
  {
    return new DoctrineEncryptExtension();
  }
}
