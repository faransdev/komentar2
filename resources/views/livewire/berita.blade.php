<div>
    <div class="container">
     <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    Status
                </div>
                <div class="card-body">    
                    komentar <br>
                    <input type="text" clas="form-control" wire:model='txtkomentar'/>
                    <br><Br>
                    <input type="submit" class="btn btn-primary" value="KIRIM" wire:click='simpan'/>       
                </div>
             </div>          
        </div>
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    Kiriman saya
                </div>
                <div class="card-body"> 
                    saya :<br />
                    <p>
                        <i>
                            {{ $txtkomentar }}
                        </i>
                        </p>
                        <hr/>          
                        @foreach ($isi_komentar as $item)       
                        Saya  pada {{Carbon\Carbon::parse($item->created_at)->isoformat('dddd, D MMMM Y')}}    
                        menulis:<br/> 
                        saya :<Br/>
                        <p>
                            <i>
                                {{ $item->isi_komentar}}
                            </i>
                            <button class="float-end btn btn-danger"wire:click="hapus('{{ $item->id }}')">

                                HAPUS
                            
                            </button>
                        </p>
                        <hr/>
                        @endforeach
                </div>       
             </div>            
        </div>

     </div>
    </div>
</div>