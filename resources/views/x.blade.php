
@extends('layout')

@section('title','Get Started')

@section('content')
  <div class="relative p-4">
          <nav>
            <a href="/">
                Home
            </a>
            <a href="/x">
                About
            </a>
            <a href="/y">
                Contact
            </a>
          </nav>
       </div>
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Get Started
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf

       
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="form-control" autofocus required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Sex</label>
          <select name="description" class="form-control">
                <option>Male</option>
                <option>Female</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary form-control">GO</button>
      </form>
    </div>
  </div>
  @endsection
