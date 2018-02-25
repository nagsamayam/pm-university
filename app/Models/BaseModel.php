<?php

namespace App\Models;

use Agent;
use Storage;
use App\Traits\Publishable;
use App\Traits\Models\CarbonDates;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use Publishable, CarbonDates;

    public function scopeRecent($query)
    {
        return $query->orderBy('published_at', 'desc');
    }

    public function imageUrl()
    {
        $folder = Agent::isMobile() ? 'mobile' : 'web';
        return $this->picture ? Storage::disk('public')->url("uploads/$folder/$this->picture") : '';
    }
}
