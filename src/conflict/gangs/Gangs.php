<?php

/**
 * Gangs – Gangs.php
 *
 * Copyright (C) 2017 Jack Noordhuis
 *
 * This is private software, you cannot redistribute and/or modify it in any way
 * unless given explicit permission to do so. If you have not been given explicit
 * permission to view or modify this software you should take the appropriate actions
 * to remove this software from your device immediately.
 *
 * @author JackNoordhuis
 *
 * Created on 29/01/2017 at 4:46 PM
 *
 */

namespace conflict\gangs;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Gangs extends PluginBase {

	/** @var Config */
	private $settings = null;

	const SETTINGS_FILE = "Settings.yml";

	public function onEnable() {
		$this->loadConfigs();
	}

	/**
	 * Load all the base configuration files
	 */
	private function loadConfigs() {
		$this->saveResource(self::SETTINGS_FILE);
		$this->settings = new Config($this->getDataFolder() . self::SETTINGS_FILE, Config::YAML);
	}

	public function getSettings() : Config {
		return $this->settings;
	}

}