<?php

/*
 * FusionPBX
 * Version: MPL 1.1
 *
 * The contents of this file are subject to the Mozilla Public License Version
 * 1.1 (the "License"); you may not use this file except in compliance with
 * the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 *
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * The Original Code is FusionPBX
 *
 * The Initial Developer of the Original Code is
 * Mark J Crane <markjcrane@fusionpbx.com>
 * Portions created by the Initial Developer are Copyright (C) 2008-2024
 * the Initial Developer. All Rights Reserved.
 *
 * Contributor(s):
 * Mark J Crane <markjcrane@fusionpbx.com>
 * Tim Fry <tim@fusionpbx.com>
 */

/**
 * Description of button_search
 *
 * @author Tim Fry <tim@fusionpbx.com>
 */
class button_search extends button {
	public static function create($show, $array = []): string {
		global $text;
		$default_values = [
			'label'=>$text['button-search'],
			'icon'=>$_SESSION['theme']['button_icon_search'],
			'type'=>'submit',
			'id'=>'btn_search',
			'style'=> ($show ? null : 'display: none;')
		];
		return parent::create(array_merge($default_values, $array));
	}
}
