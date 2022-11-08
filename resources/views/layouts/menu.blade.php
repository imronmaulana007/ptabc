<li class="nav-item">
    <a href="{{ route('employees.index') }}"
       class="nav-link {{ Request::is('employees*') ? 'active' : '' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Employees</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('companies.index') }}"
       class="nav-link {{ Request::is('companies*') ? 'active' : '' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Companies</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('departments.index') }}"
       class="nav-link {{ Request::is('departments*') ? 'active' : '' }}">
       <i class="far fa-circle nav-icon"></i>
       <p>Departments</p>
    </a>
</li>


