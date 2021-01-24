<?php 
class LauncherHelperSchema extends CakeSchema {

	public $file = 'schema.php';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $launcherhelper__launcher_images = array(
	    'id' => array(
	        'type' => 'integer',
            'null' => false,
            'default' => null,
            'length' => 10,
            'key' => 'primary'
        ),
        'image' => array(
            'type' => 'string',
            'null' => false,
            'default' => null,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        )
    );
}
