<?php
namespace ImagicalGamer\NoVoid;
    use pocketmine\plugin\PluginBase;
    use pocketmine\event\Listener;
    use pocketmine\level\Position;
    use pocketmine\level\Level;
    use pocketmine\Player;
    use pocketmine\entity\Entity;
    use pocketmine\math\Vector3;
    use pocketmine\utils\TextFormat as C;
    use pocketmine\event\player\PlayerMoveEvent;
    
class Main extends PluginBase implements Listener{
    
public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info(C::GREEN . "Enabled!");
}

public function checkVoid(PlayerMoveEvent $event){
    if($event->getTo()->getFloorY() < 0){
        $player = $event->getPlayer();
        $x = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getFloorX();
        $y = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getFloorY();
        $z = $this->getServer()->getDefaultLevel()->getSafeSpawn()->getFloorZ();
        $level = $this->getServer()->getDefaultLevel();
        $player->teleport(new Position($x, $y, $z, $level));
        $player->setHealth($player->getHealth(20));
         }
      }
}
