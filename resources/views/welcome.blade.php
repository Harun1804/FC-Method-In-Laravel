@include('bagian/header')
<center>
    <div class="row">
        <div class="col-lg-12">
            <form class="col-6" method="POST" action="{{ url('/proses') }}">
                <div style="overflow: scroll; height: 467px;">
                    @foreach ($gejala as $g)
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input"
                                    value="{{ $g->kode }}" name="{{ $g->id }}">
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox"
                            value="{{ $g->gejala }}">
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Diagnosa</button>
            </form>
        </div>
    </div>
</center>
@include('bagian/footer')
