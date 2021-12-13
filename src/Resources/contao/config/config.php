<?php

/*
 * This file is part of Kursbuchungen.
 * 
 * (c) Eckhard Becker 2021 <info@diversworld.eu>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/diversworld/contao-coursebooking-bundle
 */

use Diversworld\ContaoCoursebookingBundle\Model\CoursesModel;

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['courses_module']['course_collection'] = array(
    'tables' => array('tl_courses')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_courses'] = CoursesModel::class;
