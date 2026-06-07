<div class="container">
    <div class="row">
        @foreach ($fakultas as $item)
        <div class="card">
            <img src="{{ asset($item->foto) }}" style="width: 200px">
            <div class="card-body">
                <h3 class="card-title">{{ $item->namafakultas }}</h3>
                @foreach($item->Dataprogramstudi as $prodi)
                   <a href="{{ route('pembayarankuy',$prodi->id) }}">{{ $prodi->namaprogramstudi}}</a>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>