<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    public $timestamps = false;

    const LVL_XP = [
        1 => 0, 2 => 300, 3 => 630,
        4 => 993, 5 => 1393, 6 => 1833,
        7 => 2317, 8 => 2849, 9 => 3434,
        10 => 4078, 11 => 4786, 12 => 5565,
        13 => 6422, 14 => 7365, 15 => 8402,
        16 => 9543, 17 => 10798, 18 => 12178,
        19 => 13696, 20 => 15366, 21 => 17203,
        22 => 19224, 23 => 21447, 24 => 23892,
        25 => 26582, 26 => 29541, 27 => 32796,
        28 => 36376, 29 => 40314, 30 => 44646
    ];

    public function getNextLevelXP()
    {
        $this->xp = $this->xp;
        if (empty($this->xp)) return [1 => 0];

        $levels = array_reverse(static::LVL_XP, true);

        foreach ($levels as $level => $xp) {
            if ($this->xp > $xp) {
                return [$level => $xp];
            }
        }
    }

    public function getNextLevelXPRequirement()
    {
        $level = $this->getLevel();
        return static::LVL_XP[$level + 1];
    }

    public function getLevel()
    {
        return array_key_first($this->getNextLevelXP());
    }

    public function getCurrentLevelBase()
    {
        $level = $this->getLevel();
        return static::LVL_XP[$level];
    }
}
