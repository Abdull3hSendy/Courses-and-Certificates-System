<!-- resources/views/students/list.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container" style="text-align: right;">
    <h1>قائمة الطلاب</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary">إضافة طالب جديد</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>اسم الطالب</th>
                <th>الدورة</th>
                <th>تاريخ الانتهاء</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->completion_date }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">عرض</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">تعديل</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">حذف</button>
                        </form>
                        <a href="{{ route('students.certificate', $student->id) }}" class="btn btn-secondary">تصدير شهادة</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
