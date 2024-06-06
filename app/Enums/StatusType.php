<?php

namespace App\Enums;

enum StatusType: string
{
    public const STARTED = 'started';
    public const IN_PROGRESS = 'in progress';
    public const DONE = 'done';
}
