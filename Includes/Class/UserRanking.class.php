<?php

class UserRanking extends Initializer {

	public $useName = true;
	public $useLevel = true;
	public $useReset = true;
	public $useClass = true;
	public $useStrength = true;
	public $useDexterity = true;
	public $useVitality = true;
	public $useEnergy = true;
	public $useCommand = true;
	public $useMoney = false;
	public $useMap = true;
	public $useOnline = false;
	
	public $setLimit = 100;
	
	private function useName() {

		return dbTableCharacterColName;
	
	}
	
	private function useLevel() {

		return dbTableCharacterColLevel;
	
	}
	
	private function useReset() {

		return dbTableCharacterColReset;
	
	}
	
	private function useClass() {

		return dbTableCharacterColClass;
	
	}
	
	private function useStrength() {

		return dbTableCharacterColStrength;
	
	}
	
	private function useDexterity() {

		return dbTableCharacterColDexterity;
	
	}
	
	private function useVitality() {

		return dbTableCharacterColVitality;
	
	}
	
	private function useEnergy() {

		return dbTableCharacterColEnergy;
	
	}
	
	private function useCommand() {

		return dbTableCharacterColCommand;
	
	}
	
	private function useMoney() {

		return dbTableCharacterColMoney;
	
	}
	
	private function useMap() {

		return dbTableCharacterColMap;
	
	}
	
	private function useOnline() {

		return dbTableCharacterColOnline;
	
	}
	
	//change to private!!!
	public function prepareUserRankingSelectStatement() {
	
		$vars = get_class_vars(__CLASS__);

		$output = '';
		
		foreach($vars as $name => $value) {

			if(StringHelper::searchPrefix($name, 'use')) {
			
				if($this->$name)

					$output .= $this->$name() . dbQueryColSeparator;

			}

		}

		return StringHelper::removeLastColSeparator($output);
	
	}
	
	public function generateUserRanking() {
	
		try	{
		
			$query = $this->pdo->query("SELECT ". $this->prepareUserRankingSelectStatement() ." FROM ". dbTableCharacter ." WHERE CtlCode = 1");
		
			if($query !== false)
			
				return $query->fetchAll(PDO::FETCH_ASSOC);

				
		} catch (PDOException $error) {
		
			echo $error->getMessage();

		}

	}

}

?>