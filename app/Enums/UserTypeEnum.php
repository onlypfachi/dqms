<?php

namespace App\Enums;

enum UserTypeEnum: string
{
    case PATIENT = 'PATIENT';

    case DOCTOR = 'DOCTOR';

    case CLINIC_MANAGER = 'CLINIC_MANAGER';

    case NURSE = 'NURSE';
}
