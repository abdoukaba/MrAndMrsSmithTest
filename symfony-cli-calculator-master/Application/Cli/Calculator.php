<?php

namespace Application\Cli;

use Symfony\Component\Console\Application,
	Application\Cli\Command;
    
/**
 * Calculator application.
 *
 */
class Calculator extends Application {
	/**
     * Calculator constructor.
     */
    public function __construct() {
    	parent::__construct('Welcome to  CLI Calculator', '1.0');
    	
    	$this->addCommands(array(
			new Command\Add(),
			new Command\Sub(),
			new Command\Mul(),
			new Command\Div(),
			new Command\And(),
			new Command\Or()
		));
    }
}
