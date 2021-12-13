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

use Diversworld\ContaoCoursebookingBundle\Controller\FrontendModule\CoursesModuleController;

/**
 * Backend modules
 */
$GLOBALS['TL_LANG']['MOD']['course_collection'] = ['Kursbuchungen', 'Buchungen für Kurse'];

/**
 * Frontend modules
 */
$GLOBALS['TL_LANG']['FMD'][CoursesModuleController::TYPE] = ['Kursliste', 'Kursliste'];

