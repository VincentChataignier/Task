<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class TaskStartCommand
 *
 * @package App\Command
 */
class TaskStartCommand extends Command
{
    protected function configure()
    {
        $this->setName('task:start')
            ->addArgument('name');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);
    }
}