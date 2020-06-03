<?php
namespace IvaPro073\JQPlugin;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
	public function onEnable()
	{
		$this->getLogger()->info("Das JQPlugin ist nun aktiv.");
		$this->getServer()->getPluginManager()->registerEvents(new QuitJoinListener(), $this);
	}
	public function onDisable()
	{
		$this->getLogger()->info("Das JQPlugin ist jetzt deaktiviert");
	}


}