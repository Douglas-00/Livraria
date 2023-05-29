<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
      
    /** um livro pode ter vários empréstimos*/
    public function loans(){ 
        return $this->hasMany(Loan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

}
