@extends('layout.app')

@section('title-block')
  Contact
@endsection
@section('content')
  <h1>Contact</h1>
  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach(@$errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>

  </div>
  @endif
  <form action="{{ route('contact-form') }}" method="post">
    @csrf

    <div class="form-group">
      <label for="name"></label>
      <input type="text" name="name" value="Set name" id="name" class="form-control">
    </div>
    <div class="form-group">
      <label for="email"></label>
      <input type="text" name="email" value="Set email" id="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="subject"></label>
      <input type="text" name="theme" value="Set subject" id="subject" class="form-control">
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea name="message" id="message" class="form-control" placeholder="Set message"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
@endsection
