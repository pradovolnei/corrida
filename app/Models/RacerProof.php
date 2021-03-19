<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Base;
use Auth;

class RacerProof extends Base
{
    protected $table = "racer_proof";
	
	public function procura($racer = null, $date = null)
    {
		$exibir = self::selectRaw("racer.name,racer_proof.id_proof, TIMEDIFF(time_end,time_start) as 'time'");
		$exibir->LeftJoin("proof", "proof.id", "=", "racer_proof.id_proof");
		$exibir->LeftJoin("racer", "racer.id", "=", "racer_proof.id_racer");
		if($racer)
			$exibir->where("racer_proof.id_racer", $racer);
		if($date)
			$exibir->where("proof.date", $date);
		
		return $exibir->get();
    }
	
	public function posicao($proof = null)
    {
		$exibir = self::selectRaw("racer.name,racer_proof.id_proof, TIMEDIFF(time_end,time_start) as 'time', TIMESTAMPDIFF(YEAR, birth_date, NOW()) AS idade,proof.type,racer_proof.id_racer");
		$exibir->LeftJoin("proof", "proof.id", "=", "racer_proof.id_proof");
		$exibir->LeftJoin("racer", "racer.id", "=", "racer_proof.id_racer");
		if($proof)
			$exibir->where("racer_proof.id_proof", $proof);
		
		$exibir->orderBy("time");
		
		return $exibir->get();
    }
}