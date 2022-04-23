@include('pages.head')

<body>
    

<div class="container mt-4">
   
    @foreach($student as $students)
    <div class="col-md-4 col-sm-6 col-lg-2">
    <div class="card card-secondary mt-3">
    <h4>Fisrt Name: {{$students->firstName}}</h4>
    <h5>Last Name:  {{$students->lastName}}</h5>
    <h6>Email : {{$students->email}}</h6>
    <p>Created: {{$students->created_at}}</p>
    <p>Created: {{$students->created_at}}</p>
   </div>
   </div>
@endforeach
</div>



</body>
</html>