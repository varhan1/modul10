@extends('layouts.app')

@section('content')
<div class="row mb-0">
    <div class="col-lg-9 col-xl-6">
        <h4 class="mb-3">{{ $pageTitle }}</h4>
    </div>
    <div class="col-lg-3 col-xl-6">
        <ul class="list-inline mb-0 float-end">
            <li class="list-inline-item">
                <a href="{{ route('employees.exportExcel') }}" class="btn btn-outline-success">
                    <i class="bi bi-download me-1"></i> to Excel
                </a>
            </li>
            <li class="list-inline-item">|</li>
            <li class="list-inline-item">
                <a href="{{ route('employees.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle me-1"></i> Create Employee
                </a>
            </li>
        </ul>
    </div>
</div>
    <hr>
    <div class="table-responsive border p-3 rounded-3 mb-5">
        <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="employeeTable">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="employeeTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Position</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>

</div>
@push('scripts')
    <script type="module">
        $(document).ready(function() {

            ...

            $(".datatable").on("click", ".btn-delete", function (e) {
                e.preventDefault();

                var form = $(this).closest("form");
                var name = $(this).data("name");

                Swal.fire({
                    title: "Are you sure want to delete\n" + name + "?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "bg-primary",
                    confirmButtonText: "Yes, delete it!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush

@endsection
