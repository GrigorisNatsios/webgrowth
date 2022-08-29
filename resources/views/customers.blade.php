<!DOCTYPE html>
@extends('layouts.layout')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Afm</th>
      <th scope="col">Phone</th>
      <th scope="col">created_at</th>
      <th scope="col">updated_at</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($customers as $customer) 
        <tr>
            <td>{{$customer -> id}}</td>
            <td>{{$customer -> first_name}}</td>
            <td>{{$customer -> last_name}}</td>
            <td>{{$customer -> email}}</td>
            <td>{{$customer -> afm}}</td>
            <td>{{$customer -> phone}}</td>
            <td>{{$customer -> created_at}}</td>
            <td>{{$customer -> updated_at}}</td>
        </tr>
    @endforeach
  </tbody>
</table>

@endsection