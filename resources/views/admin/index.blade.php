@extends('layouts.header')

@section('content')
   <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <!-- Small boxes (Stat box) -->
    <div class="row">
                    <div class="col-md-12">
                        <div class="box" style="width:auto">
             

                        <div class="box-body" style="min-width:400px;overflow-x: scroll;white-space: nowrap">
<table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>标题</th>
                                        <th>更新时间</th>
                                            <th>赛程</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="" v-for="item in items">
                                        <td>{[item.id]}</td>
                                        <td>{[item.title]}</td>
                                        <td>{[item.updated]}</td>
                                            <td v-if="element.label">{[element.label]}</td>
                                        <td width="200px">
                                            <a class="btn btn-info" v-link="{ path: '/creative/edit/'+ item.id }">编辑</a>
                                            <a class="btn btn-danger" v-on:click="remove(item.id, $index)">删除</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
</div>
</div>
</div>


</div>

    </section>
    <!-- /.content -->
@endsection
