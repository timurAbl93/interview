@extends('defaulte')
<head>
    
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
</head>
    <style type="text/css">
        body {
        margin: 61px;
        }
        .quention{
            background: #E2F0FD;
        }
    </style>

<body>
@section('content')
    <div class="container">    
        

            <div class="row"> 
                <div class="span9"> 
                <h1> Вопросы из  анкеты

                @foreach($interviews as $interview)

                    {{$interview->title}}
                @endforeach

                </h1>

                @if($quentions && $answers)
                    <form action="" method="post">



                        <div class="col-xs-6">
                            @foreach($quentions as $quention)

                            <h5><p class="text-success">{{$quention->title}}</p></h5>

                            <select name="answers[]"  class="form-control">

                                    @foreach($answers as $answer)

                                        @if($quention->id == $answer->quention_id)

                                        <option value ='{{$answer->id}}'> {{$answer->title}} </option><br>

                                        @endif

                                    @endforeach

                                </select>

                            @endforeach
                        </div>
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                              <button type="submit" class="btn btn-primary">Ответить</button>
                            </div>
                        </div> 
                    </form>
                @else Здесь нет записей!
                @endif
                  </div>
                <div class="span3">
                    <a href="">Выйти</a>
                </div>    
            </div>        
        
    </div>
@stop
</body>
