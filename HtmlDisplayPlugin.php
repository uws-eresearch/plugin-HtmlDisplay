<?php

class HtmlDisplayPlugin extends Omeka_Plugin_AbstractPlugin {
	
	protected $_hooks = array(
		'admin_items_show'
	);
	
	protected $_filters = array(
		'file_markup'
	);
	
	public function filterFileMarkup($markup, $f){
		$file = $f['file'];
		$mime = $file->mime_type;
		if($mime == "text/html"){
			$path = $file->getWebPath();
			$html = file_get_contents($path);
			return $html;
		}
		else{
			return $markup;
		}
	}
	
	public function hookAdminItemsShow($args)
	{
		//Empty for the moment
	}
	
}