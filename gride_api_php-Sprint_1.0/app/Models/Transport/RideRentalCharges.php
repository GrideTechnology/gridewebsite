<?php

namespace App\Models\Transport;

use App\Models\BaseModel;

class RideRentalCharges extends BaseModel
{
    protected $connection = 'transport';

    protected $hidden = [
     	'created_at', 'updated_at'
    ];

 }