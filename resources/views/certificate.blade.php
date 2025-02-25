<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>شهادة إتمام الدورة</title>
    <style>
        body {
            text-align: center;
        }
        .certificate {
            border: 16px solid #305031;
            padding: 50px;
        }
        h1 {
            font-size: 50px;
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 20px;
        }
        h2 {
            font-size: 30px;
            color: #305031;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <h1>شـهـادة إتـمـام الـدورة</h1>
        <p>نحـن نـمـنـح هذه الـشـهـادة إلى</p>
        <h2>{{ $student->name }}</h2>
        <p>لإجـتـيـاز دورة</p>
        <h2>{{ $student->course }}</h2>
        <p>بتاريخ</p>
        <p><strong>{{ \Carbon\Carbon::parse($student->completion_date)->format('d/m/Y') }}</strong></p>
    </div>
</body>
</html>
