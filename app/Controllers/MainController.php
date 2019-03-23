<?php

namespace App\Controllers;

use App\Controllers\Controller;
use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};
use App\Models\RoomTable;
use App\Models\BattleTable;
use Slim\Exception\NotFoundException;
use \Psr\Http\Message\ResponseInterface;

class MainController extends Controller
{
 /**
   * create tictactoe room
   * @SWG\Post(
   *     path="/room/{name}",
   *     description="Create Tictactoe Room",
   *     operationId="",
   *     produces={"application/json"},
   *     tags={"createroom"},
       *      @SWG\Parameter(
       *          name="name",
       *          in="path",
       *          default="{your_name}",
       *          description="input your name",
       *          required=true,
       *          @SWG\Schema(
       *             @SWG\Property(property="name", type="string", example="david"),
       *             )
       *      ),

   *
   *     @SWG\Response(
   *         response=200,
   *         description="OK"
   *     ),
   *     @SWG\Response(
   *         response=422,
   *         description="Unprocessable Entity"
   *     )
   * )
   */
    public function createRoom(Request $request, Response $response, $args)
    {
        $ren = new RoomTable();
        $status = $ren->create($args);
        return $response->withStatus(201)->withJson([
            'status' => 'sukses',
            'roomDetail' => $status,
        ]);
    }
     /**
   * Entry Invited Room
   * @SWG\Post(
   *     path="/room/{roomname}/{name}",
   *     description="Entry room",
   *     operationId="",
   *     produces={"application/json"},
   *     tags={"createroom"},
       *      @SWG\Parameter(
       *          name="roomname",
       *          in="path",
       *          default="",
       *          description="input room name",
       *          required=true,
       *          @SWG\Schema(
       *             @SWG\Property(property="roomname", type="string", example="K9VuE"),
       *             )
       *      ),
       *      @SWG\Parameter(
       *          name="name",
       *          in="path",
       *          default="",
       *          description="input your name",
       *          required=true,
       *          @SWG\Schema(
       *             @SWG\Property(property="name", type="string", example="david"),
       *             )
       *      ),
   *
   *     @SWG\Response(
   *         response=200,
   *         description="OK"
   *     ),
   *     @SWG\Response(
   *         response=422,
   *         description="Unprocessable Entity"
   *     )
   * )
   */
    public function entryRoom(Request $request, Response $response, $args)
    {
        $ren = new RoomTable();
        $status = $ren->findRoom($args['roomname']);
        if($status->get()->isEmpty())return $response->withStatus(404)->withJson(['status' => "not found", 'messages' => "invalid room"]);
        $status->update(['o_player' => $args['name']]);
        return $response->withStatus(201)->withJson([
            'status' => 'sukses',
            'roomDetail' => $status->get(),
        ]);
    }
         /**
   * Give Position
   * @SWG\Post(
   *     path="/room/{roomname}/{name}/{row}/{column}",
   *     description="Give position",
   *     operationId="",
   *     produces={"application/json"},
   *     tags={"createroom"},
       *      @SWG\Parameter(
       *          name="roomname",
       *          in="path",
       *          default="",
       *          description="input room name",
       *          required=true,
       *          @SWG\Schema(
       *             @SWG\Property(property="roomname", type="string", example="K9VuE"),
       *             )
       *      ),
       *      @SWG\Parameter(
       *          name="name",
       *          in="path",
       *          default="",
       *          description="input your name",
       *          required=true,
       *          @SWG\Schema(
       *             @SWG\Property(property="name", type="string", example="david"),
       *             )
       *      ),
       *         @SWG\Parameter(
       *          name="row",
       *          in="path",
       *          default="",
       *          description="input row",
       *          required=true,
       *          @SWG\Schema(
       *             @SWG\Property(property="row", type="string", example="0"),
       *             )
       *      ),
       *         @SWG\Parameter(
       *          name="column",
       *          in="path",
       *          default="",
       *          description="input column",
       *          required=true,
       *          @SWG\Schema(
       *             @SWG\Property(property="column", type="string", example="0"),
       *             )
       *      ),
   *
   *     @SWG\Response(
   *         response=200,
   *         description="OK"
   *     ),
   *     @SWG\Response(
   *         response=422,
   *         description="Unprocessable Entity"
   *     )
   * )
   */
  public function givePosition(Request $request, Response $response, $args)
  {
        $ren = new RoomTable();
        $room = $ren->findRoom($args['roomname']);

        $be = new BattleTable();
        $battle = $be->findRoomBattle($args['roomname']);

        if($room->get()->isEmpty())return $response->withStatus(404)->withJson(['status' => "not found", 'messages' => "invalid room"]);

        if(!$room->get()->contains("winner", null))
        return $response->withStatus(404)->withJson(['status' => 'this battle has beend finished']);

        if($room->get()->contains('x_player', $args['name']) && $room->get()->contains('o_player', null))
        return $response->withStatus(404)->withJson(['status' => 'o player not ready']);

        if(!$room->get()->contains('x_player', $args['name']) && !$room->get()->contains('o_player', $args['name']))
        return $response->withStatus(404)->withJson(['status' => "don't have access", 'messages' => "you don't have access to this battle"]);

        if($args['row'] > 2 || $args['column'] > 2)
        return $response->withStatus(404)->withJson(["status" => "invalid position"]);

        if($battle->get()->isEmpty() && $room->get()->contains('o_player', $args['name']))
        return $response->withStatus(404)->withJson(['status' => "player x first"]);

        if($battle->get()->last()['player'] == $args['name'] )
        return $response->withStatus(404)->withJson(['status' => 'lawan belum memberikan langkah']);

        foreach($battle->get()->toArray() as $battles){
            if($battles['row_square'] == $args['row'] && $battles['column_square'] == $args['column'])
            return $response->withStatus(404)->withJson(['status'=>'give another position']);
        }
  

        $be->room_name = $args['roomname'];
        $be->player = $args['name'];
        $be->row_square = $args['row'];
        $be->column_square = $args['column'];
        $be->save();
        $winner = $this->takeWinner($room->get()->last()['name_room'], $room->get()->last()['x_player'], $room->get()->last()['o_player']);
        return $response->withStatus(201)->withJson($winner);
  }

  public function takeWinner($roomname, $xplayer, $oplayer)
  {
      $ren = new RoomTable();
      $be = new BattleTable();
      $room = $ren->findRoom($roomname);
      $battles = $be->findRoomBattle($roomname)->get();
      $returnValue['winner'] = "none";
      $returnValue['status'] = "on battle";
      $squares = [
        ['-','-','-'],
        ['-','-','-'],
        ['-','-','-'],
      ];

      //if($battles->count() > 9) $winner = "none"; $status = "draw";
      foreach($battles->toArray() as $battle){
         if($battle['player'] == $xplayer)
         $squares[$battle['row_square']][$battle['column_square']] = "X";

         if($battle['player'] == $oplayer)
         $squares[$battle['row_square']][$battle['column_square']] = "O";
      }

        if($battles->count() > 9) {
            $returnValue["winner"] = "none";
            $returnValue["status"] = "draw";
          }else{
              $winner = $this->calculateSquare($squares);
                if($winner != "-"){
                  $returnValue['winner'] = $winner === "X" ? $xplayer : $oplayer;
                  $returnValue['status'] = "finished";
                  $returnValue['squares'] = $squares;
                  //$room->update(['winner' => $returnValue['winner']]);
                }
          }
        $returnValue['squares'] = $squares;
        return $returnValue;

  }

  public function calculateSquare($squares){
        $winner = "";
      for($i = 0; $i < count($squares); $i++){
          for($j = 0; $j < count($squares); $j++){
                if($squares[$i][$j] != "-"){
                    if($squares[$i][0] == $squares[$i][0] && $squares[$i][1] == $squares[$i][0] && $squares[$i][2] == $squares[$i][0])
                    $winner = $squares[$i][0];

                    if($squares[0][$i] == $squares[0][$i] && $squares[1][$i] == $squares[0][$i] && $squares[2][$i] == $squares[0][$i])
                    $winner = $squares[0][$i];

                    if($squares[0][0] == $squares[0][0] && $squares[1][1] == $squares[0][0] && $squares[2][2] == $squares[0][0])
                    $winner = $squares[0][0];

                    if($squares[0][2] == $squares[0][2] && $squares[1][1] == $squares[0][0] && $squares[2][2] == $squares[0][2])
                    $winner = $squares[2][2];
                }
          }
      }

      return $winner;
  }
}
