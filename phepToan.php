<?php 
Class SoTuNhien{
	public $a; 
	private $b; //Giả sử thêm điều kiện b > 100
	
	public function setb($n){
		if($n> 100){
			$this->b = $n;
		} else {
			echo "vui lòng nhập b > 100"."<br>";
		}
		
	}
	
	public function getb(){
		return $this->b;
	}
	
	public function TinhTong(){
		if($this->b > 100){
			return $this->a + $this->b;
		}
	}
}
if(isset($_POST['ok'])){
	$Result1= new SoTuNhien();
	$Result1->a = $_POST['a'];
	$Result1->setb($_POST['b']);
	echo $Result1->TinhTong();
}
	
?>

<html>
	<head>
	<head>
	<body>
		<div>
			<form method="post">
				a: <input type="number" name="a" required>
				b: <input type="number" name="b" required>
				<input type="submit" name="ok">
			</form>
		</div>
	</body>
</html>