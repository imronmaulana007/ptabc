<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $employees->id }}</p>
</div>

<!-- Company Id Field -->
<div class="col-sm-12">
    {!! Form::label('company_id', 'Company Id:') !!}
    <p>{{ $employees->company_id }}</p>
</div>

<!-- Department Id Field -->
<div class="col-sm-12">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{{ $employees->department_id }}</p>
</div>

<!-- Nik Field -->
<div class="col-sm-12">
    {!! Form::label('nik', 'Nik:') !!}
    <p>{{ $employees->nik }}</p>
</div>

<!-- Fullname Field -->
<div class="col-sm-12">
    {!! Form::label('fullname', 'Fullname:') !!}
    <p>{{ $employees->fullname }}</p>
</div>

<!-- Joined Field -->
<div class="col-sm-12">
    {!! Form::label('joined', 'Joined:') !!}
    <p>{{ $employees->joined }}</p>
</div>

<!-- Resigned Field -->
<div class="col-sm-12">
    {!! Form::label('resigned', 'Resigned:') !!}
    <p>{{ $employees->resigned }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $employees->status }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $employees->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $employees->updated_at }}</p>
</div>

