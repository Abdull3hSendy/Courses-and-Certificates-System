<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'إدارة الطلاب')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="direction: rtl;">
        <a class="navbar-brand" href="#">إدارة الطلاب</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('students.create') }}">إضافة طالب</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>
