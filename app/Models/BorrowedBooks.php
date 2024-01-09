<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowedBooks extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'member_id',
        'borrow_date',
        'return_date',
    ];

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
