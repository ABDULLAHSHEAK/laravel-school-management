@extends('Fontend.layouts.master')
@section('content')

<br>


<div class="container">
 <div class="row">
  <div class="col-lg-12 col-12">
   <div class="otherPage">
    <div class="title text-center bg-primary">
     <h2 style="padding: 10px">পরিচালনা কমিটি </h2>
    </div>
    <div class="dataTable table-responsive" style="overflow-x:auto;">
     <table class="table table-bordered table-striped table-primary ">
      <thead class="bg-primary">
       <tr>
        <td>S/L</td>
        <td>ছবি</td>
        <td>নাম </td>
        <td>পদবী </td>
        <td>মোবাইল</td>
        <td>Action</td>
       </tr>
      </thead>
      <tbody>
        @foreach ($directors as $director)


       <tr>
        <td>1</td>
        <td><img src="{{asset('image/director')}}/{{$director->img}}" alt="directors image" width="50" style="border-radius: 10px;"></td>
        <td>{{$director->name}}</td>
        <td>{{$director->title}} </td>
        <td>{{$director->number}}</td>
        <td>
         <button class="btn btn-primary">View</button>
        </td>
       </tr>
@endforeach
      </tbody>
     </table>
     {{$directors->links('pagination::bootstrap-5')}}
    </div>
   </div>
  </div>
 </div>
</div>
@endsection
