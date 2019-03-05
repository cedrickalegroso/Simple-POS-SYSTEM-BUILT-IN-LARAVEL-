@extends('layouts.app')


@section('content')




<div class="container">
        <h1 class="display-4"> Choose Order </h1>
    <div class="row justify-content-center">

       <div class="row">
           <div class="col-md-4">
               
                      
                     
               <div class="card"  data-toggle="modal" data-target="#grilledcheese">
                    <img src="{{ URL::to('media/grilledcheese.png') }}"   style="width:100%" class="img-fluid"/> 
                    <h3 class="text-center mt-1"> Grilled cheese </h3> 

                    
               </div>
           
           </div>
           <div class="col-md-4">
               <div class="card" data-toggle="modal" data-target="#fruitycrepe">
                    <img src="{{ URL::to('media/fruitycrepe.png') }}" style="width:100%" class="border-4 border-info"/> 
                   
                    <h3 class="text-center mt-1">  Fruity Crepe </h3> 
               </div>
               
            </div>
            <div class="col-md-4">
                <div class="card" data-toggle="modal" data-target="#cheesysiomai">
                        <img src="{{ URL::to('media/chessysiomai.png') }}"  style="width:100%" class="border-4 border-info"/> 
                     
                        <h3 class="text-center mt-1">     Cheesy Siomai </h3> 
                </div>
                   
                </div>
       </div>

    </div>
</div>



<div class="container mt-5">
        
    <div class="row justify-content-center">

       <div class="row">

           <div class="col-md-4">
               <div class="card" data-toggle="modal" data-target="#shake">
                    <img src="{{ URL::to('media/shakeee.png') }}"  style="width:100%" class="border-4 border-info"/> 
                    <h3 class="text-center mt-1"> Shake </h3> 
               </div>
           </div>

           <div class="col-md-4">
               <div class="card"  data-toggle="modal" data-target="#fried_oreos" >
                    <img src="{{ URL::to('media/fried_oreos.png') }}"  style="width:100%" class="border-4 border-info"/> 
                   
                    <h3 class="text-center mt-1">  Fried Oreos </h3> 
               </div>
               
            </div>
        
            <div class="col-md-4">
                    <div class="card">
                            <img src="{{ URL::to('media/walalanmg.png') }}"  style="width:100%" class="border-4 border-info"/> 
                        
                            <h3 class="text-center mt-1">  Wala lang </h3> 
                    </div>
                    
                 </div>
             
      

    </div>

  

</div>



<!-- Modal -->
<div class="modal fade" id="grilledcheese" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Grilled Cheese </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                  
  
                    <form method="post" action="{{ route('ordergrilledcheese', [ 'price' => "25" ])}}">
                        @csrf
                          <div class="row">
                              <div class="col-md-6">
  
                      <label class="mr-sm-2" for="quantity"> Select Quantity</label>
  
  
                              </div>
  
                               <div class="col-md-6">
  
                          <input type="number" class="form-control " name="quantity" id="quantity" value="1"    required/>
  
  
                              </div>
                            
                          </div>
  
  
                              <div class="row mt-3">
                                <div class="col-md-6">
                          <label class="mr-sm-2" for="moneypaid"> Money Paid </label>
                                </div>
  
                                <div class="col-md-6">
                                      <input type="number" class="form-control " name="moneypaid" id="moneypaid" placeholder="Money Paid"   required/>
                                </div>
  
                            </div>
  
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Place Order</button>
  
                      </form>
              </div>
           
           
          </div>
        </div>
      </div>



      <!-- Fruity Crepe -->
<div class="modal fade" id="fruitycrepe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">  Fruity Crepe </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                  
  
                    <form method="post" action="{{ route('orderfruitycrepe', [ 'price' => "35" ])}}">
                        @csrf
                          <div class="row">
                              <div class="col-md-6">
  
                      <label class="mr-sm-2" for="quantity"> Select Quantity</label>
  
  
                              </div>
  
                               <div class="col-md-6">
  
                          <input type="number" class="form-control " name="quantity" id="quantity" value="1"    required/>
  
  
                              </div>
                            
                          </div>
  
  
                              <div class="row mt-3">
                                <div class="col-md-6">
                          <label class="mr-sm-2" for="moneypaid"> Money Paid </label>
                                </div>
  
                                <div class="col-md-6">
                                      <input type="number" class="form-control " name="moneypaid" id="moneypaid" placeholder="Money Paid"   required/>
                                </div>
  
                            </div>
  
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Place Order</button>
  
                      </form>
              </div>
           
           
          </div>
        </div>
      </div>


      
      
      <!-- Cheesy Siomai -->
<div class="modal fade" id="cheesysiomai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">  Cheesy Siomai </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                  
  
                    <form method="post" action="{{ route('ordercheesysiomai', [ 'price' => "35" ])}}">
                        @csrf
                          <div class="row">
                              <div class="col-md-6">
  
                      <label class="mr-sm-2" for="quantity"> Select Quantity</label>
  
  
                              </div>
  
                               <div class="col-md-6">
  
                          <input type="number" class="form-control " name="quantity" id="quantity" value="1"    required/>
  
  
                              </div>
                            
                          </div>
  
  
                              <div class="row mt-3">
                                <div class="col-md-6">
                          <label class="mr-sm-2" for="moneypaid"> Money Paid </label>
                                </div>
  
                                <div class="col-md-6">
                                      <input type="number" class="form-control " name="moneypaid" id="moneypaid" placeholder="Money Paid"   required/>
                                </div>
  
                            </div>
  
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Place Order</button>
  
                      </form>
              </div>
           
           
          </div>
        </div>
      </div>

         <!-- Shake -->
<div class="modal fade" id="shake" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">  Shake </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                  
  
                    <form method="post" action="{{ route('ordershake')}}">
                        @csrf
                          <div class="row">
                              <div class="col-md-6">
  
                      <label class="mr-sm-2" for="quantity"> Select Quantity</label>
  
  
                              </div>
  
                               <div class="col-md-6">
  
                          <input type="number" class="form-control " name="quantity" id="quantity" value="1"    required/>
  
  
                              </div>
                            
                          </div>
  
  
                              <div class="row mt-3">
                                <div class="col-md-6">
                          <label class="mr-sm-2" for="moneypaid"> Money Paid </label>
                                </div>
  
                                <div class="col-md-6">
                                      <input type="number" class="form-control " name="moneypaid" id="moneypaid" placeholder="Money Paid"   required/>
                                </div>
  
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                        <label class="mr-sm-2" for="size"> Size </label>
                                </div>
                                <div class="col-md-6">
                                        <select name="size" class="form-control">
                                                <option value="30">Small</option>
                                                <option value="40">Medium</option>
                                                <option value="45">Large</option>
                                              </select>
                                    </div>
                            </div>
  
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Place Order</button>
  
                      </form>
              </div>
           
           
          </div>
        </div>
      </div>


             <!--  fried_oreos -->
<div class="modal fade" id="fried_oreos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">  Fried Oreo </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                  
  
                    <form method="post" action="{{ route('orderfried_oreos', [ 'price' => "7" ])}}">
                        @csrf
                          <div class="row">
                              <div class="col-md-6">
  
                      <label class="mr-sm-2" for="quantity"> Select Quantity</label>
  
  
                              </div>
  
                               <div class="col-md-6">
  
                          <input type="number" class="form-control " name="quantity" id="quantity" value="1"    required/>
  
  
                              </div>
                            
                          </div>
  
  
                              <div class="row mt-3">
                                <div class="col-md-6">
                          <label class="mr-sm-2" for="moneypaid"> Money Paid </label>
                                </div>
  
                                <div class="col-md-6">
                                      <input type="number" class="form-control " name="moneypaid" id="moneypaid" placeholder="Money Paid"   required/>
                                </div>
  
                            </div>

  
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Place Order</button>
  
                      </form>
              </div>
           
           
          </div>
        </div>
      </div>
 

     

      
@endsection
