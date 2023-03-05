<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Historial;
use GuzzleHttp\Client;

class Aside extends Component
{
    public function render()
    {

        $ciudades = ['Miami', 'Orlando', 'New York'];
        $clima = [];

        foreach ($ciudades as $ciudad) {
            $client = new Client();
            $response = $client->get('https://api.openweathermap.org/data/2.5/weather', [
                'query' => [
                    'q' => $ciudad,
                    'appid' => env('OPENWEATHERMAP_API_KEY'),
                    'units' => 'metric'
                ]
            ]);

            $datos = json_decode($response->getBody(), true);

            // Obtener los datos de humedad actuales de la ciudad
            $humedad = $datos['main']['humidity'];
            $temp = $datos['main']['temp'];
            $wind = $datos['wind']['speed'];

            // Guardar los datos de humedad en la tabla "historial"
            $historial = new Historial();
            $historial->ciudad = $ciudad;
            $historial->humedad = $humedad;
            $historial->save();

            $clima[] = [
                'ciudad' => $ciudad,
                'humedad' => $humedad,
                'temperatura' => $temp,
                'wind' => $wind,
            ];
        }
        $horaActual = date('H:i:s');
        $saludo = "";
        $horaActual = date('H:i:s');
        if ($horaActual >= '06:00:00' && $horaActual < '12:00:00') {
            $saludo = 'Buenos días';
        } else if ($horaActual >= '12:00:00' && $horaActual < '20:00:00') {
            $saludo = 'Buenas tardes';
        } else {
            $saludo = 'Buenas noches';
        }
        $fechaActual = date('Y-m-d');
        $diaSemana = date('l', strtotime($fechaActual));

        return view('livewire.aside', ['ciudades' => $clima, 'hora_actual' => $horaActual, 'saludo' => $saludo, 'fechaActual' => $fechaActual, 'diaSemana' => $diaSemana]);
    }
}
