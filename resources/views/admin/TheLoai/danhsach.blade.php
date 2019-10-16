	@extends('admin.layout.index')

	@section('content')

	<div>Đây là nội dung trang danhsach được đổ ra dữ liệu </div>
	
	<div>
		@if(session('thongbao'))
			<div>
				{{session('thongbao')}}			
			</div>
		@endif

		<table border="1" style="width: 550px"> 
			<tr><th colspan="5">Đây là nội dung hiển thị </th></tr>
			@foreach($theloaitruyendi as $tl)
			<tr>
				<td>{{$tl->id}}</td>
				<td>{{$tl->Ten}}</td>
				<td>{{$tl->TenKhongDau}}</td>
				<td><a href="xoa/{{$tl->id}}">Detele</a></td>
				<td><a href="sua/{{$tl->id}}">Edit</a></td>
			</tr>
			@endforeach
			
		</table>	
	</div>
	@endsection		
