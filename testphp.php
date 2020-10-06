<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo "TEST php";  ?>
	</title>
</head>
<body>
	<h2>KẾT QUẢ CỦA PHÉP TÍNH 5+6=</h2>
			<?php $a = 5;$b = 6;echo $a+$b; ?>
	a = <input type="text" name="a" id = "a">
	b = <input type="text" name="b" id = "b">
	<button onclick="tong(a,b)">TINH TONG</button>
	<button onclick="tongdayso"></button>
	<SCRIPT>
		var a = document.getElementById("a");
		var b = document.getElementById("b");
		var mang = [1,2,3,4,5,6,7,8,9,10];
		var i;
		var sum = 1;
		for(i=0;i<10;i++){
			sum*=mang[i];
		}
		function tong(a,b){
			alert(Number(a.value)+Number(b.value));
			alert(sum);

		}
	</SCRIPT>

</body>
</html>
