<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- Đây là 1 trang giao diện hoàn hảo được cat làm 2 phần và chèn thêm 1 nội dung trang khác ở content-->

	<h2>Đây là giao diện của trang index </h2>

	<!-- <base href="{{asset('')}}"> -->


	@include('admin.layout.header')
	<!-- ------------------------------------------------- -->
	<!-- <div>
		Đây là header

	</div> -->
	<!-- ------------------------------------------------- -->





	@yield('content')
	<!-- ------------------------------------------------- -->
	<!-- <div>
		Đây là content


	</div> -->
	<!-- ------------------------------------------------- -->



	@include('admin.layout.menu')
	<!-- ------------------------------------------------- -->
	<!-- <div>
		Đây là menu 
	</div> -->
	<!-- ------------------------------------------------- -->
	
</body>
</html>