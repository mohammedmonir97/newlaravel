@extends('dashboard.app')
@section('content')
    <!-- محتوى الصفحة -->

  
    <div class="content-wrapper">
        <section class="content-header">
        <h1> @lang('site.users')</h1>

            <ol class="breadcrumb">
                <li><a href="{{url('dashboard/index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a></li>
                <li class="active">@lang('site.users')</li>
            </ol>
        </section>

        <section class="content">
                 <div class="box box-info">

                        <div class="box-header with-border">
                            <h1 class="box-title"> @lang('site.users')</h1>
                        </div>

                        <div class="box-body">
                             @if($users->count() > 0)
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>@lang('site.first_name')</th>
                                        <th>@lang('site.last_name')</th>
                                        <th>@lang('site.email')</th>
                                        <th>@lang('site.action')</th>
                                    </tr>
                                    @foreach($users as $index=>$user)
                                        <tr>
                                            <td>{{$index + 1}}</td>
                                            <td>{{$user->first_name}} </td>
                                            <td> {{$user->last_name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <a href="{{url('dashboard/users/edit',$user->id)}}" class='btn btn-info btn-sm' style='margin-left:20%'>@lang('site.edit')</a>
                                                <form action="{{url('dashboard/users/destroy',$user->id)}}" method='post' style='display:inline-block'>
                                                    {{ csrf_field() }}
                                                    {{ method_field('delete') }}
                                                    <button type='submit' class='btn btn-danger btn-sm'>@lang('site.delete')</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                             @else
                                <h2>@lang('site.no_data_found')</h2>
                             @endif
                               
                        </div>
                </div>
        </section>

    </div>

@endsection