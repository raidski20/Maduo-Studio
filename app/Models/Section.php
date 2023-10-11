<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'data'
    ];

    /**
     * Accessor and Mutator for the name attribute.
     *
     * @return Attribute
     */
    public function name(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ucfirst($value),
            set: fn(string $value) => strtolower($value)
        );
    }

    /**
     * @return Attribute
     */

    public function data(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),

        );
    }
}
