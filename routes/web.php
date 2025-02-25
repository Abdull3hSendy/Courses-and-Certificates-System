<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// عرض نموذج إنشاء طالب جديد
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// حفظ الطالب الجديد
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// عرض قائمة الطلاب
Route::get('/students', [StudentController::class, 'list'])->name('students.list');

// عرض تفاصيل الطالب
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');

// عرض نموذج تعديل الطالب
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');

// تحديث بيانات الطالب
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');

// حذف الطالب
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

// تصدير شهادة الطالب
Route::get('/students/{student}/certificate', [StudentController::class, 'exportCertificate'])->name('students.certificate');

