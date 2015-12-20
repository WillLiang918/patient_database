{!! Form::hidden('user_id', 1) !!}

<div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('address', 'Address:') !!}
  {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('phone_number', 'Phone Number:') !!}
  {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('date_of_birth', 'Date of Birth:') !!} <br/>
  {!! Form::input('date', 'date_of_birth', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
  {!! Form::label('age', 'Age:') !!} <br>
  {!! Form::selectRange('age', 1, 105) !!}
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
