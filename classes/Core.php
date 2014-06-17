<?php
class Core{

	public function run() {
		//echo "Hi from within run method";
		ob_start();
		require_once(Url::getPage());
		ob_get_flush();
	}
}

