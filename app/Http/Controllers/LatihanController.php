<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Gejala;
use App\Rule;
use App\Penyakit;

class LatihanController extends Controller
{
    public function index()
    {
        $gejala = Gejala::all();
        return view('welcome',compact(['gejala']));
    }

    public function proses(Request $request)
    {
        //Mencari Id Yang diinputkan
        $qry = DB::table('tb_rule')->select('id');
        $rule_input = array();
        foreach ($request->all() as $where) {
            $qry->where($where,'=','1');
            array_push($rule_input,$where);
        }
        $qry->whereRaw('1 = 1')->get();
        $id='';

        //Menentukan Rule
        $rule = [
            ['G001','G002','G003','G008','G011','G012','G013','G014','G015'],
            ['G001','G011','G023','G024','G025'],
            ['G001','G004','G020','G021','G022'],
            ['G001','G002','G012','G017','G018','G019'],
            ['G001','G002','G003','G004','G005','G006','G007','G008','G009','G010'],
            ['G001','G011','G023','G026','G027','G028'],
            ['G001','G004','G024','G029','G030'],
            ['G011','G012','G013','G031','G032','G033','G034','G035'],
            ['G002','G006','G038','G039','G040','G041','G042','G043'],
            ['G003','G012','G023','G026','G036','G037','G038']
        ];

        $status=false;

        //Mencocokan gejala yang di inputkan user dengan rule yang ada
        for($i=0; $i <sizeof($rule); $i++){
            $result = ($rule_input==$rule[$i]);
            if($result){
                $status=true;
            }
        }

        //Jika ditemukan akan menampilkan info dan solusi dari penyakit
        if($status==true){
            $id = $qry->value('id');
            $cari_penyakit = Penyakit::where('id','=',$id)->get();
            return view('hasil',compact(['cari_penyakit']));
        }else{
            return view('notdetect');
        }

    }
}
