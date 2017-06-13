<?php
	class Calc {
		public $a;
		public $b;
		public $c;
		public $d;
		
		function criador($a, $b, $c, $d) {
			$this->a = $a;
			$this->b = $b;
			$this->c = $c;
			$this->d = $d;
		}
		
		function toString() {
			if(($this->a+$this->c)==($this->b*$this->d)) {
				echo "A+C é igual que B*D";
			} else if(($this->a+$this->c)>($this->b*$this->d)) {
				echo "A+C é maior que B*D";
			} else {
				echo "A+C é menor que B*D";
			}
		}
	}

	$calc = new Calc();
	$calc->criador($_GET['a'], $_GET['b'], $_GET['c'], $_GET['d']);
	$calc->toString();
