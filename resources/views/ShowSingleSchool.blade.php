@extends('layouts.master')
@section('content')

<section class="container">
    <div style="background-color: darkcyan"></div>
<section class="container">
        <h1> Name :{{$school->name}}</h1>
        <table>
            <tr><td> Address :  {{$school->address}} </td></tr>
            <tr><td> Phone: {{$school->number}} </td></tr>
            <tr><td> Fax_number :  {{$school->fax_number}}</td></tr>
            <tr><td> Email: {{$school->email}}</td></tr>
            <tr>
                <td>Times Of Work :  {{$school->check_in_day}} - {{$school->check_out_day}}({{$school->check_in_time}} am - {{$school->check_out_time}} pm)   </td>

            </tr>
        </table>
</section>
    <section class="container">
        <div  style="background-color: darkcyan; height: 5%"><font color="white">Images </font></div>
    </section>
    @if(count($images)==0)
        No images
    @else
        @foreach($images as $image)
            <table class="container">
                <tr>
                    <td><img style="" width="100" height="100" src= {{$image->image1}}></td>
                    <td><img style="" width="100" height="100" src= {{$image->image2}}></td>
                    <td><img style="" width="100" height="100" src= {{$image->image3}}></td>
                    <td><img style="" width="100" height="100" src= {{$image->image4}}></td>
                    <td><img style="" width="100" height="100" src= {{$image->image5}}></td>
                </tr>
            </table>
        @endforeach
    @endif
    <section class="container">
        <div  style="background-color: darkcyan; height: 5%"><font color="white">Vision & Massage </font></div>
    </section>
    <div class="container">
        {{$school->vision_and_massage}}
    </div>
    <section class="container" style="border:">
        <div  style="background-color: darkcyan; height: 5%"><font color="white">Teacher </font></div>
    </section>

    <section class="container" style="border: darkcyan">
        @if(count($teachers)==0)
            No Teacher
        @else
            <div>
                @foreach($teachers as $teacher)
                    <table class="table">

                        <tr>
                            <td><img style="" width="100" height="100" src= {{$teacher->image}}></td>
                        </tr>
                        <tr>
                            <td> {{$teacher->name}}</td>
                        </tr>
                        <tr>
                            <td>{{$teacher->speciality}}</td>
                        </tr>

                    </table>
                @endforeach


            </div>
        @endif
    </section>

    <section class="container">
        <div  style="background-color: darkcyan; height: 5%"><font color="white">Reviews </font></div>
    </section>
    <section class="container">

        @if(count($reviews)==0)
            No images
        @else
            @foreach($reviews as $review)
                <table class="table">
                        <tr><td>{{$review->user_name}}</td></tr>
                        <tr><td><img style="" width="100" height="100" src={{$review->user_image}}></td></tr>
                        <tr><td>{{$review->user_number}}</td></tr>
                        <tr><td>{{$review->user_review_massage}}</td></tr>
                </table>
            @endforeach
        @endif
    </section>
@endsection
</section>