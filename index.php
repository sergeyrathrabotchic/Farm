<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

class Farm {
	public $vid_;
	public $prmax_;
	public $prmin_;
	public $prvid_;
	public $c_;
	public $id = 0;
	public $arr = [];
	public $sev = 0;
	public $arr2 = [];
	public $arrsev ;
	public function m (){
		$a = $this -> c;
		$b = count($this -> arr2);

		for ($i = count($this -> arr2); $i < $a + $b;$i++){
			array_push($this -> arr2, $this -> arr);
			$this -> arr2[$i]["id"] = $this -> id + $i;
			$this -> arr2[$i]["pr"] = rand ($this -> prmin_,$this -> prmax_);
			$this -> arr2[$i]["vid"] = $this -> vid_;
			$kolvo = $kolvo + $this -> arr2[$i]["pr"];




		}
	
		//echo "<pre>"; print_r($this -> arr2); echo "</pre>";
		echo "<pre>"; print_r($kolvo . $this -> prvid_); echo "</pre>";
		$kolvo = 0;
		$this -> arrsev = $this -> arr2 ;
	}
}


class kor extends Farm {
	public $vid = "Корова";
	public $prmax = 12;
	public $prmin = 8;
	public $prvid = " литров молока";
	public $c = 10;

}

$product = new kor;
$product -> vid_ = $product -> vid;
$product -> prmax_ = $product -> prmax;
$product -> prmin_ = $product -> prmin;
$product -> prvid_ = $product -> prvid;
$product -> c_ = $product -> c;
$product -> m ();
class kr extends Farm {
	public $vid = "Курица";
	public $prmax = 1;
	public $prmin = 0;
	public $prvid = " шт. яиц";
	public $c = 20;

	
}

$product2 = new kr;
$product2 -> vid_ = $product2 -> vid;
$product2 -> prmax_ = $product2 -> prmax;
$product2 -> prmin_ = $product2 -> prmin;
$product2 -> prvid_ = $product2 -> prvid;
$product2 -> c_ = $product2 -> c;
$product2 -> arr2 = $product -> arr2;
$product2 -> m ();



 ?>


</body>
</html>