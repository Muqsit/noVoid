<?php
namespace ImagicalGamer\NoVoid;
    use pocketmine\plugin\PluginBase;
    use pocketmine\event\Listener;
    use pocketmine\level\Position;
    use pocketmine\level\Level;
    use pocketmine\Player;
    use pocketmine\entity\Entity;
    use pocketmine\math\Vector3;
    use pocketmine\event\player\PlayerMoveEvent;
    
class Main extends PluginBase implements Listener{
    
public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
}

public function checkVoid(PlayerMoveEvent $event){
    $player = $event->getPlayer();
    $x = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getFloorX();
    $y = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getFloorY();
    $z = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getFloorZ();
    $level = $this->getServer()->getDefaultLevel();
        if($event->getTo()->getFloorY() < 0){
            switch(mt_rand(1, 2) == 1){
              case 1:
              $player->teleport(new Position($x, $y, $z, $level));
              $player->setHealth($player->getHealth(20));
              $player->sendTip("§d§l»§r§aYou were saved from the §eVOID §d§l«");
              break;
              case 2:
              break;
             }
         }
      }
}
