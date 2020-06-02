@include('bagian/header')
<br>
<script>
    function myFunction() {
        window.print();
    }

</script>
<h1>Hasil Diagnosa</h1><br>
<div class="container">
    <button style="float:right;" class="btn btn-success" onclick="myFunction()">CETAK</button>
</div>
@foreach ($cari_penyakit as $cp)
<div class="container col-6">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <h5>PENYAKIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
            </span>
        </div>
        <textarea class="form-control" rows="1" readonly>{{ $cp->penyakit }}</textarea>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <h5>INFO PENYAKIT&nbsp;&nbsp;&nbsp;</h5>
            </span>
        </div>
        <textarea class="form-control" rows="6" readonly>{{ $cp->info }}</textarea>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">
                <h5>SOLUSI PENYAKIT</h5>
            </span>
        </div>
        <textarea class="form-control" rows="6" readonly>{{ $cp->solusi }} </textarea>
    </div>
</div>
<br>
@endforeach
@include('bagian/footer')
