<?php

namespace App\Models;

use App\Enums\TrackableStatusEnum;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Trackable extends Model
{
    use HasUlids;
    protected $casts = [
        'status' => TrackableStatusEnum::class,
    ];
}
