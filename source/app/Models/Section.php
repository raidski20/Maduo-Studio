<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Screen\AsSource;

class Section extends Model
{
    use HasFactory, HasUuids, AsSource, Filterable;

    protected $fillable = [
        'name',
        'title',
        'description',
        'extra_data'
    ];

    /**
     * Name of columns which must be hidden
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    /**
     * Name of columns to which http sorting can be applied
     *
     * @var array
     */
    protected $allowedSorts = [
        'name',
        'title',
    ];

    /**
     * Name of columns to which http filtering can be applied
     *
     * @var array
     */
    protected $allowedFilters = [
        'name' => Like::class,
        'title' => Like::class
    ];

    /**
     * Accessor and Mutator for the name attribute.
     *
     * @return Attribute
     */

    public function title(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? ucfirst($value) : null,
            set: fn(?string $value) => $value ? strtolower($value) : null,
        );
    }

    public function extraData(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? json_decode($value, true) : null,
            set: fn(array $value) => $value ? json_encode($value) : null
        );
    }
}
