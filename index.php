<?php
/**
* @file index.php
* @synopsis  ZF1 DB
* @author Yee, <rlk002@gmail.com>
* @version 1.0
* @date 2015-01-09 13:21:41
*/

echo '<pre>';
require_once('./Zend/Db.php');
$dbconfig = [
							'host' => 'localhost',
    					'dbname' => '',
   					 	'username' => '',
    					'password' => '',
    					'port' => '3306',
    					'charset' => 'uft8'
						];
$db = Zend_Db::factory('Mysqli', $dbconfig);
$query = $db->fetchAll("SELECT * FROM tablename LIMIT 10");
print_r($query);
