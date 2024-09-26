@extends('layouts.app')
@section('content')

<h3>New Report Forms</h3>
<form action="/reports" method="POST" class="form-group">
    <!...... Cross-site request forgery>
    @csrf
    @method('PUT')
    Title: <input type="text" placeholder="Please insert report title" name="title" class="form-control">
    @if($errors->has('title'))
        <span>Title required</span>
    @endif <br>
    Description: <textarea name="description" class="form-control"></textarea>
    @if($errors->has('description'))
        <span>{{$errors->first('description')}}</span>
    @endif <br>
    Priority: <select name="priority" class="form-control">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select><br>
    <input type="submit"value ="Submit" class="btn btn-primary">
    <input type="reset"value ="Cancel" class="btn btn-danger"><br>
</form>
@endsection