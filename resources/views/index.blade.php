@extends('layouts.master')
@section('content')

<section class="top-nav">
    @if(count($schools)==0)
        No Schools
    @else
        @foreach($schools as $school)
          <tr><ul>
                  <li><a href="{{route('SchoolInfo',['school'=>$school->id])}}">{{ $school->name }}</a></li>
              </ul>
          </tr>

@endforeach
@endif


</section>
@endsection