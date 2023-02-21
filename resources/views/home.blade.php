<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @foreach($tableTrain as $tableTrain)
                <div class="col-3">
                    <div class="card m-3 p-3 bg-success text-white">
                        <h6>Azienda</h6>
                        {{$tableTrain->Azienda}}
                        <h6>Stazione partenza</h6>
                        {{$tableTrain->Stazione_di_partenza}}
                        <h6>Stazione arrivo</h6>
                        {{$tableTrain->Stazione_di_arrivo}}
                        <h6>Orario partenza</h6>
                        {{$tableTrain->Orario_di_partenza}}
                        <h6>Orario arrivo</h6>
                        {{$tableTrain->Orario_di_arrivo}}
                        <h6>cd. Treno</h6>
                        {{$tableTrain->Codice_treno}}
                        <h6>Carrozza</h6>
                        {{$tableTrain->Numero_carrozze}}
                        <h6>Ritardo</h6>
                        {{$tableTrain->In_orario}}
                        <h6>Cancellato</h6>
                        {{$tableTrain->Cancellato}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>