<?php


// Task 1: Create a Publisher model with attributes
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable = ['name', 'address', 'email', 'founded_year'];
}



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
