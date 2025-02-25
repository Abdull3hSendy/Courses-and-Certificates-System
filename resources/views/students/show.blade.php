<!-- resources/views/students/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container" style="direction: rtl; text-align: right;">
    <h1>تفاصيل الطالب</h1>
    <div>
        <strong>اسم الطالب:</strong>
        <p>{{ $student->name }}</p>
    </div>
    <div>
        <strong>الدورة:</strong>
        <p>{{ $student->course }}</p>
    </div>
    <div>
        <strong>تاريخ الانتهاء:</strong>
        <p>{{ $student->completion_date }}</p>
    </div>
    <a href="{{ route('students.list') }}" class="btn btn-primary">العودة إلى القائمة</a>
</div>
@endsection
