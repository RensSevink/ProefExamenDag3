<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Datum</th>
                <th>Aantal Uren</th>
                <th>Begintijd</th>
                <th>Eindtijd</th>
                <th>AantalVolwassenen</th>
                <th>AantalKinderen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reseverings as $resevering)
                <tr>
                    <td>{{ $resevering->persoons->Voornaam }}</td>
                    <td>{{ $resevering->Datum }}</td>
                    <td>{{ $resevering->AantalUren }}</td>
                    <td>{{ $resevering->BeginTijd }}</td>
                    <td>{{ $resevering->EindTijd }}</td>
                    <td>{{ $resevering->AantalVolwassenen }}</td>
                    <td>{{ $resevering->AantalKinderen }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
