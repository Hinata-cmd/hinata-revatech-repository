<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getbylimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }

    public function getPaginateByLimit(int $limit_count = 3)
    {
        return $this->orderBy('updated_at', 'DESC')->Paginate($limit_count);
    }

}
