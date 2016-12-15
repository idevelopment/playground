<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use App\Servers;
use \jyc\rcon\Rcon as Rcon;

class ServerConsole extends AbstractWidget
{
  protected $config = [
      'id'   => 6
  ];


  /**
   * The number of seconds before each reload.
   *
   * @var int|float
   */
  public $reloadTimeout = 10;


  public function placeholder()
  {
      return "Loading...";
  }

  /**
   * Async and reloadable widgets are wrapped in container.
   * You can customize it by overriding this method.
   *
   * @return array
   */
  public function container()
  {
      return [
          'element'       => 'div',
          'attributes'    => 'style="display:inline" class="arrilot-widget-container"',
      ];
  }

  /**
   * Treat this method as a controller action.
   * Return view() or other content to display.
   */

  public function run()
    {
      /*

        $ip = $server->ipaddress;
        $port = 30120;
        $gamePass = $server->password;

        $con = new Rcon($server, $port, $gamePass);
        $connect = $con->connect();

      	$server_players_array=explode("\n",$con->command("status"));
        $xpop = array_pop($server_players_array);
        $server_players_total = count($server_players_array);

        return view("servers.partials.players");
*/
        //var_dump($server);
        $data['server'] = Servers::find(6);
        return view("servers/partials/players", [
            'config' => $this->config,
        ], $data);
    }
  }
