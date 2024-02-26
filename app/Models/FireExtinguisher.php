<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireExtinguisher extends Model
{
    
    use HasFactory;
    protected $table = 'fire_extinguishers';
    protected $fillable = [
        'Type', 'Name', 'SerialNumber', 'Location', 'InstallationDate', 'ExpirationDate', 'InspectionFindings', 'Status',
    ];
}
