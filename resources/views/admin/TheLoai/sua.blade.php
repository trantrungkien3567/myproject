	@extends('admin.layout.index')

	@section('content')

	<div>Đây là nội dung trang sua để đổ ra dữ liệu  </div>

		<div>
		@if(count($errors) > 0 )
		<div> 
			@foreach($errors->all() as $err)
				{{$err}}<br>
			@endforeach
		</div>		
		@endif

		@if(session('thongbao'))
			<div>
				{{session('thongbao')}}			
			</div>
		@endif
		
	</div>

	<div>{{$theloaitruyensangtrangsua->Ten}}</div>

	<form action="{{route('suaPost',[$theloaitruyensangtrangsua->id])}}"  method="POST">
		@csrf 
		<input type="text" name="Ten" value="{{$theloaitruyensangtrangsua->Ten}}">	
		<button type="submit"> submit</button>
		<button type="reset"> reset</button>
	</form>

	@endsection