<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

use Flc\Alidayu\Client;
use Flc\Alidayu\App;
use Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;
use Flc\Alidayu\Requests\IRequest;

class FilmRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo '影厅列表';

        $res = DB::table('user')->get();

        var_dump($res);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('/FilmAdmins/FilmRoom/index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function a()
    {
        return view('flc');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $phone = $request->phone;

        // $phone = json_encode($phone);

        echo $phone;

        $config = [
            'app_key'    => '23470922',
            'app_secret' => '665345491559f6f682a65f3bf2e08644'
            // 'sandbox'    => true,  // 是否为沙箱环境，默认false
        ];

        $client = new Client(new App($config));
        $req    = new AlibabaAliqinFcSmsNumSend;

        $req->setRecNum($phone)
            ->setSmsParam([
                'number' => rand(100000, 999999)
            ])
            ->setSmsFreeSignName('兄弟连')
            ->setSmsTemplateCode('SMS_75835101');

        $resp = $client->execute($req);


        echo  '<pre>';

        var_dump($resp);
        // print_r($resp->result->model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
