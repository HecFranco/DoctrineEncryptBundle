<?php

namespace Core\DoctrineEncryptBundle\Command;

use Core\DoctrineEncryptBundle\Encryptors\HaliteEncryptor;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
//
use ParagonIE\Halite\KeyFactory;
// attributes
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
  name: 'doctrine:encrypt:generate-secret-key',
  description: 'Get status of doctrine encrypt bundle and the database',
  hidden: false,
  aliases: ['doctrine:encrypt:generate-secret-key']
)]
class GenerateSecretKeyCommand extends AbstractCommand
{
  
  /**
   * The function checks the type of encryptor used and generates and saves an encryption key if it is a
   * HaliteEncryptor.
   * 
   * @param InputInterface input An instance of the InputInterface class, which represents the input
   * arguments and options for the command.
   * @param OutputInterface output The `` parameter is an instance of the `OutputInterface` class.
   * It is used to write output messages to the console or other output streams. You can use methods like
   * `writeln()` or `write()` on the `` object to display messages.
   * 
   * @return int The method is returning the value of the constant `AbstractCommand::SUCCESS`, which is
   * typically used to indicate a successful execution of the command.
   */
  protected function execute(InputInterface $input, OutputInterface $output): int
  {

    $encryptor = get_class($this->subscriber->getEncryptor());
    //
    if ($encryptor == HaliteEncryptor::class) {
      $encryptionKey =
        $encryptionKey = KeyFactory::generateEncryptionKey();
      KeyFactory::save($encryptionKey, './config/keys/doctrine_encrypt/.Halite.key');
    }
    //
    return AbstractCommand::SUCCESS;
  }
}
