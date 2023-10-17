<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;
    protected $fillable = [
        "categories",
        "subject",
        "status",
        "message",
        "owner_id",
    ];

    const THE_GAME_PROBLEMS = 0;
    const WEB_ISSUES = 1;
    const OF_NOTIFICATION_OF_PAYMENT = 2;
    const OTHER = 99;
    const CATEGORY_ARR = [
        self::THE_GAME_PROBLEMS,
        self::WEB_ISSUES,
        self::OF_NOTIFICATION_OF_PAYMENT,
        self::OTHER,
    ];
    const CATEGORIES = [
        self::THE_GAME_PROBLEMS => 'the game problems',
        self::WEB_ISSUES => 'web issues',
        self::OF_NOTIFICATION_OF_PAYMENT => 'of notification of payment',
        self::OTHER => 'other'
    ];

    const STATUS_DISABLE = 1;
    const STATUS_ENABLE = 2;
    const STATUS_CLOSE = 0;
    const STATUSES_ARR = [
        self::STATUS_CLOSE,
        self::STATUS_DISABLE,
        self::STATUS_ENABLE
    ];

    const STATUSES = [
        self::STATUS_ENABLE => 'Đã trả lời',
        self::STATUS_DISABLE => 'Chưa trả lời',
        self::STATUS_CLOSE => 'Đã đóng',
    ];

    public function getCategoryNameAttribute()
    {
        return self::CATEGORIES[$this->categories];
    }

    public function getStatusNameAttribute()
    {
        return self::STATUSES[$this->status];
    }

    public function comments()
    {
        return $this->hasMany(TicketComments::class, 'ticket_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
