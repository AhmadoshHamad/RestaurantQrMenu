<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @include('layouts.links')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">


    {{-- google charts --}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Menu', 'Plan Users'],
          ['Pdf',     20],
          ['premium',      120],
          ['Supreme',  30],
          
        ]);

        var options = {
          title: 'Menu  Users',
          chartArea:{left: 100,top:50,width:'85%',height:'85%'},
          fontSize: 15,
          titleTextStyle: { fontSize: 20,bold: true }
    
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

    //   bar chart
    google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('date', 'No. of Users');
      data.addColumn('number', 'Motivation Level');

      data.addRows([
    [new Date(2023, 0,1), 80],
    [new Date(2023, 1,1), 60],
    [new Date(2023, 2,1), 70],
    [new Date(2023, 3,1), 80],
    [new Date(2023, 4,1), 90],
    [new Date(2023, 5,1), 170],
    [new Date(2023, 6,1), 120],
    [new Date(2023, 7,1), 100],
    [new Date(2023, 8,1), 90],
    [new Date(2023,9), 70],
    [new Date(2023,10), 70],
    [new Date(2023,11), 70],
    [new Date(2023,12), 70],
  ]);

      var options = {
        title: 'Motivation Level Throughout the Day',
        fontSize: 15 ,
        fontName: 'Roboto',
        hAxis: {
          title: 'Time of Day',
          format:'MMM  yyyy',
        //   viewWindow: {
        //     min: [7, 30, 0],
        //     max: [17, 30, 0]
        //   }
        },
        vAxis: {
          title: 'Motivation Level'
        },
        legend : 'none'
      };

      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_div'));

      chart.draw(data, options);
    }
  </script>

</head>
<body>
    {{-- @include('layouts.navbar') --}}
    <div style="position: absolute; top: 85px; left:250px; width: 80%" class="container-fluid d-flex flex-column  m-3 ">

        <div class="container-fluid ">
            <div class="row">
                <div class="col">
                    <div class="myCard bg-primary d-flex align-items-center justify-content-between rounded p-1 px-4" >
                        <div class="icons bg-primary-subtle rounded p-2  ">
                            <span class="material-symbols-outlined">person</span>
                        </div>
                        <div class="dashspans d-flex flex-column ms-3" >
                            {{-- <h1 >{{$nUsers}}</h1> --}}
                            <span >Total Active users</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="myCard bg-warning d-flex align-items-center justify-content-between rounded p-1 px-4" >
                        <div class="icons bg-warning-subtle rounded p-2 ">
                            <span class="material-symbols-outlined">person_off</span>
                        </div>
                        <div class="dashspans d-flex flex-column ms-3" >
                            <h1 >142</h1>
                            <span>Total DeActive users</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="myCard bg-info d-flex align-items-center justify-content-between rounded p-1 px-4" >
                        <div class="icons bg-info-subtle rounded p-2 ">
                            <span  class="material-symbols-outlined">  menu_book    </span>
                        </div>
                        <div class="dashspans d-flex flex-column ms-3" >
                            <h1 >121</h1>
                            <span>Total Active Vmenus</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="myCard bg-success d-flex align-items-center justify-content-between  p-1 px-4" >
                        <div class="icons bg-success-subtle rounded p-2 ">
                            <span  class="material-symbols-outlined">menu_book</span>
                        </div>
                        <div  class="dashspans d-flex flex-column ms-3" >
                            <h1>121</h1>
                            <span>Total DeActive Vmenus</span>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row mt-5">
                {{-- <canvas id="dashboardIncomeChart" class="mh-350px pt-0" width="1306" height="640" style="display: block; box-sizing: border-box; height: 320px; width: 653px;"></canvas> --}}
                <div class="col">
                    <div class="bg-white rounded p-2  ">
                        <div id="piechart"  style=" height: 400px; "></div>
                    </div>

                </div>
                <div class="col">
                    <div class="bg-white rounded p-2">
                        <div id="chart_div"  style="height: 400px;"></div>

                    </div>
                </div>
            </div>
        </div>

        <table class="mytable mt-4 " >
            <thead>
                
                <th style="text-align: start">Full Name </th>
                <th>Email</th>
                <th>Current Plan</th>
                <th>Registerd on</th>
            </thead>
            {{-- @foreach($recent as $user) --}}
            {{-- <img src="{{$menu->image ? asset('storage/'.$menu->image) : asset('/images/menu.png')}}"> --}}
            <tr>
                {{-- must be ffirst and last name --}}
                <td class="d-flex ms-3" style="text-align: start; column-gap: 15px;">
                    <strong >
                        {{-- {{ $user->name }}  --}}
                    </strong>       
                </td> 
                <td>{{-- {{$user->email}} --}}</td>
                <td> {{-- Cureent Plan --}}</td>
                <td>  {{-- Registered on --}} </td>
            </tr>
            {{-- @endforeach --}}
        </table>



    </div>
    

   @include('layouts.scriptTags')
</body>
<style>
    .myCard{
        height: 165px;
        border-radius: 10px;
    }

    .dashspans span{
        color: white;
        font-size: 15px;
        font-family: 'Montserrat', sans-serif;
        text-align: center;
    }
    

    .icons span{
        color: white;
        font-size: 75px;
    }

    h1 {
        font-family: 'Anton', sans-serif;
        letter-spacing: 2px;
        color: white;
        text-align: center;
    }
</style>
</html>