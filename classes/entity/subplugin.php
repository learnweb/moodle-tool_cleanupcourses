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

namespace tool_lifecycle\entity;

defined('MOODLE_INTERNAL') || die();

/**
 * Subplugin class
 *
 * @package tool_lifecycle
 * @copyright  2017 Tobias Reischmann WWU
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

abstract class subplugin{

    /** int Id of subplugin */
    public $id;

    /** string instancename of the step*/
    public $instancename;

    /** int id of the workflow this step belongs to*/
    public $workflowid;

    /** string name of subplugin */
    public $subpluginname;

    /**
     * Creates a subplugin with subpluginname and optional id.
     * @oaram string $instancename name of the subplugin instance
     * @param string $subpluginname name of the subplugin
     * @param int $workflowid id of the workflow the subplugin belongs to
     * @param int $id id of the subplugin
     */
    public function __construct($instancename, $subpluginname, $workflowid, $id = null) {
        $this->subpluginname = $subpluginname;
        $this->instancename = $instancename;
        $this->workflowid = $workflowid;
        $this->id = $id;
    }

}