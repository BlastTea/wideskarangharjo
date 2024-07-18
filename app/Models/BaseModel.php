<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class BaseModel extends Model
{
    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->setTimezone('Asia/Jakarta')->format($this->getDateFormat());
    }

    /**
     * Function to override the fresh timestamps.
     */
    public function freshTimestamp()
    {
        return now('Asia/Jakarta');
    }
}
