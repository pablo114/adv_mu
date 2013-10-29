<?php

/******************* DB SETTINGS *********************/

	/**************** DB CONNECTION DETAILS **************************/
	define('dbType', 'sqlsrv');
	define('dbHost', 'yourhost\SQLEXPRESS');
	define('dbLogin', 'sa');
	define('dbPass', '');
	define('dbName', 'MuOnline');

	/**************** DB TABLES *******************/
	define('dbTableCharacter', 'Character');
	define('dbTableMembInfo', 'MEMB_INFO');
	define('dbTableMembStat', 'MEMB_STAT');

	/***************** DB COLUMNS ********************/
	
		/***************** CHARACTER TABLE  ********************/
		define('dbTableCharacterColName', 'Name');
		define('dbTableCharacterColLevel', 'cLevel');
		define('dbTableCharacterColReset', 'Resets');
		define('dbTableCharacterColClass', 'Class');
		define('dbTableCharacterColStrength', 'Strength');
		define('dbTableCharacterColDexterity', 'Dexterity');
		define('dbTableCharacterColVitality', 'Vitality');
		define('dbTableCharacterColEnergy', 'Energy');
		define('dbTableCharacterColCommand', 'Leadership');
		define('dbTableCharacterColMoney', 'Money');
		define('dbTableCharacterColMap', 'MapNumber');
		define('dbTableCharacterColOnline', '(SELECT CASE WHEN ConnectStat = 1 THEN 1 ELSE 0 END FROM MEMB_STAT WHERE memb___id = AccountID) AS Online');
	
	/**************** DB COLUMNS END *******************/

	/****************** DB MISC ********************/
	define('dbQueryColSeparator', ', ');
	
/**************** DB SETTINGS END *******************/

?>