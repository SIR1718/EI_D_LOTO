<?php 

class keyGenerator {

public $numbers;
public $stars;

public function __construct() {
	$this->numbers = array();
	$this->stars = array();

	// gerar numeros
	do {
		$randomNumber = rand(1,50);
		if (!in_array($randomNumber, $this->numbers)) {
			$this->numbers[] = $randomNumber;
		}
	} while (count($this->numbers) < 5);
	sort($this->numbers);

	// gerar numeros
	do {
		$randomNumber = rand(1,11);
		if (!in_array($randomNumber, $this->stars)) {
			$this->stars[] = $randomNumber;
		}
	} while (count($this->stars) < 2);
	sort($this->stars);
}

}

$key1 = new keyGenerator();

$jsonText = json_encode($key1);

echo ($jsonText);


?>
