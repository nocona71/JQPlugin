<?php


namespace IvaPro073\JQPlugin;


use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class QuitJoinListener implements Listener
{
	public function onJoin(PlayerJoinEvent $event)
	{
		# $player = $event->getPlayer();
		# just say nothing
		$event->setJoinMessage("");

	}
	public function onQuit(PlayerQuitEvent $event)
	{
		# $player = $event->getPlayer();
		# just say nothing
		$event->setQuitMessage("");

	}

}