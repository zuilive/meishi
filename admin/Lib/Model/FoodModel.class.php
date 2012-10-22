<?php

class FoodModel extends Model{

	protected $_auto=array(
		array('date','time',self::MODEL_INSERT,'function'),
	);
}
?>