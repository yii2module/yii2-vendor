<?php

namespace yii2module\vendor\domain\commands\generators;

use yii2lab\helpers\generator\ClassGeneratorHelper;
use yii2lab\designPattern\command\interfaces\CommandInterface;
use yii2module\vendor\domain\commands\Base;

class Module extends Base implements CommandInterface {

	public $type;
	
	public function run() {
		$this->generateModule($this->data, $this->type);
	}
	
	protected function generateModule($data, $type) {
		$config = [
			'className' => $this->getBaseAlias($data) . '/' . $type . '/Module',
			'afterClassName' => 'extends \yii\base\Module',
			'code' => $this->getLangDir($data),
		];
		ClassGeneratorHelper::generate($config);
	}
	
	protected function getLangDir($data) {
		return TAB .'//public static $langDir = \''.$data['owner'].'/'.$data['name'].'/domain/messages\';';
	}
	
}
