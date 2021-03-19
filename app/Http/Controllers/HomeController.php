<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proof;
use App\Models\Racer;
use App\Models\RacerProof;
use App\Models\Base;
use App\User;

use Illuminate\Support\Facades\URL;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Proof $proof, Racer $racer, RacerProof $racer_proof)
    {
		$this->proof = $proof;
		$this->racer = $racer;
		$this->racer_proof = $racer_proof;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		if(Auth::check() == true ){
			return $this->home();
		}else{
			return view('auth.login');
		}
    }
	
	public function home()
    {
		$list_proof = $this->proof->select()->get();
		$list_racer = $this->racer->select()->get();
		$list_proof_racer = $this->racer_proof->procura();
		
        return view('home')->with( [ "list_proof" => $list_proof, "list_racer" => $list_racer, "list_proof_racer" => $list_proof_racer ] );
    }
	
	public function newracer(Request $request)
    {
		$this->racer->insert([ "name" => $request->name, "cpf" => $request->cpf, "birth_date" => $request->birth_date ]);
		return $this->home();
    }
	
	public function newproof(Request $request)
    {
		$this->proof->insert([ "type" => $request->type, "date" => $request->date ]);
		return $this->home();
    }
	
	public function proofage()
    {
		$list_position = $this->racer_proof->posicao();
		$list_proof = $this->proof->select()->get();
		$list_proof_racer = $this->racer_proof->procura();
		$list_racer = $this->racer->select()->get();
		return view('proof_age')->with( [ "list_position" => $list_position, "list_proof" => $list_proof, "list_proof_racer" => $list_proof_racer, "list_racer" => $list_racer ] );
    }
	
	public function newcompet(Request $request)
    {
		$list_racer = $this->racer_proof->procura($request->id_racer, $request->date);
		
		if(count($list_racer)>0){
			echo "<script>alert('Corredor já cadastrado em uma corrida no mesmo dia!');window.history.back();</script>";
			
		}else{
			$this->racer_proof->insert([ "id_proof" => $request->id_proof, "id_racer" => $request->id_racer, "time_start" => $request->time_start, "time_end" => $request->time_end ]);
			return $this->home();
		}
		
    }
	
	public function positionage()
    {
		$list_position = $this->racer_proof->posicao($_GET["p"]);
		$list_proof = $this->proof->select()->get();
		$list_proof_racer = $this->racer_proof->procura();
		$list_racer = $this->racer->select()->get();
		return view('position_age')->with( [ "list_position" => $list_position, "list_proof" => $list_proof, "list_proof_racer" => $list_proof_racer, "list_racer" => $list_racer ] );
		
    }
	
}
