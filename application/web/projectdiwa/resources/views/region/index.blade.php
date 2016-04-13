@extends('admin_template')

@section('content')
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>City</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>

            <tr>
                <td><a href="#">Makati</a></td>
                <td>2013-04-12 10:32:51</td>
                <td>
                    <a href="#">Approve</a> | <a href="#">Deny</a> | <a href="#">Ignore</a>
                </td>
            </tr>

            <tr>
                <td><a href="#">Manila</a></td>
                <td>2013-04-12 10:33:12</td>
                <td>
                    <a href="#">Approve</a> | <a href="#">Deny</a> | <a href="#">Ignore</a>
                </td>
            </tr>

            <tr>
                <td><a href="#">Caloocan</a></td>
                <td>2013-04-12 11:21:46</td>
                <td>
                    <a href="#">Approve</a> | <a href="#">Deny</a> | <a href="#">Ignore</a>
                </td>
            </tr>
        </table>
    </div>
@stop