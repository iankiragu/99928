<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="/">099928</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
               <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
           </li>

       </ul>

       <form class="form-inline my-2 my-lg-0" action="particularstudent" method="post" role="search">
         @csrf
           <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-warning" type="submit">Search</button>
       </form>
   </div>
</nav>
<table class="table">
      <thead class="thead-dark">
    <tr>
        <th scope="col">Student Number</th>
        <th scope="col">Full Name</th>
        <th scope="col">Payment Date</th>
        <th scope="col">Amount Paid</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($fees as $fee)
        <tr>
            <td>{{$fee->student_no}}</td>
            <td>{{$fee->full_name}}</td>
            <td>{{$fee->payment_date}}</td>
            <td>{{$fee->amount}}</td>
        </tr>
    @endforeach
    </tbody>
    <tr><td>Total Fees Paid: {{$total}}</td></tr>
</table>
