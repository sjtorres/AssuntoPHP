<?php
	class valida {
		public $s;
		private $t;
		
		function criador($s) {
			$this->s = $s;
		}
		
		function toString() {
			if($this->s >= 300) {
				$this->t = $this->s*1.5;
				echo "O Salario é ", $this->t;
			} else if ($this->s < 300) {
				$this->t = $this->s*1.3;
				echo "O Salario é ", $this->t;
			}
		}
	}

	$calc = new valida();
	$calc->criador($_GET['s']);
	$calc->toString();
