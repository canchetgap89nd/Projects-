<script>
	function sum(a,b)
	{
		if(a||b == 0)
		{
			throw("tao ghét số 0");    		// tạo ra lỗi cho js
		}
		return a  + b;
	}
	try{
	var kq = sum(5,0);
	alert(kq);
	}catch(e)
	{
		alert(e);							
	}
</script>