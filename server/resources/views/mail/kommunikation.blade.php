<!DOCTYPE html>
<html>
<head>
    <title>Kommunikation | Kontakt Formular</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #fff;
            text-align: center;
        }
        p {
            line-height: 1.6;
        }
        .header {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        pre {
            background-color: #f4f4f4;
            font-size: 17px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Kontakt Formular</h1>
        </div>
        <p>Kommunikationsthema: <strong>{{ $e_subject }}</strong>,</p>
        <p>Absender: <strong>{{ $nameSurname }}</strong>,</p>
        <p>Telefonnummer: <strong>{{ $phone }}</strong>,</p>
        <p>Email: <strong>{{ $email }}</strong>,</p>
        <p>Themenbeschreibung:</p>
        <pre>{{ $description }}</pre>
        <div class="footer">
            <p>Vielen Dank,</p>
            <p>Renova Energie Team</p>
        </div>
    </div>
</body>
</html>
