<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use TCPDF;
use Carbon\Carbon;

class StudentController extends Controller
{

    public function create()//لإنشاء سجل جديد لطالب
    {
        return view('students.create');
    }

    public function store(Request $request)//تعالج البيانات المدخلة، تتحقق من صحتها، وتخزنها في قاعدة البيانات
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'completion_date' => 'required|date',
        ]);

        // Create a new student record
        $student = Student::create($request->all());

        // Redirect to the certificate route
        return redirect()->route('students.certificate', $student->id);
    }



    public function list() //عرض جميع بيانات الطلاب المخزنة في قاعدة البيانات
    {
        $students = Student::all();
        return view('students.list', compact('students'));
    }


    // عرض تفاصيل الطالب
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    // عرض نموذج تعديل الطالب
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // تحديث بيانات الطالب
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'completion_date' => 'required|date',
        ]);

        $student->update($request->all());
        return redirect()->route('students.list')->with('success', 'Student updated successfully.');
    }

    // حذف الطالب
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.list')->with('success', 'Student deleted successfully.');
    }
    


    // تصدير شهادة الطالب

    public function exportCertificate($id)
    {
        $student = Student::findOrFail($id);

        // Initialize TCPDF
        $pdf = new TCPDF();

        // Set font
        $pdf->SetFont('freeserif', '', 12);

        // Write content
        $html = view('certificate', ['student' => $student])->render();


        $pdf->SetTitle('إتمام الشهادة');

        // Add a page
        $pdf->AddPage('L');
        $pdf->SetMargins(0, 0, 0); 
        $pdf->SetAutoPageBreak(false);
        $pdf->writeHTML($html, false, false, false, false, '');

        // Close and output PDF
        $pdf->Output('certificate.pdf', 'I');
    }
}
