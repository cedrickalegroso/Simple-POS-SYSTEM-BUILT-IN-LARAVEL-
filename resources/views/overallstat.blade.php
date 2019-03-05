@extends('layouts.app')


@section('content')

<div class="container text-center">
   <p class="text-success"> Overall Stats </p>
        

   <div class="card text-left p-2 border-primary shadow">
        <h3 class="text-success text-center"> Overall Earnings : {{$overallstat}}PHP </h3>
        <p> Per group overall Earnings  </p>
        <hr> 
            <p> Gio: {{$statgio}}  </p>
            <p> Jirald: {{$statjirald}}</p>
            <p> Jam: {{$statjam}}</p>
            <p> Earl: {{$statearl}}</p>
   </div>
</div>



@endsection
