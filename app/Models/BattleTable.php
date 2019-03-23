<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Helpers\Utils;

class BattleTable extends Model{
    protected $fillable = ['room_name', 'player','row_square','column_square'];
    protected $table ="tb_battle";

    public function startBattle($args){;
        $startBattle = self::firstOrCreate([
            'room_name' => $args['roomname'],
            'player' => $args['name'],
            'row_square' => $args['row'],
            'column_square' => $args['column'],
        ]);
    
        return $startBattle;
    }

    public function findRoomBattle($roomname)
    {
        return self::where('room_name', '=', $roomname);
    }

}