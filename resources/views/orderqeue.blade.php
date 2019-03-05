@extends('layouts.app')


@section('content')

<div class="container text-center">

<h1 class="text-success">  Order Queue  </h1>

 @foreach ($orderqeue as $orderqeues)

 <div class="card border-primary shadow mt-5 p-1 text-center text-primary">
      <h3> Product:   {{ $orderqeues->product }} </h3> <br />
      <h3> Quantity:   {{ $orderqeues->quantity }} </h3> <br />
      <h3> Ordered:   {{ $orderqeues->created_at->diffForHumans() }} </h3> <br />
       <div class="row">
           <div class="col-md-6">
                <button class="btn btn-danger ">  <a href=" {{ route('ordercancelled', ['token' => $orderqeues->order_token ])}} " class="text-white">Order Cancelled </a> </button>

           
           </div>
           <div class="col-md-6">
           <button class="btn btn-success ">  <a href=" {{ route('orderdone', ['token' => $orderqeues->order_token ])}} " class="text-white"> Order Done </a> </button>
            </div>
       </div>
 </div>

 @endforeach    
       


 </div>

     
<script type="text/javascript">
    function autoRefreshPage()
    {
        window.location = window.location.href;
    }
    setInterval('autoRefreshPage()', 30000);
</script>



@endsection
