@extends('layouts.app')


@section('content')

<div class="container text-center">
   <p class="text-success"> Overall Stats </p>
        

   <div class="card text-left p-2 border-primary shadow">
        <h3 class="text-success text-center"> Overall Earnings : {{$overallstat}}PHP </h3>
        <p class="text-success text-center"> Overall Order count : {{$overallstatorder}} orders </p>
        <p> Per group overall Earnings  </p>
        <hr> 
            <p> Gio: {{$statgio}}  </p>
            <p> Jirald: {{$statjirald}}</p>
            <p> Jam: {{$statjam}}</p>
            <p> Earl: {{$statearl}}</p>
            <hr>
            <p> All Orders  </p>
       
        <table class="table  table-striped w-auto">
                <thead>
                  <tr>
                   
                    <th scope="col">dayordered</th>
                    <th scope="col">product</th>
                    <th scope="col">quantity</th>
                    <th scope="col">moneypaid</th>
                    <th scope="col">fullpayment</th>
                    <th scope="col">change</th>
                    <th scope="col">status</th>
                  </tr>
                </thead>
                @foreach ( $orders as $order)
                <tbody>
                        <tr>
                           
                                
                            
                         
                          <td>{{ $order->cashier }}</td>
                          <td>{{ $order->product }}</td>  
                          <td>{{ $order->quantity}}</td>   
                        <td>{{ $order->moneypaid }}</td>   
                             <td>{{ $order->fullpayment }}</td>   
                             <td>{{ $order->change }}</td>   
                             <td>{{ $order->status }}</td>   
                            
                        </tr>
                       </tbody>
                       @endforeach
        </table>
   </div>
</div>



@endsection
