<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory, HasUuids;
    protected $guarded = ['id'];

    /**
     * Get the vehicle that owns the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
    }

    /**
     * Get the firstApprover that owns the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function firstApprover(): BelongsTo
    {
        return $this->belongsTo(User::class, 'first_approver', 'id');
    }

    /**
     * Get the secondApprover that owns the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function secondApprover(): BelongsTo
    {
        return $this->belongsTo(User::class, 'second_approver', 'id');
    }
}
