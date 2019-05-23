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

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/generator/lib.php');
require_once(__DIR__ . '/../lib.php');

use tool_lifecycle\manager\workflow_manager;

/**
 * Setup for workflow actions tests.
 *
 * @package    tool_lifecycle
 * @category   test
 * @group      tool_lifecycle
 * @copyright  2017 Tobias Reischmann WWU
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
abstract class workflow_actions_testcase extends \advanced_testcase {
    protected $workflow1;
    protected $workflow2;
    protected $workflow3;

    public function setUp() {
        $this->resetAfterTest(true);
        $generator = $this->getDataGenerator()->get_plugin_generator('tool_lifecycle');

        // Remove preset workflows.
        $workflows = workflow_manager::get_active_automatic_workflows();
        foreach ($workflows as $workflow) {
            workflow_manager::remove($workflow->id, true);
            // Function remove() hasn't removed unremovable workflows (like presets) anymore.
        }

        $this->workflow1 = $generator->create_workflow();
        $this->workflow2 = $generator->create_workflow();
        $this->workflow3 = $generator->create_workflow();

        $this->assertFalse($this->workflow1->active);
        $this->assertFalse($this->workflow2->active);
        $this->assertFalse($this->workflow3->active);
        $this->assertNull($this->workflow1->sortindex);
        $this->assertNull($this->workflow2->sortindex);
        $this->assertNull($this->workflow3->sortindex);
    }
}
