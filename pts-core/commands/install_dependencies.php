<?php

/*
	Phoronix Test Suite
	URLs: http://www.phoronix.com, http://www.phoronix-test-suite.com/
	Copyright (C) 2008 - 2010, Phoronix Media
	Copyright (C) 2008 - 2010, Michael Larabel

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

class install_dependencies implements pts_option_interface
{
	public static function argument_checks()
	{
		return array(
		new pts_argument_check(0, "!empty", null, "The name of a test, suite, or result file must be entered.")
		);
	}
	public static function run($r)
	{
		$test_profiles = pts_types::identifiers_to_test_profile_objects($r, true, true);
		pts_client::set_test_flags(pts_c::auto_mode);
		pts_external_dependencies::install_dependencies($test_profiles);
	}
}

?>
