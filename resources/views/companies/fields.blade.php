<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('status', 'Status', ['class' => 'form-check-label']) !!}
    <label class="form-check">
    {!! Form::radio('status', "1", null, ['class' => 'form-check-input']) !!} Active
</label>

<label class="form-check">
    {!! Form::radio('status', "0", null, ['class' => 'form-check-input']) !!}  Inactive
</label>

</div>
