<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\Paydisini;

class PaydisiniController extends Controller
{
    private $paydisini;

    public function __construct()
    {
        // Inisialisasi kelas Paydisini dengan kunci API
        $this->paydisini = new Paydisini('YOUR_API_KEY');
    }

    public function testTransaction()
    {
        $code = 'NoTrx';
        $service = 'ChannelID';
        $amount = 10000;
        $note = 'Test transaction';
        $wallet = '';

        $response = $this->paydisini->transaction($code, $service, $amount, $note, $wallet);

        return response()->json($response);
    }

    public function testStatus()
    {
        $code = 'NoTrx';

        $response = $this->paydisini->status($code);

        return response()->json($response);
    }

    public function testChannel()
    {
        $response = $this->paydisini->chanel();

        return response()->json($response);
    }

    public function testGuide()
    {
        $service = 'ChannelID';

        $response = $this->paydisini->guide($service);

        return response()->json($response);
    }

    public function callback(Request $request)
    {
        $params = $request->all();

        $response = $this->paydisini->callback($params);

        return response()->json($response);
    }
}
