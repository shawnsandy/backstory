<?php

namespace ShawnSandy\Backstory\App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{

    public function author() {
        return $this->belongsTo(User::class);
    }

}
