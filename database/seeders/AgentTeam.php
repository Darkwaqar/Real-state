<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;



class AgentTeam extends Model

{

    use HasFactory;

    use SoftDeletes;

    protected $table = 'agent_team';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'dp',
        'designation',
        'agent_id',
        'deleted_at'
    ];



    public function Agentteams()

    {

        return $this->hasMany(User::class, 'id', 'agent_id');

    }



    public static function teams()

    {

        $team = AgentTeam::with('agenTteams')->where('agent_id', '=', getUserId())->get();

        return  $team;

    }



     public static function agentTeamById($id)

    {

        $team = AgentTeam::with('agenTteams')->where('agent_id', '=', $id)->get();

        return  $team;

    }

}

