@extends('layouts.app')

@section('content')
<div class="page-header">
 <h3>Add a new server</h3>
</div>

    <div class="row">
        <div class="col-md-12">
          <form action="{{route('servers.save')}}" method="post" class="form-horizontal">

        <div class="panel panel-default">
         <div class="panel-heading">Server info</div>
          <div class="panel-body">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="gameType" class="col-sm-2 control-label">{{ trans('gameServers.gameType') }} <span class="text-danger">*</span></label>
              <div class="col-sm-7">
                <select name="name" class="form-control" id="gameType" required="">
                  <option value="">-- Please select --</option>
                  @foreach($games as $game_item)
                   <option value="{!! $game_item->name !!}">{!! $game_item->name !!}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="ipaddress" class="col-sm-2 control-label">{{ trans('gameServers.ip') }} <span class="text-danger">*</span></label>
              <div class="col-sm-5">
                <input type="text" name="ipaddress" class="form-control" id="ipaddress" required="">
              </div>

              <div class="col-sm-2">
                <input type="number" name="port" class="form-control" id="port">
              </div>
            </div>

            <div class="form-group">
              <label for="gamePass" class="col-sm-2 control-label">{{ trans('gameServers.password') }} <span class="text-danger">*</span></label>
              <div class="col-sm-7">
                <input type="text" name="gamePass" class="form-control" id="gamePass">
              </div>
            </div>
         </div>
        </div>

        <div class="panel panel-default">
         <div class="panel-heading">Admin Console</div>
          <div class="panel-body">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="adminLink" class="col-sm-2 control-label">Admin link</label>
              <div class="col-sm-7">
                <input type="text" name="adminLink" class="form-control" id="adminLink">
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-7">
                <input type="text" name="username" class="form-control" id="username" value="admin">
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-7">
                <input type="password" name="password" class="form-control" id="password">
              </div>
            </div>
         </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Save server</button>
            <button type="reset" class="btn btn-danger">Cancel</button>

          </div>
        </div>
      </form>
    </div>
</div>
@endsection
