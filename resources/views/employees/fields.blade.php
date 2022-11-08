<!-- Company Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_id', 'Company:') !!}
    {!! Form::select('company_id', $company, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department:') !!}
    {!! Form::select('department_id', $department, null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Nik Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nik', 'NIk:') !!}
    {!! Form::text('nik', null, ['class' => 'form-control', 'maxlength' => '16']) !!}
</div>

<!-- Fullname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fullname', 'Fullname:') !!}
    {!! Form::text('fullname', null, ['class' => 'form-control']) !!}
</div>

<!-- Joined Field -->
<div class="form-group col-sm-6">
    {!! Form::label('joined', 'Joined:') !!}
    {!! Form::date('joined', null, ['class' => 'form-control']) !!}
</div>

<!-- Resigned Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resigned', 'Resigned:') !!}
    {!! Form::date('resigned', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status1" value="1" checked>
        <label class="form-check-label" for="status1">
          Active
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status" id="status2" value="0">
        <label class="form-check-label" for="status2">
          Inactive
        </label>
      </div>
</div>