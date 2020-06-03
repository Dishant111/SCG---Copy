@extends('layouts.app')
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/google-palette/1.1.0/palette.min.js"></script>
@show
@section('css')
    
@endsection
@section('content')

<section class="counters4 counters cid-rSh6KzzwGA" id="counters4-r">
    <div class="container pt-4 mt-2">
        <div class="mx-auto" style="max-height: 80vh; max-width: 80vh;">
            <canvas id="personalityChart" width="200" height="200"></canvas>
        </div>
        <h3 class="mbr-section-title pb-3 align-center mbr-fonts-style "><strong> Careerfield suggesation</strong></h3>

        <div class="alert alert-warning" role="alert">
          <b>Note:</b> Careerfield is depends on your personal intrest. our system tried to it find out using your acedemics score and test(i.e. personality and skill test) to pridict sucesss.
          <br> <strong> Best wishes for your future.</strong> 
        </div>

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
@endsection 