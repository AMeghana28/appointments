<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'appointments'; // This is your existing table name
    protected $primaryKey = 'appointment_id'; 
    protected $fillable = ['appointment_id', 'doctor_id', 'appointment_time', 'patient_id']; // Adjust these fields to match your table
}
