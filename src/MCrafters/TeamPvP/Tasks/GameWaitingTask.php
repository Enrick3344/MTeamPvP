<?php
namespace MCrafters\TeamPvP\Tasks;


use pocketmine\scheduler\PluginTask;
use pocketmine\level\Level;
use pocketmine\Player;
use pocketmine\tile\Sign;
use pocketmine\scheduler\Task;
use pocketmine\scheduler\ServerScheduler;
use pocketmine\level\Position;
use pocketmine\math\Vector3;
use pocketmine\plugin\Plugin;
use MCrafters\TeamPvP\TeamPvP;

class GameWaitingTask extends PluginTask
{
    
    private $plugin;

    public function __construct(TeamPvP $plugin, \MCrafters\TeamPvP\Loader $c)
    {
        parent::__construct($c);
        $this->plugin = $plugin;
    }

    public function onRun($currentTick)
    {
        foreach ($this->plugin->reds as $r) {
            foreach ($this->plugin->blues as $b) {
                $this->plugin->getServer()->getPlayer($r)->sendPopup("§eWaiting for players..");
                $this->plugin->getServer()->getPlayer($b)->sendPopup("§eWaiting for players..");
            }
        }
    }
}

