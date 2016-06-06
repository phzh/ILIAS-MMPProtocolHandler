<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */

require_once('./Services/UIComponent/classes/class.ilUserInterfaceHookPlugin.php');

/**
 * @author Stefan Born <stefan.born@phzh.ch>
 */
class ilMMPProtocolHandlerPlugin extends ilUserInterfaceHookPlugin
{
	/**
	 * @return string
	 */
	final public function getPluginName()
	{
		return "MMPProtocolHandler";
	}

	/**
	 * Object initialization. Can be overwritten by plugin class
	 * (and should be made protected)
	 */
	protected function init()
	{
		$exists = in_array("mmp", stream_get_wrappers());
		if (!$exists)
			stream_wrapper_register("mmp", "MMPStreamWrapper", STREAM_IS_URL);
	}	
}

class MMPStreamWrapper
{
	public function url_stat($path, $flags)
	{
		return false;
	}
}