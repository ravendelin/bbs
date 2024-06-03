@extends('layouts.app')

@section('title', 'Main')

@section('content')
    @if (count($bbs) > 0)
        <table class="table table-striped table-borderless">
            <thead>
            <tr>
                <th>Item</th>
                <th>price, USD.</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bbs as $bb)
                <tr>
                    <td><h4>{{ $bb->title }}</h4></td>
                    <td>{{ $bb->price }}</td>
                    <td>

                        <a href="{{ route('detail', ['bb' =>$bb->id]) }}">more...</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection('content')

