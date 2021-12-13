<?php

declare(strict_types=1);

/*
 * This file is part of Kursbuchungen.
 * 
 * (c) Eckhard Becker 2021 <info@diversworld.eu>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/diversworld/contao-coursebooking-bundle
 */

namespace Diversworld\ContaoCoursebookingBundle;

use Diversworld\ContaoCoursebookingBundle\DependencyInjection\DiversworldContaoCoursebookingExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class DiversworldContaoCoursebookingBundle
 */
class DiversworldContaoCoursebookingBundle extends Bundle
{
	public function getContainerExtension(): DiversworldContaoCoursebookingExtension
	{
		return new DiversworldContaoCoursebookingExtension();
	}

	/**
	 * {@inheritdoc}
	 */
	public function build(ContainerBuilder $container): void
	{
		parent::build($container);
		
	}
}
