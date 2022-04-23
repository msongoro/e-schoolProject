@include('pages.head')


<body class="bcolor">
      <div class="container w-25" style="margin-top:100px;">
      @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </ul>
        </div>
        @endif
        @if (Session::has('success'))
        <div class=" alert alert-success">{{ Session::get('success') }}</div>
   @endif
   @if (Session::has('fail'))
   <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif
      <div class="card py-2 px-5 shadow-lg">
       <div class="row">
       <img src="Home/assets/img/e-report.png" alt="" class="w-50 float-end">
           <form action="/login-users" method="post">
         @csrf
        <div class="form-group mt-4">
            <input type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}">
        </div>
        <div class="form-group mt-4">
            <input type="password" class="form-control" name="password" placeholder="password" value="{{ old('password') }}">
        </div>

        <button class="btn btn-primary w-50" style="margin-top:24px; margin-left:4px;">Sign In</button>
             <br>
</form>

<a href="/register" class="alert" style="margin-top:22px;"> Not yet have an Account?</a>
</div>
</div>

</div>


</body>
</html>
