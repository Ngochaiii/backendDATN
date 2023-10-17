<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketComments extends Model
{
    use HasFactory;
    protected $fillable = [
        "ticket_id",
        "admin_id",
        "message",
        "is_deleted",
    ];
    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
