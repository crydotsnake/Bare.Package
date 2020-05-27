<?php
namespace Neos\Flow\Core\Migrations;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

/**
 * Adjusts code to package renaming from "TYPO3.Party" to "Neos.Party"
 */
class Version20161124225257 extends AbstractMigration
{

	public function getIdentifier()
	{
		return 'Neos.Party-20161124225257';
	}

	/**
	 * @return void
	 */
	public function up()
	{
		$this->searchAndReplace('TYPO3\Party', 'Neos\Party');
		$this->searchAndReplace('TYPO3.Party', 'Neos.Party');
	}
}
