<div class="table-responsive">
    <table class="table" id="employees-table">
        <thead>
        <tr>
            <th class="text-uppercase">Name</th>
            <th class="text-uppercase">Status</th>
            <th class="text-uppercase">nik</th>
            <th class="text-uppercase">Joined</th>
            <th class="text-uppercase">SRV YEAR</th>
            <th class="text-uppercase">Company</th>
            <th class="text-uppercase">Department</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employees)
            <tr>
                <td>
                    <modal dataid="{{$employees->id}}" name="{{$employees->fullname}}" nik="{{$employees->nik}}" joined="{{date('d-m-Y', strtotime($employees->joined))}}" resigned="{{date('d-m-Y', strtotime($employees->resigned))}}" company="{{$employees['companies'][0]->name}}" department="{{$employees['departments'][0]->name}}"></modal>
                </td>
                <td>{{ $employees->status == 1 ? 'Active' : 'Inactive' }}</td>
                <td>{{ $employees->nik }}</td>
                <td>{{ date('d-m-Y', strtotime($employees->joined)) }}</td>
                <td>{{  date('d-m-Y', strtotime($employees->resigned)) }}</td>
                <td>{{ $employees['companies'][0]->name }}</td>
                <td>{{ $employees['departments'][0]->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['employees.destroy', $employees->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employees.show', [$employees->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('employees.edit', [$employees->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
