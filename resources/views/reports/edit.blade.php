@extends('layouts.app')
@section('content')

<h3>Edit Report Form</h3>
<form action="/reports/{{$report->id}}" method="POST" class="form-group">
    <!...... Cross-site request forgery>
    @csrf 
    @method('PUT')
    Title: <input type="text" name="title" value="{{$report->title}}" class="form-control"><br>
    Description: <textarea name="description" class="form-control">{{$report->description}}</textarea><br>
    Priority: <select name="priority" class="form-control">
        <option value="{{$report->priority}}">{{$report->priority}}</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select><br>
    <input type="submit"value ="Update" class="btn btn-success" onclick="return confirm('Are you sure?')">
    <input type="reset"value ="Cancel" class="btn btn-danger"><br>
</form>
@endsection