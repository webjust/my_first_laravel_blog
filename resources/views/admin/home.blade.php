@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="text-align:center; padding-bottom: 10px;">
          <h1><a href="{{ url('admin') }}">后台</a></h1>
          <p>本来可以靠才华，却任性的要靠实力！ by 波哥</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <ul>
            <li>
              <a href="{{ url('admin/article') }}" class="btn btn-lg btn-success col-xs-2">管理文章</a>
            </li>
          </ul>
        </div>
    </div>
</div>
@endsection
