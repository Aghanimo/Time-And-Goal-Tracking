<?php

namespace App\Enums;

enum TrackableStatusEnum:string {
    case ACTIVE = 'active';
    case HIDDEN = 'hidden';
    case DONE = 'done';
}
