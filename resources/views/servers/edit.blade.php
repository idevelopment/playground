@extends('layouts.app')

@section('content')
<div class="page-header">
 <h3>{{ $server->name }} - {{ $server->ipaddress }}</h3>
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
          <ul class="nav nav-tabs">
    <li class="nav active"><a href="#A" data-toggle="tab">General</a></li>
    <li class="nav"><a href="#B" data-toggle="tab">Current players</a></li>
    <li class="nav"><a href="#C" data-toggle="tab">Settings</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane fade in active" id="A">
      <div class="row">
        <div class="col-md-12">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('gameServers.gameType') }}</label>
          <div class="col-sm-10">
            <p class="form-control-static">{{ $server->name }}</p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('gameServers.ip') }}</label>
          <div class="col-sm-10">
            <p class="form-control-static">{{ $server->ipaddress }}</p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">{{ trans('gameServers.password') }}</label>
          <div class="col-sm-10">
            <p class="form-control-static">{{ $server->password }}</p>
          </div>
        </div>


      </form>
    </div>
  </div>
    </div>
    <div class="tab-pane fade" id="B">
      @widget('ServerConsole', ['id' => 10])
    </div>
    <div class="tab-pane fade" id="C">Content inside tab C</div>
</div>




        </div>
    </div>
@endsection
