<?php
namespace GDO\Mailer;

use GDO\Core\GDO_Module;

/**
 * Mailer module that can send Mail.
 *
 * @version 7.0.1
 * @since 7.0.1
 * @author gizmore
 * @license GDOv7-LICENSE
 * @see Mail
 * @see Mailer
 */
final class Module_Mailer extends GDO_Module
{

	public int $priority = 80;

	public function getDependencies(): array
	{
		return [
			'Mail',
		];
	}

}
