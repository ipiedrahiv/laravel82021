@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table id="studtable">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                </tr>
                <tr>
                    <td>101</td>
                    <td>Alex</td>
                    <td>15</td>
                    <td>Maldives</td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>Chris</td>
                    <td>14</td>
                    <td>Canada</td>
                </tr>
                
                <tr>
                    <td>103</td>
                    <td>Jay</td>
                    <td>15</td>
                    <td>Toronto</td>
                </tr>
        
            </table>
            <button type="button" class="excel" onclick="tableToExcel('studtable', 'Students')">Print</button>
        </div>
    </div>
</div>
@endsection