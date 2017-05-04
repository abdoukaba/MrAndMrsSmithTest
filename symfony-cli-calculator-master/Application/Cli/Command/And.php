<?php

namespace Application\Cli\Command;

use Symfony\Component\Console\Input\InputArgument,
    Symfony\Component\Console;

/**
 * And command.
 *
 */
class BitwiseAnd extends Console\Command\Command {

    /**
     * Configure command, set parameters definition and help.
     */
    protected function configure() {
        $this
            ->setName('calc:and')
            ->setDescription('Calculates the bitwise AND between two numbers.')
            ->setDefinition(array(
                new InputArgument('x', InputArgument::REQUIRED, 'First number'),
                new InputArgument('y', InputArgument::REQUIRED, 'Second number ')
            ))
            ->setHelp(sprintf(
                '%sCalculates the bitwise of two numbers.%s',
                PHP_EOL,
                PHP_EOL
            ));
    }

    /**
     * Calculates the bitwise AND between  two numbers.
     */
    protected function execute(Console\Input\InputInterface $input, Console\Output\OutputInterface $output) {
        $result = $input->getArgument('x') & $input->getArgument('y');


        $output->write($result);
    }
}
