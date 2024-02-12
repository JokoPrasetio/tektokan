<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'table_message';
    public $timestamps = true;
    protected $with = ['toSend', 'bySend'];

    public function toSend(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function bySend() {
        return $this->belongsTo(User::class, 'by_send', 'id');
    }
}
