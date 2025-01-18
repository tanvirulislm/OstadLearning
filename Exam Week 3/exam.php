<?php

// Task 1: Create a Laravel model named Publisher that represents a publisher in a web application.
// The model should have the following attributes: name, address, email, founded_year.

// Task 1: Create a Publisher model with attributes
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable = ['name', 'address', 'email', 'founded_year'];
}



/**
     * Task 2: Create a Laravel model relationship between the Publisher model and the Book model.
     * A publisher can have multiple books. Define this relationship.
     */
// Task 2: Define relationship between Publisher and Book
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable = ['name', 'address', 'email', 'founded_year'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}

class Book extends Model
{
    protected $fillable = ['title', 'author', 'publisher_id'];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
}
