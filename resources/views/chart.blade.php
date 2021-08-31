@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ja">

   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <title>Laravel</title>
   </head>

   <body>
     <div class="card text-center">
       <div class="card-header">
         <ul class="nav nav-tabs card-header-tabs">
           <li class="nav-item">
             <a class="nav-link active" aria-current="true" href="{{ url('Gamification') }}">アカウント情報</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ url('/chart')}}">グラフ</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ url('/ranking')}}">ランキング</a>
           </li>
         </ul>
       </div>
     </div>

       <div class="content">
           <canvas id="allChart"></canvas>
       </div>

       <script src="{{ mix('js/show_chart.js') }}"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
       <script>
           id = 'allChart';
           labels = @json($keys);
           data = @json($counts);

           make_chart(id,labels,data);
       </script>
       <a href="{{ url('home') }}" class="col-4 mt-3 btn btn-primary">戻る</a>
   </body>

</html>

@endsection
