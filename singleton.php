<?php
/*

  * Cytonn Technologies
  *
  * @author: Joseph Mahugu <jmahugu@cytonn.com>
  *
  * Project: Patterns
  *

*/

// Creating a db class db that will be used to connect to a db
class db{
	public static $conn;

	private function __construct(){
	echo "You are now connected" . "<br/>";
	}

  public static function connect(){  
      if (!isset(self::$conn)){	
         self::$conn=new db;
          } 
      return self::$conn;
  } 
  
  //this function will be used to unput queries 
  public static function query($sql){
      mysql_query($sql);
  }
   
}
//establish a connection by calling the objects
$conn1=db::connect();
$conn2=db::connect();

?>

