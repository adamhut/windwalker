<?php
/**
 * Part of Windwalker project. 
 *
 * @copyright  Copyright (C) 2014 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

namespace Windwalker\Loader\Test\Mock;

use Windwalker\Loader\Loader\FileMappingLoader;

/**
 * The MockPsr0Loader class.
 * 
 * @since  {DEPLOY_VERSION}
 */
class MockFileMappingLoader extends FileMappingLoader
{
	/**
	 * Property lastRequired.
	 *
	 * @var string
	 */
	protected $lastRequired;

	/**
	 * Loads the given class or interface.
	 *
	 * @param string $className The name of the class to load.
	 *
	 * @return static
	 */
	public function loadClass($className)
	{
		$this->lastRequired = null;

		return parent::loadClass($className);
	}

	/**
	 * Method to get property LastRequired
	 *
	 * @return  string
	 */
	public function getLastRequired()
	{
		return $this->lastRequired;
	}

	/**
	 * requireFile
	 *
	 * @param string $file
	 *
	 * @return  static
	 */
	protected function requireFile($file)
	{
		$this->lastRequired = $file;

		return $this;
	}
}
