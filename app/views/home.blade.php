@extends('layouts.master')

@section('content')
<div class="container">
    <div class="">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <div class="col-lg-12 center-block">
            {{ Form::open(array('url' => '/poncized', 'method' => 'get')) }}
                @if($errors->has())
                    @foreach($errors->all() as $message)
                    <div class="alert alert-warning">
                        <a class="close" data-dismiss="alert">×</a> 
                        {{ $message }}
                    </div>
                    @endforeach
                @endif            
            <div class="input-group">
            {{ Form::text('url','http://',array('class' => 'form-control','placeholder'=>'Íld ide melyik oldalt szeletnéd látni! (http://-vel)')) }}
              <span class="input-group-btn">
            {{ Form::submit('Poncize!',array('class'=>'btn btn-info')) }}
              </span>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop