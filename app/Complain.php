<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $fillable = ['stafffriendliness', 'efficiency', 'securenviron', 'cleanliness', 'comfortable', 'amenities','workingcondition','roomservice','restaurant','bar','foodquality','telephone','laundry','internet','meetingroom','fullname','email','phone','comment','visitagain','tellafriend','rateus'];
    
}
