<!-- resources/views/students/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container"  style="direction: rtl; text-align: right;">
    <h1>تعديل الطالب</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">اسم الطالب:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
        </div>
        <div class="form-group">
            <label for="course">الدورة:</label>
            <input type="text" class="form-control" id="course" name="course" value="{{ $student->course }}" required>
        </div>
        <div class="form-group">
            <label for="completion_date">تاريخ الانتهاء:</label>
            <input type="date" class="form-control" id="completion_date" name="completion_date" value="{{ $student->completion_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">تحديث</button>
    </form>
</div>
@endsection
