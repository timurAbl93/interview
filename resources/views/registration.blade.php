<head>
    
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
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
</body>