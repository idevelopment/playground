<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servers;
use App\Games;

use \jyc\rcon\Rcon as Rcon;

class ServersController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $data['servers'] = Servers::orderBy('name', 'asc')->get();
    return view('servers.index', $data);

    /* check status for each server
    $Check = fsockopen("websistent.com",80);
    if($Check)
    {
    print "I can see port 80";
    fclose($Check);
    }
    else
    {
    print "I cannot see port 80";
    }
    */
  }

  /**
   * Show the registration form to create a new server.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $data['games'] = Games::orderBy('name', 'asc')->get();
    return view('servers.create', $data);
  }

  /**
   * Save the new server to the database.
   *
   * @return \Illuminate\Http\Response
   */
  public function save(Request $request)
  {
    $server = new Servers;
    $server->name = $request->name;
    $server->ipaddress = $request->ipaddress;
    if(empty($request->port)){
      $server->port = 0;

    }else{
      $server->port = $request->port;
    }
    $server->password = $request->gamePass;
    $server->save();

    return redirect()->route('servers.index')->with('success', 'The new server has been stored in the database.');
  }

  /**
   * Remove the server from the database.
   *
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $server = Servers::find($id);
    $data['server'] = $server;

    return view('servers.edit', $data);
  }

  /**
   * Remove the server from the database.
   *
   * @return \Illuminate\Http\Response
   */
  public function delete($id)
  {
    $server = Servers::find($id);
    $server->delete();

    return redirect()->route('servers.index')->with('success', 'The server has been removed from the database.');
  }
}
