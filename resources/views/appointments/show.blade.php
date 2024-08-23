@extends('layout')

@section('content')
    <h1>Appointment Details</h1>

    <div>
        <strong>Appointment ID:</strong>
        <p>{{ $appointment->appointment_id }}</p>
    </div>
    <div>
        <strong>Doctor ID:</strong>
        <p>{{ $appointment->doctor_id }}</p>
    </div>
    <div>
        <strong>Appointment Time:</strong>
        <p>{{ $appointment->appointment_time }}</p>
    </div>
    <div>
        <strong>Patient ID:</strong>
        <p>{{ $appointment->patient_id }}</p>
    </div>

    <a href="{{ route('appointments.edit', $appointment->appointment_id) }}">Edit</a>
    <form action="{{ route('appointments.destroy', $appointment->appointment_id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('appointments.index') }}">Back to List</a>
@endsection
