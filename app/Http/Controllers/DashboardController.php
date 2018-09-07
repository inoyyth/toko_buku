<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class DashboardController extends Controller
{
    // public function index() {
    //     //if($request->hasFile('image_file')){  
    //         \Cloudder::upload('img/e1.jpg','assets/image1');
    //         $c=\Cloudder::getResult();             
    //         if($c){
    //            var_dump($c);
    //         }
            
    //     //}
    // }
    
    function  index() {
        $data['title'] = 'Welcome Page';
        return view('pages.dashboard.main')->with(compact('data'));
    }

    function getArea() {
        $response = Curl::to('http://localhost/proderma/api/get_master_area')
        ->withContentType('application/json')
        ->withHeader('Authorization: Basic c3VwcmkxNzA4NDVAZ21haWwuY29tOjE3MDg0NWlub3k=')
        ->withHeader('Token: 5a410cdb9e74ca959430c749a95bfe27')
        ->asJson()
        ->get();

        var_dump($response);die;
    }
}
 