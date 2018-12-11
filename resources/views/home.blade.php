@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <ul>
                        <li>{{$user->name}}</li>
                        
                        @if ($user_role->see_menu)
                        <li>Menu... means he can see menu</li>
                        @endif

                        @if ($user_role->see_bar)
                        <li>Bar... means he can see bar</li>
                        @endif

                        @if ($user_role->see_title)
                        <li>Title... means he can see title</li>
                        @endif

                        @if ($user_role->see_hello)
                        <li>Hello... means he can see hello</li>
                        @endif
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
