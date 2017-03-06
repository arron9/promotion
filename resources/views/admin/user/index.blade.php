@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">用户列表</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                        @endif
             <table class="table table-striped">
              <thead>
                <tr>
                  <th>id</th>
                  <th>名称</th>
                  <th>邮箱</th>
                  <th>创建时间</th>
                  <th>更新时间</th>
                  <th>操作</th>
                </tr>
              </thead>
              <tbody>
                        @foreach ($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td>{{ $user->updated_at }}</td>
                  <td>
                        <a href="{{ url('admin/user/'.$user->id.'/edit') }}" class="btn btn-success">编辑</a>
                        <form action="{{ url('admin/user/'.$user->id) }}" method="POST" style="display: inline;">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">删除</button>
                        </form>
</td>
                </tr>
                    @endforeach
              </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
