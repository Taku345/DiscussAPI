<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
  // public function __construct()
  // {
  //   $this->middleware('auth')->except(['index', 'show']);
  // }

  public function index()
  {
    $json = Room::all();
    return response()->json(
      $json,
      200,
      [],
      JSON_UNESCAPED_UNICODE //文字化け対策
    );
  }

  public function store(Request $request)
  {
    $room = Room::create([
      'user_id' => Auth::id(),
      'name' => $request->name,
      'description' => $request->description,
      'started_at' => $request->started_at,
      'finished_at' => $request->finished_at,
    ]);
    return response()->json(
      $room,
      201
    );
  }

  public function show($id)
  {
    return Room::find($id); //実は配列などを直接リターンしても良い
  }

  public function update(Request $request, $id)
  {
    // $update = [
    //   'title' => $request->title,
    //   'author' => $request->author
    // ];
    $room = Room::where('id', $id)->update($request->all());
    if ($room) {
      return response()->json(
        $room,
        200
      );
    } else {
      return response()->json([
        'message' => 'Room update error',
      ], 404);
    }
  }

  public function destroy($id)
  {
    $room = Room::where('id', $id)->delete();
    if ($room) {
      return response()->json([
        'message' => 'Room deleted successfully',
      ], 200);
    } else {
      return response()->json([
        'message' => 'Room not found',
      ], 404);
    }
  }
}
