<?php

namespace pxmodptdr\motd;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase{


    use SingletonTrait;
    protected function onLoad(): void
    {
        self::setInstance($this);
    }

    protected function onEnable(): void
    {
        $this->saveDefaultConfig();
        $this->getServer()->getNetwork()->setName($this->getConfig()->get("motd"));
        $this->getLogger()->info("§2Activation du plugin motd by Vanilla Shop !");
    }
 }
