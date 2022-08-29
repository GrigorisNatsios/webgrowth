<!DOCTYPE html>
@extends('layouts.layout')

@section('content')

<form action="" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">First Name</label>
    <input type="text" class="form-control" name="firstname"  id="name" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">last Name</label>
    <input type="text" class="form-control" name="lastname"  id="name" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Afm</label>
    <input type="text" class="form-control" name="afm"  id="name" placeholder="Afm">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Phone</label>
    <input type="text" class="form-control" name="phone"  id="name" placeholder="Phone">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <button class="btn btn-primary">ADD CUSTOMER</button>
</form>



@endsection