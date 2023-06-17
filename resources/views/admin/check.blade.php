@extends('layouts.master')

@section('css')
    <!-- Table css -->
    <link href="{{ URL::asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css') }}" rel="stylesheet" type="text/css" media="screen">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')

    <div class="card mt-3">
        <div class="card-header">
            <h4 class="card-title">Employee Attendance Check</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('check_store') }}" method="post">
                    @csrf
                    <table class="table table-striped table-hover table-bordered table-sm">
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
                                <th>
                                    {{ $date }}
                                </th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($employees as $employee)
                            <input type="hidden" name="emp_id" value="{{ $employee->id }}">
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
                                        <div class="form-check">
                                            <input class="form-check-input" id="attendance_{{ $i }}_{{ $employee->id }}" name="attd[{{ $date_picker }}][{{ $employee->id }}]" type="checkbox" @if (isset($check_attd)) checked @endif value="1">
                                            <label class="form-check-label" for="attendance_{{ $i }}_{{ $employee->id }}">
                                                Attendance
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="leave_{{ $i }}_{{ $employee->id }}" name="leave[{{ $date_picker }}][{{ $employee->id }}]" type="checkbox" @if (isset($check_leave)) checked @endif value="1">
                                            <label class="form-check-label" for="leave_{{ $i }}_{{ $employee->id }}">
                                                Leave
                                            </label>
                                        </div>
                                    </td>
                                @endfor
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-success mt-3">Submit Attendance</button>
                </form>
            </div>
        </div>
    </div>
@endsection
