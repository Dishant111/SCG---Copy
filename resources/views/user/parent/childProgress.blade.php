@extends('layouts.app')
{{-- {{dd($childrens)}} --}}
@section('parentheader')
{{-- {{dd($childrens)}} --}}
{{view('user.parent.headerFooter.header')->with('childrens',$childrens)}}
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/google-palette/1.1.0/palette.min.js"></script>
@show
@section('css')
    
@endsection
@section('content')

@php
$Displaycareer = false;

if (isset($finalResult)) {
    function testCareer($finalResult){
        foreach ($finalResult as $result) {
            if(isset($result->success_rate)){
                return true;
            }
        }
        return false;
    }
    $Displaycareer = testCareer($finalResult);
}

@endphp
<section class="counters4 counters cid-rSh6KzzwGA" id="counters4-r">
    <div class="container pt-4 mt-2">
        @if (  (isset($personalityData) && empty($personalityData) ) && !$Displaycareer )
        <div class="alert alert-warning" role="alert">
              <strong> Children tests are remaining.</strong> 
        </div>
        @endif
        {{-- {{dd(empty($personalityData))}} --}}
        @if (isset($personalityData) && !empty($personalityData))
            <div class="mx-auto" style="max-height: 80vh; max-width: 80vh;">
                <canvas id="personalityChart" width="200" height="200"></canvas>
            </div>
        @endif
        @if ($Displaycareer)
        <h3 class="mbr-section-title pb-3 align-center mbr-fonts-style "><strong> Careerfield suggesation</strong></h3>
        
        <div class="mx-auto" style="max-height: 80vh; max-width: 80vh;">
            <canvas id="result" width="200" height="200"></canvas>
        </div>
        
            <div class="alert alert-warning" role="alert">
                <b>Note:</b> Careerfield is depends on your personal intrest. our system tried to it find out using your acedemics score and test(i.e. personality and skill test) to pridict sucesss.
                <br> <strong> Best wishes for your future.</strong> 
            </div>
      

        @endif
        <div class="mbr-section-btn align-left"><a href="{{route('childAcedemic',['child'=>$id])}}" class="btn btn-warning-outline display-7">
            Acedemic results</a></div>
    </div>

</section>

@if (isset($personalityData))
    <Script>
    
    var ctx = document.getElementById('personalityChart');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [
                @foreach ($personalityData as $pd)
                    ' {{$pd['name']}} ',
                @endforeach 
                ],
            datasets: [{
                label: '# of count',
                data: [
                    @foreach ($personalityData as $pd)
                    ' {{$pd['max_count']}} ',
                    @endforeach
                    ],
            backgroundColor:  palette('mpn65', 9).map(function(hex) {
                                    return '#' + hex;
                                    })  
            }]
        },
        options: {
            legend: {
                onClick : function doNothing(){
                    
                },
                position : 'right',
                fullWidth: true,
                labels: {
                    // This more specific font property overrides the global property
                    fontColor: 'black',
                    fontSize: 15,
                 
                }
            },
            title: {
            display: true,
            text: 'Personality Graph',
            fontSize: 18
            }

        }
    });

  
    </Script>
@endif
@if ($Displaycareer)
<script>
var ctx1 = document.getElementById('result');
var myBarChart1 = new Chart(ctx1, {
type: 'bar',
data: {
    labels: [

        @foreach ($finalResult as $result)
            @if (isset($result->success_rate))
                ' {{$result->careerFields->field_name}} ',
            @endif
        @endforeach
       
    ],
    datasets: [{
        label: 'sucess ratio',
        maxBarThickness: 40,
        data: [
        @foreach ($finalResult as $result)
            @if (isset($result->success_rate))
                 {{$result->success_rate}} ,
            @endif
        @endforeach
            
        ],
        backgroundColor: palette('mpn65', {{count($finalResult)}}).map(function(hex) {
                                    return '#' + hex;}) 
    
        
    }]
},
options: {
    legend: {
                onClick : function doNothing(){
                    
                },
    },
    scales: {
        yAxes: [{
            ticks: {
                min: 0,
                max: 100,
                beginAtZero: false
            }
        }]
    }
}
});
</script>
@endif
@endsection 