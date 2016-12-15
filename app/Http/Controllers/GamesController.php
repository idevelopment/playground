<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Games;


class GamesController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {

  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data['games'] = Games::where('public', 1)->orderBy('name', 'asc')->get();
    return view('games.index', $data);
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function list()
  {
    $data['games'] = Games::orderBy('name', 'asc')->get();
      return view('games.list');
  }

  /**
   * Add a new game to the database.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('games.create');
  }

  /**
   * Save the new game to the database.
   *
   * @return \Illuminate\Http\Response
   */
   public function save(Request $request)
   {
     $games = new Games;
     $games->name = $request->name;
     $games->public = $request->public;
     $ames->save();

     return redirect()->route('games.list')->with('success', 'The game has been stored in the database.');
   }

  /**
   * Remove the game from the database.
   *
   * @return \Illuminate\Http\Response
   */
  public function remove($id)
  {
    $games = Games::find($id);
    $games->delete();

    return redirect()->route('games.list');
  }

}
