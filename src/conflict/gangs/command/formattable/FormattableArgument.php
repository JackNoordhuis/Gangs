<?php

/**
 * Gangs – FormattableArgument.php
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
 * Created on 30/01/2017 at 8:48 PM
 *
 */

namespace conflict\gangs\command\formattable;

class FormattableArgument implements Formattable {

	/** @var int */
	private $formatId = self::FORMAT_STRING;

	public function __construct(int $format) {
		$this->formatId = $format;
	}

	public function getFormat() : int {
		return $this->formatId;
	}

}