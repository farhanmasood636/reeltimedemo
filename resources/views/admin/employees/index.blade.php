@extends('layouts.app')        

@section('content')

@section('title')
<title>List Employee</title>
@endsection

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-lg-12">
                <h1 class="m-0 own-alignment" style="color: #fff;">List Employees</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        @if(session('success'))
        <div class="alert alert-success text-center" style="background: #fff !important;">
        <h4 style="color:black;">Employee Record Has Been Successfully Deleted!</h4>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card card-primary" style="background: #fff;">
                    <div class="card-header" style="background:#fff;">
                        <div class="card-title text-center own-color">
                           Employees
                        </div>
                        
                    </div>
                    <div class="card-body">
                        @if ($employees->count())
                        <table class="table table-bordered table-hover" style="border-color: black" id="dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Created At</th>
                                    <th class="none">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $index => $employee)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $employee->first_name.' '.$employee->last_name }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.employees.profile', $employee->id) }}" class="btn btn-flat btn-info " style="background:linear-gradient(135deg, #2c3f46, #659ba9); border:none;">View Profile</a>
                                        <button 
                                        class="btn btn-flat btn-danger " style="background:linear-gradient(135deg, #2c3f46, #659ba9); border:none;"
                                        data-toggle="modal" 
                                        data-target="#deleteModalCenter{{ $index + 1 }}"
                                        >Delete Employee</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                            @for ($i = 1; $i < $employees->count()+1; $i++)
                                <div class="modal fade" id="deleteModalCenter{{ $i }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle1{{ $i }}" aria-hidden="true">
                                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                        <div class="modal-content ">
                                            <div class="card" style="background: :#fff">
                                                <div class="card-header" style="background: :#fff">
                                                    <h5 class="own-color" style="text-align: center !important">Are You Sure You Want To Delete?</h5>
                                                </div>
                                                <div class="card-body text-center d-flex" style="justify-content: center">
                                                    
                                                    <button type="button" class="btn flat btn-secondary"  style="background:linear-gradient(135deg, #2c3f46, #659ba9); border:none;"data-dismiss="modal">No</button>
                                                    
                                                    <form 
                                                    action="{{ route('admin.employees.delete', $employees->get($i-1)->id) }}"
                                                    method="POST"
                                                    >
                                                    @csrf
                                                    @method('DELETE')
                                                        <button type="submit" class="btn flat btn-danger ml-1" style="background:linear-gradient(135deg, #2c3f46, #659ba9); border:none;">Yes</button>
                                                    </form>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <h6>This Action Is Irreversable!</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        @else
                        <div class="alert alert-info text-center" style="background:#fff !important; width:50%; margin: 0 auto; border:none; color:black;">
                            <h4>No Records Available!</h4>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-lg-12 own-alignment">
                    <h5 style="color:#fff;">© 2022 ReelTime</h5>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('extra-js')

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            responsive:true,
            autoWidth: false,
        });
    });
</script>
@endsection