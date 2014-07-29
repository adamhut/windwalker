<?php
/**
 * Part of Windwalker project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Windwalker\Database\Driver;

/**
 * DatabseAwareTrait
 */
trait DatabseAwareTrait
{
	/**
	 * Property db.
	 *
	 * @var  DatabaseDriver
	 */
	protected $db = null;

	/**
	 * Constructor.
	 *
	 * @param DatabaseDriver $db
	 */
	public function __construct(DatabaseDriver $db)
	{
		$this->setDb($db);
	}

	/**
	 * getDb
	 *
	 * @return  DatabaseDriver
	 */
	public function getDb()
	{
		return $this->db;
	}

	/**
	 * setDb
	 *
	 * @param   DatabaseDriver $db
	 *
	 * @return  static  Return self to support chaining.
	 */
	public function setDb($db)
	{
		$this->db = $db;

		return $this;
	}
}
 