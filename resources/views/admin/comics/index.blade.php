@extends('layouts.dashboard')

@section('content')

<h1>All posts for admin</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>COVER</th>
                <th>TITLE</th>
                <th>PRICE</th>
                <th>AVAILABILITY</th>
                <th>DESCRIPTION</th>
                <th>ARTIST</th>
                <th>WRITER</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">a</td>
                <td>a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>e</td>
                <td>f</td>
                <td>a</td>
            </tr>
        </tbody>
                <thead>
            <tr>
                <th>SERIES</th>
                <th>DATE</th>
                <th>VOLUME</th>
                <th>SIZE</th>
                <th>PAGES</th>
                <th>RATED</th>
                <th>CREATED AT</th>
                <th>AZIONI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">a</td>
                <td>b</td>
                <td>c</td>
                <td>d</td>
                <td>e</td>
                <td>f</td>
                <td>a</td>
                <td>
                    <a href="" class="btn btn-primary">Leggi</a>
                    <a href="" class="btn btn-warning">Modifica</a>
                    <a href="" class="btn btn-danger">Elimina</a>
                </td>
            </tr>
        </tbody>
    </table>
    
@endsection

