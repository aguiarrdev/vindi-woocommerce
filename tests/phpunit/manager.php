<?php

require_once __DIR__ . '/local-factory.php';
class Manager
{
	/**
	 * @var self
	 */
	public static $instance = null;
	/**
	 * @var Local_Factory
	 */
	private $local_factory;

	private function __construct()
	{
		$this->local_factory = new Local_Factory();
	}

	public static function instance()
	{
		if (is_null(self::$instance)) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function get_local_factory()
	{
		return $this->local_factory;
	}
}
