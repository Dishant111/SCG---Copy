@extends('layouts.admin')
@section('content')

<section class="counters4 counters cid-rSh6KzzwGA" id="counters4-r">
    <div class="container pt-4 mt-2">
        <form action="{{route('addPersonality')}}" method="post">
            @csrf
            {{-- <input type="hidden" name="type" value="1"><br> --}}
            <label for="type">Test type : </label>
            <select name="type" id="type">
                <option value="1">Personality</option>
                <option value="2">Skill</option>
            </select>
            <br>
            <label for="QText">Question Text : </label>
            <input type="text" name="QText" id="QText">
            <br>
            <label for="Qoption1">Question Option1 : </label>
            <input type="text" name="Qoption1" id="Qoption1">
            <select name="type1" id="personality">
                <option value="">Select Personality</option>
                <option value="1">Reformer</option>
                <option value="2">Helper</option>
                <option value="3">Achiever</option>
                <option value="4">Individualist</option>
                <option value="5">Investigator</option>
                <option value="6">Loyalist</option>
                <option value="7">Enthusiast</option>
                <option value="8">challenger</option>
                <option value="9">Peace Maker</option>
            </select>
            <br>
            <label for="Qoption2">Question Option2 : </label>
            <input type="text" name="Qoption2" id="Qoption2">
            <select name="type2" id="personality">
                <option value="">Select Personality</option>
                <option value="1">Reformer</option>
                <option value="2">Helper</option>
                <option value="3">Achiever</option>
                <option value="4">Individualist</option>
                <option value="5">Investigator</option>
                <option value="6">Loyalist</option>
                <option value="7">Enthusiast</option>
                <option value="8">challenger</option>
                <option value="9">Peace Maker</option>
            </select><br>
            <br>
            <input type="submit" value="add">
        </form>
    </div>
</section>
@endsection