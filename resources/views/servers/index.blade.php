@extends('layouts.app')

@section('content')
<div class="page-header">
 <h3>{{ trans('gameServers.title') }}</h3>
</div>

  <div class="row">
      <div class="col-md-12">
        @if(session('success'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4>Operation completed</h4>
          {{session('success')}}
        </div>
        @endif
      </div>
  </div>

    <div class="row">
        <div class="col-md-12">
          <div class="well">
            <p>Below you can find all our game servers that you can use to connect.<br>
            if you have any issues with connecting to one of our servers<br>
            Please create a ticket so we can investigate the cause.</p>
          </div>

          <div class="pull-right">
            <a href="{{route('servers.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> {{ trans('gameServers.create') }}</a>
          </div>

          <div class="clearfix">&nbsp;</div>
          <div class="clearfix">&nbsp;</div>

          <table class="table table-bordered">
            <thead>
              <th>{{ trans('gameServers.gameType') }}</th>
              <th class="text-center">{{ trans('gameServers.ip') }}</th>
              <th class="text-center">{{ trans('gameServers.password') }}</th>
              <th class="text-center">{{ trans('gameServers.status') }}</th>
              <th class="col-md-2 text-center">{{ trans('gameServers.actions') }}</th>
            </thead>
            <tbody>
              @foreach($servers as $server)
              <tr>
                <td>{{ $server->name }}</td>
                <td class="text-center">{{ $server->ipaddress }}:{{ $server->port }}</td>
                <td class="text-center">{{ $server->password }}</td>
                <td class="text-center text-success">Running</td>
                <td class="text-center">
                  <a href="{{route('servers.edit', $server->id)}}"><i class="fa fa-cog" data-toggle="tooltip" data-placement="bottom" title="Configure"></i></a>
                  <a href="{{route('servers.remove', $server->id)}}">{{ trans('gameServers.remove') }}</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
@endsection
