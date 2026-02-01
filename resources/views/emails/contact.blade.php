<!DOCTYPE html>
<html>
<head>
    <title>Saziņa ar mums - jauns ziņojums</title>
</head>
<body>
    <h2>Jauns ziņojums no "Sazinieties ar mums" formas</h2>
    <p><strong>Vārds:</strong> {{ $name }}</p>
    <p><strong>Tālrunis:</strong> {{ $phone }}</p>
    <p><strong>E-pasts:</strong> {{ $email }}</p>
    <p><strong>Temats:</strong> {{ $dataSubject }}</p>
    
    <p><strong>Ziņa:</strong></p>
    <p>{{ $userMessage }}</p>
</body>
</html>
