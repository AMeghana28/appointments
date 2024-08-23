<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function index()
    {
        $appointments = Appointment::all();
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        return view('appointments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'appointment_id' => 'required|unique:appointments,appointment_id',
            'doctor_id' => 'required',
            'appointment_time' => 'required|date',
            'patient_id' => 'required',
        ]);
    
        Appointment::create($request->all());
        return redirect()->route('appointments.index')->with('success', 'Appointment created successfully.');
    }

    public function show(Appointment $appointment)
    {
        return view('appointments.show', compact('appointment'));
    }

    public function edit(Appointment $appointment)
    {
        return view('appointments.edit', compact('appointment'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'appointment_id' => 'required|unique:appointments,appointment_id,' . $appointment->appointment_id . ',appointment_id',
            'doctor_id' => 'required',
            'appointment_time' => 'required|date',
            'patient_id' => 'required',
        ]);
    
        $appointment->update($request->all());
        return redirect()->route('appointments.index')->with('success', 'Appointment updated successfully.');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully.');
    }
}
