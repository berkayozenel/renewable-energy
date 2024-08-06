<!DOCTYPE html>
<html>
<head>
    <title>Carriere | Bewerbungsformular</title>
</head>
<body>
    <h1>Bewerbungsformular</h1>
    <p>Absender: <strong>{{ $name }} {{ $surname }},</strong></p>
    <p>Telefonnummer: {{ $phone }},</p>
    <p>Email: {{ $email }},</p>
    <p>Lebenslauf:</p>
    <pre>{{ $cv_writing }}</pre>

    <p>Vielen Dank,</p>
    <p>Renova Energie Team</p>
</body>
</html>
