<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<title>Fees</title>
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
   </div>
</nav>
<br>
<form method="POST" action="">
    @csrf
    <div class="form-group row">
        <label for="student_no" class="col-md-4 col-form-label text-md-right">{{ __('Student Number') }}</label>
        <div class="col-md-6">
            <input id="student_no" type="text" class="form-control" name="student_no" required autofocus>
        </div>
    </div>

    <input id="full_name" type="hidden" class="form-control" name="full_name" required autofocus>

    <div class="form-group row">
        <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount Paid') }}</label>
        <div class="col-md-6">
            <input id="amount" type="text" class="form-control" name="amount" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="payment_date" class="col-md-4 col-form-label text-md-right">{{ __('Date Paid') }}</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="payment_date" id="datepicker">
            <small>Format: dd/mm/yyyy</small>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Pay') }}
            </button>
        </div>
    </div>
</form>
