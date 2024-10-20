<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni in Partenza Oggi</title>
</head>
<body>
    <h1>Treni in Partenza Oggi</h1>
    <ul>
        @foreach ($treni_in_partenza as $train)
            <li>
                <strong>Azienda:</strong> {{ $train->azienda }} <br>
                <strong>Partenza:</strong> {{ $train->stazione_di_partenza }} alle {{ $train->orario_di_partenza }} <br>
                <strong>Arrivo:</strong> {{ $train->stazione_di_arrivo }} alle {{ $train->orario_di_arrivo }} <br>
                <strong>Codice train:</strong> {{ $train->codice_train }} <br>
                <strong>Numero Carrozze:</strong> {{ $train->numero_carrozze }} <br>
                <strong>In Orario:</strong> {{ $train->in_orario ? 'Sì' : 'No' }} <br>
                <strong>Cancellato:</strong> {{ $train->cancellato ? 'Sì' : 'No' }}
            </li>
        @endforeach
    </ul>
</body>
</html>