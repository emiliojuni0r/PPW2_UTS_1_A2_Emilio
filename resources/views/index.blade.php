@extends('layout.master')

@section('title','List MU Player')

@section('container')
    <h1>List of MU PLayers</h1>
    <table class="table">
            <th>
                <td>No</td>
                <td>Name</td>
                <td>Jersey Number</td>
                <td>Position</td>
            </th>
        @foreach ($data_players as $index => $player)
            <tr>
                <td></td>
                <td>{{ $index + 1 }}</td>
                <td>{{ $player->nama_pemain }}</td>
                <td>{{ $player->no_punggung }}</td>
                <td>{{ $player->posisi }}</td>
            </tr>
            @endforeach
    </table>

    @include('text')
@endsection