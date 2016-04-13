<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\skpd;
use App\aduan;
use App\tindakan;
use Validator;
use Auth;
use DB;
use PDF;
use Lava;


class helpdeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $user;

    function __construct() {
        $this->user = Auth::user();
    }

    public function index()
    {
        $skpd = skpd::get();
        return view('form_helpdesk',['skpd' => $skpd]);
    }

    public function store(Request $request)
    {

         $validator = Validator::make($request->all(), [
            'nama_pemohon' => 'required',
            'jabatan_pemohon' => 'required',
            'no_hp' => 'required',
            'id_skpd' => 'required',
        ]);

        if ($validator->fails()) {
           return redirect('help')->withErrors($validator)->withInput();
        }
        $simpan = $request->all();
        $simpan['id_user'] = isset($this->user->email)?$this->user->email:"";
        aduan::create($simpan);
        return redirect('help')->with('success', true);
    }

    public function show($id)
    {
        $tab = aduan::where('id',$id)->first();
        return view('tbl',['tbl'=>$tab]);
    }

    public function penanganan(Request $request)
    {
        $adu = aduan::with('skpd')
            ->where('status','not like','2')
            ->Where(function ($query) use ($request) {
                $query->where('nama_pemohon', 'LIKE', '%$request->get("q")%')
                      ->orwhere('id', 'LIKE', '%$request->get("q")%')
                      ->orwhere('jabatan_pemohon', 'LIKE', '%'.$request->get('q').'%');
            })
            ->paginate(5);
        return view('form_penanganan', ['aduans' => $adu]);
    }

    public function penangananpost(Request $request)
    {
          $validator = Validator::make($request->all(), [
            'mulai' => 'required',
            'selesai' => 'required',
            'root_cause' => 'required',
            'tindakan' => 'required',
            'hasil' => 'required',
            'id_aduan' => 'required',
        ]);
        if ($validator->fails()) {
           return redirect('penanganan')->withErrors($validator)->withInput();
        }
        $data = array(
            'tanggal_penanganan' => str_replace("-", "\\", $request->mulai),
            'tanggal_selesai' => str_replace("-", "\\", $request->selesai),
            'root_cause' => $request->root_cause,
            'tindakan' => $request->tindakan,
            'hasil' => $request->hasil,
            'id_user' => $this->user->email,
            'id_aduan' => $request->id_aduan
        );
        tindakan::create($data);
        $adu = aduan::find($request->id_aduan);
        $adu->status = $request->hasil;
        $adu->save();
        return redirect('penanganan')->with('success', true);
    }

     public function konfirmasi()
    {
        $a = aduan::with('skpd')->where('status',1)->get();
        return view('form_konfirmasi',['aduan'=>$a]);
    }

    public function daftar()
    {
        $a = aduan::with('skpd')->paginate(5);
        return view('daftar_aduan',['aduan' => $a]);
    }

    public function laporan()
    {
        $aduan = aduan::select(DB::raw("DATE_FORMAT(DATE(created_at),'%Y-%m') as date, count(*) as hasil, `status`"))
            ->groupBy('date','status')->orderBy('date')->get();
        $data = Lava::dataTable();

        $data->addDateColumn('Month of Year')
            ->addNumberColumn('Selesai')
            ->addNumberColumn('Lanjut')
            ->addNumberColumn('Belum Selesai');

            // Random Data For Example
            $tg = "";
            $isi = array();
            $n =1;
            foreach ($aduan as $a) {
                $i=0;
                if ($tg!="" && $tg !=$a['date']) {
                    $data->addRow($isi);
                    $isi = array();
                    $n=1;
                }
                $isi[0] = $a['date']."-1";
                $i = $a['status'];
                $isi[$i+1] = $a['hasil'];
                $n++;
                $tg = $a['date'];
            }
            $data->addRow($isi);

        $chart = Lava::ColumnChart('Grafik Aduan Bulanan', $data, [
                'titleTextStyle' => [
                    'fontName' => 'Arial',
                    'fontColor' => 'blue'
                ],
                'height'=>500,
                'title'=>'Grafik Pengaduan Gangguan',
                'legend' => [
                    'position' => 'bottom'
                ]
            ]);
        return view('form_laporan');
    }

    public function cetakLap(Request $req)
    {
       $peng = aduan::with('penangananAll')
            ->with('skpd')
            ->whereBetween('created_at',array( str_replace("-", "\\", $req->awal) , str_replace("-", "\\", $req->akhir)  ))
            ->get();

        $pdf = PDF::loadView('laporan.halo',
                ['aduan' => $peng, 
                'tglAwal' => str_replace("-", "\\", $req->awal), 
                'tglAkhir' => str_replace("-", "\\", $req->akhir) ])
            ->setPaper('a4')
            ->setOrientation('landscape');
        return $pdf->inline(date("Y-m-d").'.pdf');
    }

    public function lihatDetail($value='')
    {
        // return $value;
        $tin = tindakan::where('id_aduan',$value)->get();
        return view('detail',['tindakan'=>$tin]);
    }

}
