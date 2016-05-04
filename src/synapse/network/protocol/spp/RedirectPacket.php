<?php

/*
 *
 *  _____   _____   __   _   _   _____  __    __  _____
 * /  ___| | ____| |  \ | | | | /  ___/ \ \  / / /  ___/
 * | |     | |__   |   \| | | | | |___   \ \/ /  | |___
 * | |  _  |  __|  | |\   | | | \___  \   \  /   \___  \
 * | |_| | | |___  | | \  | | |  ___| |   / /     ___| |
 * \_____/ |_____| |_|  \_| |_| /_____/  /_/     /_____/
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author iTX Technologies
 * @link https://itxtech.org
 *
 */
 
namespace synapse\network\protocol\spp;

use synapse\utils\UUID;

class RedirectPacket extends DataPacket{
	const NETWORK_ID = Info::REDIRECT_PACKET;

	/** @var UUID */
	public $uuid;
	public $mcpebuffer;

	public function encode(){
		$this->reset();
		$this->putUUID($this->uuid);
		$this->putString($this->mcpebuffer);
	}

	public function decode(){
		$this->uuid = $this->getUUID();
		$this->mcpebuffer = $this->getString();
	}
}