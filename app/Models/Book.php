<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Book extends Model
{
    use Searchable;

    public function searchableAs()
    {
        return 'books';
    }

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'name'; // TODO: Change the autogenerated stub
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Book_category::class);
    }

}
