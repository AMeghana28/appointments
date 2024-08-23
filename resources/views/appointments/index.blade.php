@extends('layout')

@section('content')
    <h1>Appointment List</h1>
    <a href="{{ route('appointments.create') }}">Add Appointment</a>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Appointment ID</th>
                <th>Doctor ID</th>
                <th>Appointment Time</th>
                <th>Patient ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->appointment_id }}</td>
                    <td>{{ $appointment->doctor_id }}</td>
                    <td>{{ $appointment->appointment_time }}</td>
                    <td>{{ $appointment->patient_id }}</td>
                    <td>
                        <a href="{{ route('appointments.show', $appointment->appointment_id) }}">View</a>
                        <a href="{{ route('appointments.edit', $appointment->appointment_id) }}">Edit</a>
                        <form action="{{ route('appointments.destroy', $appointment->appointment_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
