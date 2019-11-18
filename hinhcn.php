
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class ="container">
			<form action="#" method="post">
				Chiều dài : <input type = "number" name ="chieudai" class="form-control" required> <br>
				Chiều rộng : <input type = "number" name ="chieurong" class="form-control" required><br>
				<input type = "submit" name="ok" class="btn btn-block btn-success" value="Result">
			</form>
		</div>	
	</body>

</html>

<?php 


class HinhChuNhat{
	public $chieudai;
	public $chieurong;
	
	//Hàm Construct
	public function HinhChuNhat($x, $y){
		$this->chieudai = $x;
		$this->chieurong = $y;
	}
	public function TinhChuVi(){
		echo "Chu vi hình chữ nhật là: ". ($this->chieudai + $this->chieurong)*2;
	}
	
	public function TinhDienTich(){
		echo "Diện tích hình chữ nhật là: ". $this->chieudai * $this->chieurong;
	}
}

	if(isset($_POST['ok'])) {
		// $hcn1 = new HinhChuNhat();
		$hcn1 = new HinhChuNhat($_POST['chieudai'], $_POST['chieurong']);
		// $hcn1 ->chieudai = $_POST['chieudai'];
		// $hcn1 ->chieurong = $_POST['chieurong'];
		$hcn1 ->TinhDienTich();
	}


?>
