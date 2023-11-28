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
        'agent_team_id',
        'status',
        'deleted_at'
    ];

    public function Agentteams()
    {
        return $this->hasMany(User::class, 'id', 'agent_id');
    }
    public function teamMember()
    {
        return $this->hasMany(User::class, 'id', 'agent_team_id');
    }

    public static function teams()
    {
        $team = User::with('agentTeams')->whereHas('agentTeams', function($query){
            $query->where('agent_id', getUserId());
        })->get()->toArray();
        return  $team;
    }

     public static function agentTeamById($id)
    {
        $team = User::with('agentTeams')->whereHas('agentTeams', function($query) use($id){
            $query->where('agent_id', $id);
        })->get()->toArray();
        return  $team;

    }

}

