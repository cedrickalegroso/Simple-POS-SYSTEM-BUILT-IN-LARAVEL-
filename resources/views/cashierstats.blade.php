@extends('layouts.app')


@section('content')

<div class="container text-center">
   <p class="text-success"> Today Stats </p>
        

   <div class="card text-left p-2 border-primary shadow">
        <h3 class="text-success text-center"> Today Overall Earnings : {{$overallstat}}PHP </h3>
        <p class="text-success text-center"> Today Order count : {{$overallstatorder}} orders </p>
        <p> Per group todays Earnings  </p>
        <hr> 
            <p> Gio: {{$statgio}}  </p>
            <p> Jirald: {{$statjirald}}</p>
            <p> Jam: {{$statjam}}</p>
            <p> Earl: {{$statearl}}</p>
   </div>
</div>



@endsection
