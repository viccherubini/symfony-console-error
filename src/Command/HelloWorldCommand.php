<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'app:hello:world')]
final readonly class HelloWorldCommand
{
    public function __invoke(SymfonyStyle $io, #[Argument] string $name): int
    {
        $io->title('Hello World');
        $io->writeln(sprintf('Hello, %s!', $name));

        return Command::SUCCESS;
    }
}
