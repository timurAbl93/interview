@extends('defaulte')
@section('content')

@if (Auth::check())

    <blockquote>
           <p><h2>Список доступных тестов.</h2></p>
           @if($data )
               @foreach($data as $test)
               <ul ><h3><a href='test/{{$test->id}}' class=".text-primary">{{$test->title}}</a></h3></ul>
               @endforeach
           @else(список пуст)    
           @endif

    </blockquote>
<a href="/logout">выйти</a>
@else


    <div >
        <h4><p class="text-success">для прохождения анкеты нужно залогиниться</p></h4>
    </div>    

    <div class="reg">
        <a id="reg">или зарегистрироваться</a>
    
</div>
 <form class="form"method="post" role="form">
     <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Введите email">  
     </div>
        
     <div class="form-group">
      <label for="pass">Пароль</label>
      <input type="password" class="form-control" name="password" placeholder="Пароль">
     </div>
     <input type="hidden" name="_token" value="{{ csrf_token() }}">   
     <button type="submit" class="btn btn-success">Зарегистрироваться</button>
     
    </form>
<div class='res'></div>
        
    
</div>
 
@endif
@stop
