<!--
	**
	* Cytonn Technologies
	*
	* @author: Joseph Mahugu <jmahugu@cytonn.com>
	*
	* Project: Patterns
	*
-->

<?php
class Bike{
	private $bikeMake;
	private $bikeModel;

	public function __construct($make, $model){
		$this -> bikeMake = $make;
		$this -> bikeModel = $model;
	}

	public function getMakeAndModel(){
        return $this->vehicleMake . ' ' . $this->vehicleModel;
    }
}

class BikeFactory{
    public static function create($make, $model){
        return new Bike($make, $model);
    }

}


	$Kawasaki = BikeFactory::create('Suzuki', 'Kawasaki');
	print_r($Kawasaki->getMakeAndModel());
?>