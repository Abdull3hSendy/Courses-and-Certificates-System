@extends('layouts.app')

@section('content')
<div class="container" style="direction: rtl; text-align: right;">
    <form action="{{ route('students.store') }}" method="POST" style="direction: rtl; text-align: right;">
        @csrf
        <div class="form-group">
            <label for="name">اسم الطالب:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="course">الدورة:</label>
            <input type="text" class="form-control" id="course" name="course" required>
        </div>
        <div class="form-group">
            <label for="completion_date">تاريخ الانتهاء:</label>
            <input type="date" class="form-control" id="completion_date" name="completion_date" required>
        </div>
        <button type="submit" class="btn btn-primary">إصدار الشهادة</button>
    </form>
</div>
@endsection
