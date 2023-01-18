<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Komentar;

class Berita extends Component
{
    public $txtkomentar;
    public function simpan()
    {
        $simpan = new komentar();
        $simpan->isi_komentar = $this->txtkomentar;
        $simpan->save();
        $this->reset();
    }

    public function hapus($idhapus)
    {
        $hapus = Komentar::findOrFail($idhapus);
        $hapus->delete();
        $this->reset();
    }

    public function render()
    {
        return view('livewire.berita', [
            'isi_komentar' => komentar::orderBy('created_at','desc')->get()
        ] );
    }
}
