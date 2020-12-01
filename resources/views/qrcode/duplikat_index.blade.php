@extends('dashboard.index')

@section('content')
    <div class="container">
        <div class="row">
        <div class="form-group">
            <form action="generate" method="post">
                @csrf
					<label for="sel1">Pilih Ruangan :</label>
					<select name='kode' class="form-control" id="kelas">
						<option selected="" disabled="" >-- Select Room --</option>
						<?php

                        $kodeqr = DB::table('ruang')->select('keterangan')->get();
						foreach ($kodeqr as $value) {
							echo '<option  value="'.$value->keterangan.'">'.$value->keterangan.'</option>';
						}	
						?>
					</select>
                    <button type="submit" class="btn btn-primary btn-sm my-2">Generate</button>
                    <!-- <input type="text"> -->
                    <!-- <a class="btn btn-primary my-2" type="submit">Generate</a> -->
            </form>
			</div>
            <div class="col-md-4">
                <h2>QrCode</h2> <br>
                <span> {!! $data ?? '' !!}</span>
            </div>

        </div>
    </div>
@endsection

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>QrCode</h2>
                <span> {!! $data ?? '' !!}</span>
            </div>
            <div class="col-md-4">
                Test
            </div>
            <div class="col-md-4">
                Test
            </div>
        </div>
    </div>
</body>
</html> -->