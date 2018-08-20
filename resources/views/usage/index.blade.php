@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				 <div class="panel-heading">Add Expense</div>
				 <div class="panel-body">
				 	{!! Form::open() !!}
				 	<div class="form-group">
				 		{!! Form::label('date', 'Date of Expense') !!}
				 		{!! Form::text('date', null, ['class' => 'form-control']) !!}
				 	</div>

				 	<div class="form-group">
				 		{!! Form::label('category', 'Expense Category') !!}
				 		{!! Form::select('category', [], null, ['class' => 'form-control']) !!}
				 	</div>

				 	<div class="form-group">
				 		{!! Form::label('description', 'Description') !!}
				 		{!! Form::text('description', null, ['class' => 'form-control']) !!}
				 	</div>

				 	<div class="form-group">
				 		{!! Form::label('amount', 'Amount') !!}
				 		{!! Form::number('amount', null, ['class' => 'form-control']) !!}
				 	</div>

				 	<button class = "btn btn-sm btn-primary btn-block">Submit Expense</button>
				 	{!! Form::close() !!}
				 </div>
			</div>
		</div>
	</div>
</div>
@endsection
