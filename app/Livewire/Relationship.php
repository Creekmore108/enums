<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Preference;

class Relationship extends Component
{
    public $relationship_ltr = false;
    public $relationship_marriage = false;
    public $relationship_tantric = false;
    public $relationship_polyamorous = false;
    public $relationship_open = false;
    public $relationship_celibate = false;
    public $relationship_celibate_marriage = false;
    public $relationship_casual = false;
    public $relationship_friends = false;
    public $relationship_travel = false;
    public $relationship_pen_pals = false;
    public $relationship_curious = false;
    public $relationship_other = false;


    public function mount()
    {
        $init = Preference::firstOrNew();
        // $init = Preference::firstOrNew(['user_id' => Auth::user()->id]);
        $this->relationship_ltr = $init->relationship_ltr;
        $this->relationship_marriage = $init->relationship_marriage;
        $this->relationship_tantric = $init->relationship_tantric;
        $this->relationship_polyamorous = $init->relationship_polyamorous;
        $this->relationship_open = $init->relationship_open;
        $this->relationship_celibate = $init->relationship_celibate;
        $this->relationship_celibate_marriage = $init->relationship_celibate_marriage;
        $this->relationship_casual = $init->relationship_casual;
        $this->relationship_friends = $init->relationship_friends;
        $this->relationship_travel = $init->relationship_travel;
        $this->relationship_pen_pals = $init->relationship_pen_pals;
        $this->relationship_curious = $init->relationship_curious;
        $this->relationship_other = $init->relationship_other;
    }

    public function update_options()
    {
        $pref = Preference::firstOrCreate();
        // $pref = Preference::firstOrCreate(['user_id' => Auth::user()->id]);
        $pref->relationship_ltr = $this->relationship_ltr;
        $pref->relationship_marriage = $this->relationship_marriage;
        $pref->relationship_tantric = $this->relationship_tantric;
        $pref->relationship_polyamorous = $this->relationship_polyamorous;
        $pref->relationship_open = $this->relationship_open;
        $pref->relationship_celibate = $this->relationship_celibate;
        $pref->relationship_celibate_marriage = $this->relationship_celibate_marriage;
        $pref->relationship_casual = $this->relationship_casual;
        $pref->relationship_friends = $this->relationship_friends;
        $pref->relationship_travel = $this->relationship_travel;
        $pref->relationship_pen_pals = $this->relationship_pen_pals;
        $pref->relationship_curious = $this->relationship_curious;
        $pref->relationship_other = $this->relationship_other;
        $pref->save();
    }
    public function render()
    {
        return view('livewire.relationship');
    }
}
