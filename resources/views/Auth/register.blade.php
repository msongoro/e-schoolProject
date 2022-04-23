@include('pages.head')

<body class="bcolor">
      <div class="container w-25" style="margin-top:100px;">
      @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
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
         <div class="card shadow-lg" style="padding-left:30px; padding-right:30px;">
       <div class="row">
        <img src="Home/assets/img/e-report.png" alt="" class="w-50 float-end">
        <div class="form-group mt-3">
            <form action="submit" method="post">
         @csrf
            <input type="text"  class="form-control" name="firstName" placeholder="first name" value="{{ old('firstName') }}">
        </div>
        <div class="form-group mt-4">
            <input type="text" class="form-control" name="LastName" placeholder="last name" value="{{ old('LastName') }}">
        </div>
        <div class="form-group mt-4">
            <input type="phone" class="form-control" name="phone" placeholder="Phone" value="{{old('phone')}}">
        </div>
        <div class="form-group mt-4">
            <input type="email" class="form-control" name="email" placeholder="email" value="{{ old('email') }}">
        </div>
        <div class="form-group mt-4">
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>

        <button class="btn btn-primary w-50" style="margin-top:24px; margin-left:10px;">Sign Up</button>
</form>
</div>
         <a href="/login" class="alert" style="margin-top:15px;">Already have an Account</a>
</div>
</div>
</body>
</html>
