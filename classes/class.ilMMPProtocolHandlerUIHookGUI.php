<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */

include_once("./Services/UIComponent/classes/class.ilUIHookPluginGUI.php");

/**
 * @author Stefan Born <stefan.born@phzh.ch>
 */
class ilMMPProtocolHandlerUIHookGUI extends ilUIHookPluginGUI
{
	public function getHTML($a_comp, $a_part, $a_par = array())
	{
		return array("mode" => ilUIHookPluginGUI::KEEP, "html" => "");
	}
}