<?php

namespace Tests\chobie\Jira;


use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

abstract class AbstractTestCase extends TestCase
{

	use ProphecyTrait;

	/**
	 * Returns a test name.
	 *
	 * @return string
	 */
	protected function getTestName()
	{
		if ( method_exists($this, 'getName') ) {
			// PHPUnit 9-.
			return $this->getName(false);
		}

		// PHPUnit 10+.
		return $this->name();
	}

}
