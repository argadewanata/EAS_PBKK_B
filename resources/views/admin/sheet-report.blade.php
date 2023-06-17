@extends('layouts.master')

@section('css')
    <!-- Bootstrap 5 CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        .card {
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
@endsection

@section('content')
    <div class="card mt-5 shadow">
        <div class="card-header bg-success text-white">
            <h4 class="card-title mb-0">Attendance Sheet Report</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-sm">
                    <thead class="thead-dark">
                    <tr>
                        <th>Employee</th>
                        <th>Position</th>

                        @php
                            $today = today();
                            $dates = [];
                            for ($i = 1; $i < $today->daysInMonth + 1; ++$i) {
                                $dates[] = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
                            }
                        @endphp

                        @foreach ($dates as $date)
                            <th>{{ $date }}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->position }}</td>

                            @for ($i = 1; $i < $today->daysInMonth + 1; ++$i)
                                @php
                                    $date_picker = \Carbon\Carbon::createFromDate($today->year, $today->month, $i)->format('Y-m-d');
                                    $check_attd = \App\Models\Attendance::query()->where('emp_id', $employee->id)->where('attendance_date', $date_picker)->first();
                                    $check_leave = \App\Models\Leave::query()->where('emp_id', $employee->id)->where('leave_date', $date_picker)->first();
                                @endphp
                                <td>
                                    @if (isset($check_attd))
                                        <i class="fa fa-check {{ $check_attd->status == 1 ? 'text-success' : 'text-danger' }}"></i>
                                    @else
                                        <i class="fas fa-times text-danger"></i>
                                    @endif

                                    @if (isset($check_leave))
                                        <i class="fa fa-check {{ $check_leave->status == 1 ? 'text-success' : 'text-danger' }}"></i>
                                    @else
                                        <i class="fas fa-times text-danger"></i>
                                    @endif
                                </td>
                            @endfor
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
