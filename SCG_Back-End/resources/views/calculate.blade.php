@extends('Layout.layout')

@section('menu')
<div class="sidebar-wrapper">  
 <ul class="nav"> 
   <li class="nav-item  active">
     <a class="nav-link" href="/calculate">
       <i class="material-icons">library_books</i>
       <p>Calculate</p>
     </a>
   </li>
   <li class="nav-item ">
    <a class="nav-link" href="/map">
      <i class="material-icons">location_ons</i>
      <p>Maps</p>
    </a>
  </li>
   <li class="nav-item ">
     <a class="nav-link" href="/api">
       <i class="material-icons">bubble_chart</i>
       <p>API</p>
     </a>
   </li>
 </ul>
</div>
@endsection
@section('nav')
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
 <div class="container-fluid">
   <div class="navbar-wrapper">
     <a class="navbar-brand" href="javascript:;">Calculate</a>
   </div>

 </div>
</nav>
@endsection
@section('content')
 <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">Find X,Y,Z </h4>
        <p class="card-category"></p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
               <p>If Input = X, Y, 5, 9, 15, 23, Z  </p>
              </th>
             
            </thead>
            <tbody>
              <tr>
                <td>
                 <p>Then X = {{ $xyz["x"] }} , Y = {{ $xyz["y"] }} , Z = {{ $xyz["z"] }}  </p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
   <div class="card">
     <div class="card-header card-header-primary">
       <h4 class="card-title ">Find C</h4>
       <p class="card-category"> </p>
     </div>
     <div class="card-body">
       <div class="table-responsive">
         <table class="table">
           <thead class=" text-primary">
             <th>
              <p>If A = 21, A + B = 23, A + C = -21</p>
             </th>
           </thead>
           <tbody>
            <tr>
              <td>
               <p>Then C = {{  $c }}</p>
              </td>
            </tr>
          </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
</div>
@endsection