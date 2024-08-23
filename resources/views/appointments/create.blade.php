@extends('layout')

@section('content')
    <h1>Create Appointment</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        <div>
            <label for="appointment_id">Appointment ID:</label>
            <input type="text" id="appointment_id" name="appointment_id" value="{{ old('appointment_id') }}">
        </div>
        <div>
            <label for="doctor_id">Doctor ID:</label>
            <input type="text" id="doctor_id" name="doctor_id" value="{{ old('doctor_id') }}">
        </div>
        <div>
            <label for="appointment_time">Appointment Time:</label>
            <input type="datetime-local" id="appointment_time" name="appointment_time" value="{{ old('appointment_time') }}">
        </div>
        <div>
            <label for="patient_id">Patient ID:</label>
            <input type="text" id="patient_id" name="patient_id" value="{{ old('patient_id') }}">
        </div>
        <button type="submit">Create Appointment</button>
    </form>
@endsection
