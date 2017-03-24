

@extends('templates.default')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-12">

			<form action="{{ route('newsletter.create')}}" method="post">
				<div class="form-group {{$errors->has('email')?'has-error':''}}">
					<label for="email">Email
					

	 <input type="text" name="email" value="{{old('email')}}" class="form-control">
						@if($errors->has('email'))

						<span class="help-block">
						<div>{{$errors->first('email')}}</div></span>
						@endif
					</label>
				</div>
				<input type="submit" class="btn" name="">
				{{csrf_field()}}
			</form>
		</div>
	</div>
	@endsection