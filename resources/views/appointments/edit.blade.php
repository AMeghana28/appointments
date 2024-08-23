@extends('layout')

@section('content')
    <h1>Edit Appointment</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('appointments.update', $appointment->appointment_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="appointment_id">Appointment ID:</label>
            <input type="text" id="appointment_id" name="appointment_id" value="{{ $appointment->appointment_id }}" readonly>
        </div>
        <div>
            <label for="doctor_id">Doctor ID:</label>
            <input type="text" id="doctor_id" name="doctor_id" value="{{ $appointment->doctor_id }}">
        </div>
        <div>
            <label for="appointment_time">Appointment Time:</label>
            <input type="datetime-local" id="appointment_time" name="appointment_time" value="{{ $appointment->appointment_time }}">
        </div>
        <div>
            <label for="patient_id">Patient ID:</label>
            <input type="text" id="patient_id" name="patient_id" value="{{ $appointment->patient_id }}">
        </div>
        <button type="submit">Update Appointment</button>
    </form>
@endsection
