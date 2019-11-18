<?php 

class phuongtrinh{
	public $a;
	public $b;
	public $c;
	
	public function phuongtrinh($a, $b, $c){
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}
	public function getDelta(){
		return ($this->b * $this->b) - 4 * $this->a * $this->c;
	}
	public function getResult(){
		if(isset($_POST['ok'])){
			if($this->getDelta()<0){
				echo	"phương trình vô nghiệm";
			} 
			else if ($this->getDelta()==0){
				echo	"Phương trình có nghiệm kép x = x1 = x2 = ". -$this->b/(2*$this->a);
			} else {
				echo	"phương trình có 2 nghiệm phân biệt"."<br>";
				echo	"x1 = ".(-$this->b + sqrt($this->getDelta()))/(2*$this->a)."<br>";
				echo	"x2 = ".(-$this->b - sqrt($this->getDelta()))/(2*$this->a)."<br>";
			}
		}
	}
}

$pt1 = new phuongtrinh($_POST['a'], $_POST['b'], $_POST['c']);

$pt1->getResult();

?>

<html>
	<head></head>
	<body>
		<div>
		<form action="#" method="post">
			<input type="number" name="a" required>x<sup>2</sup> + <input type="number" name="b" required>x + <input type="number" name="c" required> = 0;
			<input type="submit" name="ok" value="Result">
		</form>
		</div>
	</body>
</html>