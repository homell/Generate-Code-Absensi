
@extends('dashboard.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                <img src="qrcode/Lab. Hadware.jpg" class="card-img-top" alt="...">
                    <form action="generate" method="post">
                        @csrf
                        <div class="card-body">
                            <h5 class="card-title">Lab. Hadware</h5>
                            <button type="button" name="kode" value="Lab. Hadware" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                            >Lihat</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">     
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <form action="generate" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <h5 class="card-title">Lab. Hadware</h5>
                                        <button type="submit" id="exampleModalLabel" name="kode" value="Lab. Hadware" class="btn btn-primary"
                                        >Generate</button>
                                    </div>
                                </form>
                                <!-- <h5 class="modal-title" id="exampleModalLabel">Lab. Hadware</h5> -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span> {!! $data ?? '' !!}</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                <img src="qrcode/Lab. Nirkabel.jpg" class="card-img-top" alt="...">
                <form action="generate" method="post">
                        @csrf
                        <div class="card-body">
                            <h5 class="card-title">Lab. Nirkabel</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2"
                            name="kode" value="Lab. Nirkabel">Lihat</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">     
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                    <form action="generate" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <h5 class="card-title">Lab. Nirkabel</h5>
                                            <button type="submit" id="exampleModalLabel" name="kode" value="Lab. Nirkabel" class="btn btn-primary"
                                            >Generate</button>
                                        </div>
                                    </form>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span> {!! $data ?? '' !!}</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                <img src="qrcode/Lab. Program 1.jpg" class="card-img-top" alt="...">
                <form action="generate" method="post">
                        @csrf
                        <div class="card-body">
                            <h5 class="card-title">Lab. Program 1</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3"
                            name="kode" value="Lab. Program 1">Lihat</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">     
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                    <form action="generate" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <h5 class="card-title">Lab. Program 1</h5>
                                            <button type="submit" id="exampleModalLabel" name="kode" value="Lab. Program 1" class="btn btn-primary"
                                            >Generate</button>
                                        </div>
                                    </form>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span> {!! $data ?? '' !!}</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                <img src="qrcode/Lab. Program 2.jpg" class="card-img-top" alt="...">
                <form action="generate" method="post">
                        @csrf
                        <div class="card-body">
                            <h5 class="card-title">Lab. Program 2</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4"
                            name="kode" value="Lab. Program 2">Lihat</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">     
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                    <form action="generate" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <h5 class="card-title">Lab. Program 2</h5>
                                            <button type="submit" id="exampleModalLabel" name="kode" value="Lab. Program 2" class="btn btn-primary"
                                            >Generate</button>
                                        </div>
                                    </form>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span> {!! $data ?? '' !!}</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <img src="qrcode/Lab. Desain.jpg" class="card-img-top" alt="...">
                    <form action="generate" method="post">
                        @csrf
                        <div class="card-body">
                            <h5 class="card-title">Lab. Desain</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal5"
                            name="kode" value="Lab. Desain">Lihat</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">     
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                    <form action="generate" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <h5 class="card-title">Lab. Desain</h5>
                                            <button type="submit" id="exampleModalLabel" name="kode" value="Lab. Desain" class="btn btn-primary"
                                            >Generate</button>
                                        </div>
                                    </form>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span> {!! $data ?? '' !!}</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                <img src="qrcode/Lab. TUK.jpg" class="card-img-top" alt="...">
                <form action="generate" method="post">
                        @csrf
                        <div class="card-body">
                            <h5 class="card-title">Lab. TUK</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal6"
                            name="kode" value="Lab. TUK">Lihat</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">     
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                    <form action="generate" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <h5 class="card-title">Lab. TUK</h5>
                                            <button type="submit" id="exampleModalLabel" name="kode" value="Lab. TUK" class="btn btn-primary"
                                            >Generate</button>
                                        </div>
                                    </form>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span> {!! $data ?? '' !!}</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                <img src="qrcode/Lab. Multimedia.jpg" class="card-img-top" alt="...">
                <form action="generate" method="post">
                        @csrf
                        <div class="card-body">
                            <h5 class="card-title">Lab. Multimedia</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7"
                            name="kode" value="Lab. Multimedia">Lihat</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">     
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                    <form action="generate" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <h5 class="card-title">Lab. Multimedia</h5>
                                            <button type="submit" id="exampleModalLabel" name="kode" value="Lab. Multimedia" class="btn btn-primary"
                                            >Generate</button>
                                        </div>
                                    </form>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span> {!! $data ?? '' !!}</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                <img src="qrcode/Lab. Basis Data.jpg" class="card-img-top" alt="...">
                <form action="generate" method="post">
                        @csrf
                        <div class="card-body">
                            <h5 class="card-title">Lab. Basis Data</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal8"
                            name="kode" value="Lab">Lihat</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">     
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                    <form action="generate" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <h5 class="card-title">Lab. Basis Data</h5>
                                            <button type="submit" id="exampleModalLabel" name="kode" value="Lab. Basis data" class="btn btn-primary"
                                            >Generate</button>
                                        </div>
                                    </form>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span> {!! $data ?? '' !!}</span>
                            </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="col">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="row">
                    <img src="images/admin.jpg" alt="">
                    <form action="generate" method="post">
                        @csrf
                        <p name ="kode" value="Lab. Hadware">Lab. Hadware</p>
                        <button type="submit" class="btn btn-primary btn-sm my-2">Generate</button>
                    </form>
                    <div class="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <img src="images/admin.jpg" alt="">
                    <form action="generate" method="post">
                        @csrf
                        <p name ="kode" value="Lab. Hadware">Lab. Nirkabel</p>
                        <button type="submit" class="btn btn-primary btn-sm my-2">Generate</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <img src="images/admin.jpg" alt="">
                    <form action="generate" method="post">
                        @csrf
                        <p name ="kode" value="Lab. Hadware">Lab. Basis Data</p>
                        <button type="submit" class="btn btn-primary btn-sm my-2">Generate</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <img src="images/admin.jpg" alt="">
                    <form action="generate" method="post">
                        @csrf
                        <p name ="kode" value="Lab. Hadware">Lab. Program 1</p>
                        <button type="submit" class="btn btn-primary btn-sm my-2">Generate</button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="row">
                    <img src="images/admin.jpg" alt="">
                    <form action="generate" method="post">
                        @csrf
                        <p name ="kode" value="Lab. Hadware">Lab. Program 1</p>
                        <button type="submit" class="btn btn-primary btn-sm my-2">Generate</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <img src="images/admin.jpg" alt="">
                    <form action="generate" method="post">
                        @csrf
                        <p name ="kode" value="Lab. Hadware">Lab. Multimedia</p>
                        <button type="submit" class="btn btn-primary btn-sm my-2">Generate</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <img src="images/admin.jpg" alt="">
                    <div class="col">
                        <form action="generate" method="post">
                            @csrf
                            <p name ="kode" value="Lab. Hadware">Lab. TUK</p>
                            <button type="submit" class="btn btn-primary btn-sm my-2">Generate</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row">
                    <img src="images/admin.jpg" alt="">
                    <form action="generate" method="post">
                        @csrf
                        <p name ="kode" value="Lab. Hadware">Lab. Desain   </p>
                        <button type="submit" class="btn btn-primary btn-sm my-2">Generate</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div> -->
@endsection
