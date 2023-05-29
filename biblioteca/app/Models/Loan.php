<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    /** um empréstimo pertence a um usuário*/
    public function user()
        {
            return $this->belongsTo(User::class);
        }
    /** um empréstimo pertence a um livro*/
    public function book()
        {
            return $this->belongsTo(Book::class);
        }
}
