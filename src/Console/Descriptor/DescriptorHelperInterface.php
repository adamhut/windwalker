<?php
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2008 - 2014 Asikart.com. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

namespace Windwalker\Console\Descriptor;

use Windwalker\Console\Command\AbstractCommand;

/**
 * A descriptor helper to get different descriptor and render it.
 *
 * @since  1.0
 */
interface DescriptorHelperInterface
{
	/**
	 * Describe a command detail.
	 *
	 * @param   AbstractCommand  $command  The command to described.
	 *
	 * @return  string  Return the described text.
	 *
	 * @since   1.0
	 */
	public function describe(AbstractCommand $command);
}