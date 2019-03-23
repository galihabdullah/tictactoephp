<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Helpers\Utils;

class RoomTable extends Model{
    protected $fillable = ['name_room', 'x_player'];
    protected $table ="tb_room";

    public function create($args){
        $randomString = new Utils();
        $createRoom = self::firstOrCreate([
            'name_room' => $randomString->generateRandomString(5),
            'x_player' => $args['name'],
        ]);
    
        return $createRoom;
    }

    public function findRoom($roomname){
        return self::where('name_room','=',$roomname);
    }
}