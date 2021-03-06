<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace mod_registration\event;

defined("MOODLE_INTERNAL") || die();

/**
 * Registration viewed event
 *
 * @package mod_registration
 * @copyright 2015 Jan Eberhardt <eberhardt@math.tu-berlin.de>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class viewed_single extends base {

	/**
	 *
	 * @return string
	 */
	public static function get_name() {
		return "Registration viewed";
	}

	/**
	 * (non-PHPdoc)
	 * @see \core\event\base::get_description()
	 */
	public function get_description() {
		return "The user with id '$this->userid' viewed the registration with id '" . $this->objectid . "'.";
	}

	/**
	 * (non-PHPdoc)
	 * @see \core\event\base::init()
	 */
	public function init() {
		$this->base_init("r");
	}

	/**
	 * (non-PHPdoc)
	 * @see \mod_registration\event\base::get_legacy_eventname()
	 */
	public static function get_legacy_eventname() {
		return "registration_view";
	}
}
