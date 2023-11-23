<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Screen\AsSource;

class Work extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $fillable = [
        'title',
        'description',
        'url',
        'type',
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
        'title',
        'type'
    ];

    /**
     * Name of columns to which http filtering can be applied
     *
     * @var array
     */
    protected $allowedFilters = [
        'name' => Like::class,
    ];

    public function title(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $value ? ucfirst($value) : null,
            set: fn (string $value) => strtolower($value)
        );
    }
}
