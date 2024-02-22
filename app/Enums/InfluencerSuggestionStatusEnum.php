<?php

namespace App\Enums;

enum InfluencerSuggestionStatusEnum : string
{
    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';
}
