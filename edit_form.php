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
 * Instance configuration for the section links block.
 *
 * @package   block_newactivity
 * @copyright 2022 Martin Putzlocher
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_newactivity_edit_form extends block_edit_form {

    protected function specific_definition($mform)
    {
        // Section header title according to lang file.
        $mform->addElement('header', 'config_header', get_string('blocksettings','block'));

        // Change title of this block.
        $mform->addElement('text', 'config_title', get_string('blocktitle','block_newactivity'));
        $mform->setType('config_title', PARAM_TEXT);
    }
}
