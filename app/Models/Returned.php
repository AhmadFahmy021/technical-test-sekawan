<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Returned extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'returned';
    protected $guarded = ['id'];
    /**
     * Get the booking that owns the Returned
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }
}
