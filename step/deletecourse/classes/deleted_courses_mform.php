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

/**
 * A moodle form for filtering the deleted courses table
 *
 * @package    lifecyclestep_deletecourse
 * @copyright  2021 Justus Dieckmann WWU
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace lifecyclestep_deletecourse;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/formslib.php');

/**
 * A moodle form for filtering the deleted courses table
 *
 * @package    lifecyclestep_deletecourse
 * @copyright  2021 Justus Dieckmann WWU
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class deleted_courses_mform extends \moodleform {

    /**
     * Defines forms elements
     */
    public function definition() {
        $mform = $this->_form;

        $mform->addElement('text', 'id', get_string('id', 'lifecyclestep_deletecourse'));
        $mform->setType('id', PARAM_ALPHANUM);

        $mform->addElement('text', 'shortname', get_string('shortname'));
        $mform->setType('shortname', PARAM_TEXT);

        $mform->addElement('text', 'fullname', get_string('fullname'));
        $mform->setType('fullname', PARAM_TEXT);

        $mform->addElement('text', 'idnumber', get_string('idnumber'));
        $mform->setType('idnumber', PARAM_TEXT);

        $this->add_action_buttons(true, get_string('apply', 'tool_lifecycle'));
    }

}
