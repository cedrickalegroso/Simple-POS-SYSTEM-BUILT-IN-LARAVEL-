@extends('layouts.app')


@section('content')


@foreach ($orders as $thisorder)

<div class="container text-center">
        <h3 > <a href="/home" > Go back to order Page </a>  </h3>

    <div class="row">
        <div class="col-md-6">
                <div class="card p-2">

                        <h3 class="text-success text-center"> Order Invoice </h3> 
                   
                        <div class="row">
                            <div class="col-md-6">
                              <p> Ordered Product: </p>
                            </div>
                            <div class="col-md-6">
                                   {{$thisorder->product}}
                               </div>
                        </div>
                   
                        <div class="row">
                               <div class="col-md-6">
                                 <p> Ordered Quantity: </p>
                               </div>
                               <div class="col-md-6">
                                       {{$thisorder->quantity}}
                                  </div>
                           </div>
                   
                           <div class="row">
                                   <div class="col-md-6">
                                     <p> Money Paid: </p>
                                   </div>
                                   <div class="col-md-6">
                                           {{$thisorder->moneypaid}}
                                      </div>
                               </div>
                   
                               <div class="row">
                                       <div class="col-md-6">
                                         <p> Full Payment: </p>
                                       </div>
                                       <div class="col-md-6">
                                               {{$thisorder->fullpayment}}
                                          </div>
                                   </div>
                   
                   
                                   <div class="row">
                                           <div class="col-md-6">
                                             <p> Change: </p>
                                           </div>
                                           <div class="col-md-6">
                                                   {{$thisorder->change}}
                                              </div>
                                       </div>
                                   
                                     
                                   </div>
                                  
        </div>

        <div class="col-md-6 text-center">
                <div class="card p-2">
                        <h3 class="text-success text-center">  Todays Stats </h3> 
                          <h4 class="text-center text-success"> {{$overallstat}}PHP </h4>
                        <div class="text-left">
                                <p> Per group Earnings  </p>
                                <hr> 
                                    <p> Gio: {{$statgio}}  </p>
                                    <p> Jirald: {{$statjirald}}</p>
                                    <p> Jam: {{$statjam}}</p>
                                    <p> Earl: {{$statearl}}</p>
                        </div>
                      
                        
                       
                </div>
        </div>
    </div>

   

</div>




@endforeach

@endsection
