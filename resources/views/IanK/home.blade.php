@extends('layouts.default')
@section('Content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="/">099928</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">

       <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
               <a class="nav-link" href="/">STUDENTS FEES MODULE <span class="sr-only">(current)</span></a>
           </li>

       </ul>
   </div>

</nav>

<center>
  <br>
  <center>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-7">
<div class="card" style="width: 18rem;">
  <div class="card-body">
        <h5 class="card-title"><b><u>Student Registration</b></u></h5>
    <p class="card-text">Involves Registration of New Students into the System</p>
    <a href="student" class="btn btn-Success">Register Student</a>
  </div>
</div>
</div>

<div class="col-sm-1">
<div class="card" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title"><b><u>Student Records</b></u></h5>
<p class="card-text">A Detailed Report of all students in the system</p>
<a href="studentRecord" class="btn btn-Success">View Student Details</a>

</div>
</div>
</div>
</div>
</div>
</center>
<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-7">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><b><u>Enter Fees Details</b></u></h5>
    <p class="card-text">Record Fees paid in relation to their respective date</p>
    <a href="fees" class="btn btn-primary">Fee Entry</a>
  </div>
</div>
</div>
    <div class="col-sm-1">
<div class="card" style="width: 18rem;">
  <div class="card-body">
        <h5 class="card-title"><b><u>Fees Records</b></u></h5>
    <p class="card-text">A Detailed Report of Fees paid alongside their payment dates</p>
    <a href="FeesPaid" class="btn btn-primary">Fees Paid</a>
  </div>
</div>
</div>
</div>
</div>
