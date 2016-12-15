<table class="table">
  <thead>
            <tr>
              <th>{{ trans('gameServers.gamerTag') }}</th>
              <th>{{ trans('gameServers.steamAccount') }}</th>
              <th>{{ trans('gameServers.ipaddress') }}</th>
              <th>{{ trans('gameServers.ping') }}</th>
              <th>{{ trans('gameServers.kick') }}</th>
              <th>{{ trans('gameServers.ban') }}</th>
            </tr>
          </thead>
  <tbody>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><a href='#' class='btn btn-link'> {{ trans('gameServers.kick') }}</a></td>
      <td><a href='#' class='btn btn-danger btn-sm'> {{ trans('gameServers.ban') }}</a></td>
    </tr>
  </tbody>
</table>
