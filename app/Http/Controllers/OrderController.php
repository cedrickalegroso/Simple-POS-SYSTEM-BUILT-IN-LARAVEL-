<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;

class OrderController extends Controller
{  

     /**
     * order success
     *
     * @return void
     */
    public function review($token )
    {
          //get the class from class code
      $orders = Order::where('order_token', $token)
      ->take(1)
        ->get();

        

        $statgio= Order::where('groupleader', "Gio")
        ->sum('fullpayment');

        $statjirald = Order::where('groupleader', "Jirald")
        ->sum('fullpayment');

        $statjam = Order::where('groupleader', "Jam")
        ->sum('fullpayment');

        $statearl = Order::where('groupleader', "Earl")
        ->sum('fullpayment');


        $overallstat= Order::sum('fullpayment');

        return view('ordersuccesspage' , ['orders' => $orders, 'statgio' => $statgio, 'statjirald' => $statjirald, 'statjam' => $statjam, 'statearl' => $statearl, 'overallstat' => $overallstat ]);
          
    }


      /**
     * reviewday
     *
     * @return void
     */
    public function reviewday($token )
    {
      //params 

      $cashier = Auth::user()->name;

          //get the class from class code
      $orders = Order::where('cashier', $cashier)
      ->Where('order_token', $token)
      ->take(1)
        ->get();

        

        $statgio= Order::where('groupleader', "Gio")
        ->Where('cashier', $cashier)
        ->sum('fullpayment');

        $statjirald = Order::where('groupleader', "Jirald")
        ->Where('cashier', $cashier)
        ->sum('fullpayment');

        $statjam = Order::where('groupleader', "Jam")
        ->Where('cashier', $cashier)
        ->sum('fullpayment');

        $statearl = Order::where('groupleader', "Earl")
        ->Where('cashier', $cashier)
        ->sum('fullpayment');

        $overallstatorder= Order::where('cashier', $cashier )
        ->count();

        $overallstat= Order::where('cashier', $cashier)
        ->sum('fullpayment');

        return view('ordersuccesspage' , ['orders' => $orders, 'statgio' => $statgio, 'statjirald' => $statjirald, 'statjam' => $statjam, 'statearl' => $statearl, 'overallstat' => $overallstat, 'overallstatorder' => $overallstatorder ]);
          
    }


    
      /**
     * cashierstats
     *
     * @return void
     */
    public function cashierstats()
    {
      //params 

      $cashier = Auth::user()->name;


        $statgio= Order::where('groupleader', "Gio")
        ->Where('cashier', $cashier)
        ->sum('fullpayment');

        $statjirald = Order::where('groupleader', "Jirald")
        ->Where('cashier', $cashier)
        ->sum('fullpayment');

        $statjam = Order::where('groupleader', "Jam")
        ->Where('cashier', $cashier)
        ->sum('fullpayment');

        $statearl = Order::where('groupleader', "Earl")
        ->Where('cashier', $cashier)
        ->sum('fullpayment');


        $overallstat= Order::where('cashier', $cashier)
        ->sum('fullpayment');

        $overallstatorder= Order::where('cashier', $cashier )
        ->count();

       

        return view('cashierstats' , ['statgio' => $statgio, 'statjirald' => $statjirald, 'statjam' => $statjam, 'statearl' => $statearl, 'overallstat' => $overallstat, 'overallstatorder' => $overallstatorder ]);
          
    }

          /**
     * overallstats
     *
     * @return void
     */
    public function overallstats()
    {
      //params 

      $cashier = Auth::user()->name;

      $orders = Order::all();


        $statgio= Order::where('groupleader', "Gio")
     
        ->sum('fullpayment');

        $statjirald = Order::where('groupleader', "Jirald")
       
        ->sum('fullpayment');

        $statjam = Order::where('groupleader', "Jam")
       
        ->sum('fullpayment');

        $statearl = Order::where('groupleader', "Earl")
      
        ->sum('fullpayment');


        $overallstat= Order::sum('fullpayment');

        $overallstatorder= Order::count();

       

        return view('overallstat' , ['statgio' => $statgio, 'statjirald' => $statjirald, 'statjam' => $statjam, 'statearl' => $statearl, 'overallstat' => $overallstat, 'overallstatorder' => $overallstatorder, 'orders' => $orders ]);
          
    }

       /**
     *   orderqeue
     *
     * @return void
     */
    public function   orderqeue()
    {
          //get the class from class code
      $orderqeue = Order::where('status', 0)
      ->orderby('created_at', 'ASC')
      ->take(3)
      ->get();


       
  

        return view('orderqeue' , ['orderqeue' => $orderqeue]);
          
    }

        /**
     *   logoutcashier
     *
     * @return void
     */
    public function   logoutcashier()
    {


      Auth::logout();
      return redirect()->route('login');
          
    }



       /**
     *   orderqeue
     *
     * @return void
     */
    public function   orderdone($token)
    {


        $orderdone = Order::where('order_token', $token )
        ->update(['status' => 1]);

         
       
  

        return redirect()->back();
          
    }


        /**
     *   orderqeue
     *
     * @return void
     */
    public function   ordercancelled($token)
    {


        $orderdone = Order::where('order_token', $token )
        ->delete();

         
       
  

        return redirect()->back();
          
    }





  
    

    /**
     * ordergrilledcheese
     *
     * @return void
     */
    public function ordergrilledcheese(Request $request, $price )
    {
               // Validation 
               $this->validate($request, [
                'quantity' => 'required',
                'moneypaid' => 'required',
          ]);


           // params
           $cashier = Auth::user()->name;
      $product = "Grilled_cheese";
      $groupleader = "Jirald";
      $quantity = $request->input('quantity');
      $moneypaid = $request->input('moneypaid');

      //calculate 
      $fullpayment = $quantity*$price;

      $change = $moneypaid - $fullpayment;
      

       //order token
      $token = str_random(6);

      //saving the order 
      $order = new Order;
      $order->order_token = $groupleader."_".$token;
      $order->cashier = $cashier;
      $order->product = $product;
      $order->groupleader = $groupleader;
      $order->quantity = $quantity;
      $order->moneypaid = $moneypaid;
      $order->fullpayment = $fullpayment;
      $order->change = $change;

      $order_token = $groupleader."_".$token;

      
      
     

      $order->save();

      return redirect()->route('ordersuccess', ['token' => $order_token
      ]);

          
    }


       /**
     *orderfruitycrepe
     *
     * @return void
     */
    public function orderfruitycrepe(Request $request, $price )
    {
               // Validation 
               $this->validate($request, [
                'quantity' => 'required',
                'moneypaid' => 'required',
          ]);


           // params
           $cashier = Auth::user()->name;
      $product = "Fruity_crepe";
      $groupleader = "Gio";
      $quantity = $request->input('quantity');
      $moneypaid = $request->input('moneypaid');

      //calculate 
      $fullpayment = $quantity*$price;

      $change = $moneypaid - $fullpayment;
      

       //order token
      $token = str_random(6);

      //saving the order 
      $order = new Order;
      $order->order_token = $groupleader."_".$token;
      $order->cashier = $cashier;
      $order->product = $product;
      $order->groupleader = $groupleader;
      $order->quantity = $quantity;
      $order->moneypaid = $moneypaid;
      $order->fullpayment = $fullpayment;
      $order->change = $change;

      $order_token = $groupleader."_".$token;

      
      
     

      $order->save();

      return redirect()->route('ordersuccess', ['token' => $order_token
      ]);

          
    }


       /**
     *ordercheesysiomai
     *
     * @return void
     */
    public function ordercheesysiomai(Request $request, $price )
    {
               // Validation 
               $this->validate($request, [
                'quantity' => 'required',
                'moneypaid' => 'required',
          ]);


           // params
           $cashier = Auth::user()->name;
      $product = "Chessy_siomai";
      $groupleader = "Earl";
      $quantity = $request->input('quantity');
      $moneypaid = $request->input('moneypaid');

      //calculate 
      $fullpayment = $quantity*$price;

      $change = $moneypaid - $fullpayment;
      

       //order token
      $token = str_random(6);

      //saving the order 
      $order = new Order;
      $order->order_token = $groupleader."_".$token;
      $order->cashier = $cashier;
      $order->product = $product;
      $order->groupleader = $groupleader;
      $order->quantity = $quantity;
      $order->moneypaid = $moneypaid;
      $order->fullpayment = $fullpayment;
      $order->change = $change;

      $order_token = $groupleader."_".$token;

      
      
     

      $order->save();

      return redirect()->route('ordersuccess', ['token' => $order_token
      ]);

          
    }

          /**
     *ordershake
     *
     * @return void
     */
    public function ordershake(Request $request )
    {
               // Validation 
               $this->validate($request, [
                'quantity' => 'required',
                'moneypaid' => 'required',
                'size' => 'required',
          ]);


           // params
           $cashier = Auth::user()->name;
      $product = "Shake";
      $groupleader = "Jam";
      $quantity = $request->input('quantity');
      $moneypaid = $request->input('moneypaid');
      $size = $request->input('size');

      //calculate 
      $fullpayment = $quantity*$size;

      $change = $moneypaid - $fullpayment;
      

       //order token
      $token = str_random(6);

      //saving the order 
      $order = new Order;
      $order->order_token = $groupleader."_".$token;
      $order->cashier = $cashier;
      $order->product = $product;
      $order->groupleader = $groupleader;
      $order->quantity = $quantity;
      $order->moneypaid = $moneypaid;
      $order->fullpayment = $fullpayment;
      $order->change = $change;

      $order_token = $groupleader."_".$token;

      
      
     

      $order->save();

      return redirect()->route('ordersuccess', ['token' => $order_token
      ]);

          
    }


              /**
     *   orderfried_oreos
     *
     * @return void
     */
    public function    orderfried_oreos(Request $request, $price )
    {
               // Validation 
               $this->validate($request, [
                'quantity' => 'required',
                'moneypaid' => 'required',
            
          ]);


           // params
           $cashier = Auth::user()->name;
      $product = "Fried_oreo";
      $groupleader = "Gio";
      $quantity = $request->input('quantity');
      $moneypaid = $request->input('moneypaid');
      $size = $request->input('size');

      //calculate 
      $fullpayment = $price*$quantity;

      $change = $moneypaid - $fullpayment;
      

       //order token
      $token = str_random(6);

      //saving the order 
      $order = new Order;
      $order->order_token = $groupleader."_".$token;
      $order->cashier = $cashier;
      $order->product = $product;
      $order->groupleader = $groupleader;
      $order->quantity = $quantity;
      $order->moneypaid = $moneypaid;
      $order->fullpayment = $fullpayment;
      $order->change = $change;

      $order_token = $groupleader."_".$token;

      
      
     

      $order->save();

      return redirect()->route('ordersuccess', ['token' => $order_token
      ]);

          
    }



 
    
}
