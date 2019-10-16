
	@extends('admin.layout.index')

	@section('content')

	<div>Đây là nội dung trang thêm để đổ ra dữ liệu </div>
	
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
	


	<form action="{{route('themPost')}}" method="post">
		{{csrf_field()}}
		<input type="text" name="Ten">	
		<button type="submit"> submit</button>
		<button type="reset"> reset</button>
	</form>

	@endsection


