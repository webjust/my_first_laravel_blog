@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="text-align:center; padding-bottom: 10px;">
          <h1><a href="{{ url('/') }}">我的第一个Laravel博客</a></h1>
          <p>本来可以靠才华，却任性的要靠实力！ by 波哥</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">文章列表</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>文章编号</th>
                            <th>文章标题</th>
                            <th>作者</th>
                            <th>创建时间</th>
                        </tr>
                        @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->user_id }}</td>
                            <td>{{ date('Y-m-d H:i:s', $article->created_time) }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
