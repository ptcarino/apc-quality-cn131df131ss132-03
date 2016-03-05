@extends('admin_template')

@section('content')
 <div class="table-responsive">
  <table class="table">
   <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
    <th>Email</th>
    <th>Role</th>
    <th>Created At</th>
   </tr>
   @foreach($accounts as $accounts)
    <tr>
     <td>{{ $accounts->id }}</td>
     <td>{{ $accounts->username }}</td>
     <td>{{ $accounts->password }}</td>
     <td>{{ $accounts->email }}</td>
     <td>{{ $accounts->role}}</td>
     <td>{{ $accounts->created_at}}</td>
     <td><a href="/accounts/{{ $accounts->id}}/edit" {{ $accounts->username}}>Edit/Delete</a></td>
    </tr>
   @endforeach
  </table>
 </div>
@stop