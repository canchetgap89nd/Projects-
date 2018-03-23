<!DOCTYPE html>
<html>
<head>
	<title>OOP</title>
</head>
<body>
	<script type="text/javascript">
		function SinhVien(ten,tuoi,lop)
		{
			this._ten = ten;
			this._tuoi = tuoi;
			this._lop = lop;
			this.show = function _show()
			{
				alert(this._ten + " " + this._tuoi + " tuổi, lớp" + this._lop);
			} 
		}
		var sv = new SinhVien("Trần Anh Quyền", 20, "58TH2");
		sv.show();
	</script>
</body>
</html>