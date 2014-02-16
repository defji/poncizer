@extends('layouts.master')

@section('content')
<div class="container">
        <p>
             Zaval hogy nem tudsz minden oldalt helyesen olvasni? Konveltáld!
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
            {{ Form::text('url','http://',array('class' => 'form-control','autocomplete'=>'off','placeholder'=>'Íld ide melyik oldalt szeletnéd látni! (http://-vel)','id'=>'source_url')) }}
              <span class="input-group-btn">
            {{ Form::submit('Poncize!',array('class'=>'btn btn-info')) }}
              </span>
            {{ Form::close() }}
            </div>
        </div>
</div>
@stop