<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>جاري معالجة طلبك</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>body { padding-top:40px; }</style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h2 class="mb-3">تم استلام طلبك بنجاح ✅</h2>

            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <p>جاري معالجة طلبك من قبل الإدارة. سيتم التواصل معك قريبًا عبر رقم الهاتف.</p>
            <a href="/" class="btn btn-primary mt-3">العودة إلى الصفحة الرئيسية</a>
        </div>
    </div>
</div>
</body>
</html>