<?php
class ForumAppSchema extends CakeSchema
{
	public $file = 'schema.php';

	public function before($event = [])
	{
		return true;
	}

	public function after($event = [])
	{
	}
}