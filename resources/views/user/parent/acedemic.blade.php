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
{{-- {{dd($res->toArray())}} --}}
    
<section class="section-table cid-rTcdVPEsHR" id="table1-1t">
  
    <div class="container container-table">
        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
            fds
        </h2>
@if (isset($res) && !empty($res->toArray()))
        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
            Results 
        </h2>
        {{-- <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            please enter result only once per subjcet.     
        </h3> --}}
        <div class="table-wrapper">
  
          <div class="container scroll">
            <table class="table isSearch" cellspacing="0">
                <thead>
                    <tr class="table-heads ">
                        <th class="head-item mbr-fonts-style display-7">Subject id</th>
                        <th class="head-item mbr-fonts-style display-7">Subject name</th>
                        <th class="head-item mbr-fonts-style display-7">Marks</th>
                </thead>

                <tbody>
                    @foreach ($res as $rs)
                    <tr>
                        <td class="body-item mbr-fonts-style display-7">{{$rs->subject_id}}</td>
                        <td class="body-item mbr-fonts-style display-7">{{$rs->name}}</td>
                        <td class="body-item mbr-fonts-style display-7">{{$rs->marks}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
        @else
        <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
            No data Avaible
        </h2>
        @endif
      </div>
    
  </section>

    
@endsection