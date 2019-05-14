<?php
// = คอมเม้น ซึ่ง PHP จะไม่อ่านละมั้ง แต่ไงก็ตาม จะเรียนให้ละเอียดยิบเลย!! มาเริ่มก่อน PHP จะมีแท็กเปิด/ปิด เปิด<?php <?ปิดก่อน Q:ทำไมต้องรู้? A: PHP จะใช้ เว็ปต่าง โดยเพราะเว็ปที่เปิดบนXammp เราพูดเริ่มต้นพอ Pocketmine ไม่ใช้ <? แท็หปิดผมไม่แน่ใจ namespace คือชื่อของไฟล์ที่ทำงาน ในPHP มั้ง use pocketmine & อื่น เช่น joe77777 ซึ่ง เราจะใช้commond ต้องใส่ use pocketmine\command\Command; use   pocketmine\command\CommandSender; จะเป็นตัวเรียกใช้Command class ผมไม่แน่ใจ
 
namespace Cmd;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase
{

    public function onEnable() // ตัวเปิดPlugin จำเป็น
    {
        $this->saveDefaultConfig();
        $this->getServer()->getLogger()->info(TextFormat::GREEN."CmdUI is ON!!!");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool // ตรงนี้จะเป็นCommand CommandSender $sender, ตัวแปล CommandSender $sender ใสให้ถูกดูดี ตรง $this->Cmd($ตัวนี้ถ้าเป็นตัวแปล CommandSender เป็น$sender ให้ใส่เป็นsenderนะ); Command $command switch ($command->getName()){ case"ชื่อcommand ที่ตั่งในplugin.yml": if(){} if เป็นการเช็ค if($ตัวนี้ถ้าเป็นตัวแปล CommandSender เป็น$sender ให้ใส่เป็นsenderนะ instanceof Player){ ที่บอกไปif เป็นการเช็ค ถ้าConsle พิมจะไม่ขึ้นอะไรนอกจาก ข้อตวาม }else{  หรือ $this->ชื่อUI($ตัวนี้ถ้าเป็นตัวแปล CommandSender เป็น$sender ให้ใส่เป็นsenderนะ);ตามนั้น
    {
        switch ($command->getName()){
            case "Cmd":
                if($sender instanceof Player){
                    $this->Cmd($sender);
                }else{
                    $sender->sendMessage("พิมคำสั่งนี้ในเกมเท่านั้น!.");
                }
                break;
        }
        return true;
    }

// ตรง public function >CMD<ชื่อของ UI $player  มาจาก use pocketmine\Player; ตรง $form = $api->createSimpleForm<(function (Player $player, int $data = null){ CreateSimpleFormคือหน้าตาUIปกติ เราจะข้ามไปตรง case 0: ปุ่มที่1 case 1: ปุ่มที่2 ลืมสังเกตตรงCreateSimpleForm(functuon (Player >$player< ตรงนี้ตัวแปลไฟล์ Player ที่มีการนำเข้า title หัวข้อ content คือ คำอธิบาย addButtonคือ ปุ่ม และให้ตรงกับ case 0: ปุ่มที่1 case 1: ปุ่มที่2 ให้ครบนะครับ $form->sendToPlayer($player ตัวแปลไฟล์ Player); ลืม return true;เป็นปุ่มกาบาด และใส่ตรง ท้าย return $form; ใส่ในไต้บรรทัดsendToPlayer
    public function Cmd($player){
		$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
		$form = $api->createSimpleForm(function (Player $player, int $data = null){
			$result = $data;
			if($result === null){
				return true;
				}
				switch($result){
					case "0";
					$this->Cmd1($player);
					break;
					
					case "1";
					$this->Cmd2($player);
					break;

            }
        });
        $form->setTitle("เมนูเซิฟเวอร์");
        $form->setContent("Test");
        $form->addButton("§l§b♣§fดูกฏของเซิฟเวอร§b♣์", 1,"http://avengetech.me/items/37-0.png");
        $form->addButton("§l§b♣§fวิธีการเล่นเซิฟเวอร์§b♣", 1,"http://avengetech.me/items/37-0.png");
        $form->sendToPlayer($player);
        return $form;
    }

     public function Cmd1($player){
		$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
		$form = $api->createSimpleForm(function (Player $player, $data = null){
		$result = $data[0];
					
		if($result === null){
			return true;
		}
			switch($result){
				case 0:
				break;
			}
		});
		$form->setTitle("§fINFO");
		$form->setContent("§f1.ห้ามขออะไรต่างๆจากแอดมินทั้งสิ้นเลยนะจบครับ^•^");
		$form->addButton("เข้าใจละ^-^");	
		$form->sendToPlayer($player);
	}

   public function Cmd2($player){
		$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
		$form = $api->createSimpleForm(function (Player $player, $data = null){
		$result = $data[0];
					
		if($result === null){
			return true;
		}
			switch($result){
				case 0:
				break;
			}
		});
		$form->setTitle("วิธีการเล่นเซิฟ");
		$form->setContent("§fมากมายเลยให้เพื่อนๆได้เล่นกัน\n1.ให้เพื่อนๆไปหาเงินจากการทำอาชีพต่างๆโดยการพิม/Job\n2.มีระบบมากมายทั้งการซื้อของขายของ\n3.หรือระบบเควสต่างๆมากมายเลย^^");
		$form->addButton("Okey!");	
		$form->sendToPlayer($player);
	}
	public function Cmd2($player){
		$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
		$form = $api->createSimpleForm(function (Player $player, $data = null){
		$result = $data[0];
					
		if($result === null){
			return true;
		}
			switch($result){
				case 0:
				break;
			}
		});
		$form->setTitle("Protect");
		$form->setContent("§a/startp §cเพอกหนดจดแรก\n§b/endp เพอกหนดจดสดทาย\n§6(§aกรณาดยอดเงนดวยนะ§6)§f /land buy เพอซอพนท");
		$form->addButton("Okey!");	
		$form->sendToPlayer($player);
	}
}

