<?php

namespace App\Http\Controllers;

use App\Kami;
use Illuminate\Http\Request;
use SoapClient;
class KamiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opts=array(
            'ssl'=>array(['cipher'=>'','verifypeer'=>false,'verify_peer_name'=>false])
        );
        $params = array ('encoding' => 'UTF-8', 'verifypeer' => false, 'verifyhost' => false, 'soap_version' => SOAP_1_1, 'trace' => 1, 'exceptions' => 1, "connection_timeout" => 1800, 'stream_context' => stream_context_create($opts) );
        $url = "http://localhost:60861/ImmWS.asmx?WSDL";
        $client = new SoapClient($url,$params);
        //dd($client->__getTypes();)
        //dd($client);
        //dd($client->TceAgregacionMercancia());
        return $client->TceAgregacionMercancia();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kami  $kami
     * @return \Illuminate\Http\Response
     */
    public function show(Kami $kami)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kami  $kami
     * @return \Illuminate\Http\Response
     */
    public function edit(Kami $kami)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kami  $kami
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kami $kami)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kami  $kami
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kami $kami)
    {
        //
    }
}
