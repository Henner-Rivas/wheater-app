<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class HumedadController extends Controller
{
    public function index(Request $request)
    {

        /*       $search = $request->search;

        if ($search) {
            $ciudades = ['Miami', 'Orlando', 'New York', $search];
        } else {
            $ciudades = ['Miami', 'Orlando', 'New York'];
        }

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
        } */


        return view('pages.home');
    }

    function historial()
    {


        $historial = Historial::all();


        return view('pages.historial', ['historial' => $historial]);
    }
}
