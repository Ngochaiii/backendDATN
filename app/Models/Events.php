<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "date",
        "time",
        "day_of_week",
        "type",
        "duration",
        "expired_at",
        "status",
    ];

    const TYPE_DAILY = 0;
    const TYPE_WEEKLY = 3;
    const TYPE_SPECIFICATION = 5;
    const TYPES_ARR = [
        self::TYPE_DAILY,
        self::TYPE_WEEKLY,
        self::TYPE_SPECIFICATION
    ];

    const TYPES = [
        self::TYPE_DAILY => 'Hàng Ngày',
        self::TYPE_WEEKLY => 'Hàng Tuần',
        self::TYPE_SPECIFICATION => 'Ngày',
    ];

    const STATUS_DISABLE = 0;
    const STATUS_ENABLE = 1;
    const STATUSES_ARR = [
        self::STATUS_DISABLE,
        self::STATUS_ENABLE
    ];

    const STATUSES = [
        self::STATUS_ENABLE => 'Đang hiển thị',
        self::STATUS_DISABLE => 'Ngừng hoạt động',
    ];

    const UNDEFINED = 0;
    const MON = 2;
    const TUE = 3;
    const WED = 4;
    const THU = 5;
    const FRI = 6;
    const SAT = 7;
    const SUN = 8;
    const DAY_OF_WEEK_ARR = [
        self::UNDEFINED,
        self::MON,
        self::TUE,
        self::WED,
        self::THU,
        self::FRI,
        self::SAT,
        self::SUN,
    ];

    const DAY_OF_WEEK = [
        self::UNDEFINED => "---",
        self::MON => "Thứ 2",
        self::TUE => "Thứ 3",
        self::WED => "Thứ 4",
        self::THU => "Thứ 5",
        self::FRI => "Thứ 6",
        self::SAT => "Thứ 7",
        self::SUN => "Chủ nhật",
    ];

    public function getStatusNameAttribute()
    {
        return self::STATUSES[$this->status];
    }

    public function getDayNameAttribute()
    {
        return self::DAY_OF_WEEK[$this->day_of_week];
    }

    public function getTypeNameAttribute()
    {
        return self::TYPES[$this->type];
    }

    public function getTimeInfoAttribute()
    {
        switch ($this->type) {
            case self::TYPE_DAILY:
                return convertSecondToTime($this->time);
                break;
            case self::TYPE_WEEKLY:
                return $this->day_name . ' ' . convertSecondToTime($this->time);
                break;
            case self::TYPE_SPECIFICATION:
                $text = Carbon::parse($this->date)->format("d/m/Y")
                    . ' '
                    . convertSecondToTime($this->time);
                return $text;
                break;
            default:
                break;
        }
    }


    public function getRawDateAttribute()
    {
        if (!$this->date) {
            return null;
        }
        return Carbon::parse($this->date)->format("Y-m-d");
    }

    public function getRawTimeAttribute()
    {
        return convertSecondToTime($this->time);
    }
}
