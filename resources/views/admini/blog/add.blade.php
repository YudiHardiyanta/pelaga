@extends('admini.master')

@section('title', 'Dashboard')

@section('content')

<main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Leads</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Create</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="javascript:void(0);" class="btn btn-light-brand successAlertMessage">
                                <i class="feather-layers me-2"></i>
                                <span>Save as Draft</span>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-primary successAlertMessage">
                                <i class="feather-user-plus me-2"></i>
                                <span>Create Lead</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            
                            <hr class="mt-0">
                            <div class="card-body general-info">
                                <div class="mb-5 d-flex align-items-center justify-content-between">
                                    <h5 class="fw-bold mb-0 me-4">
                                        <span class="d-block mb-2">Betita :</span>
                                        <span class="fs-12 fw-normal text-muted text-truncate-1-line">General information for your lead</span>
                                    </h5>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">Tambah Berita</a>
                                </div>
                                <form action="{{ route('berita') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label class="fw-semibold">Jenis Berita: </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select class="form-control" data-select2-selector="country" name="jenis" placeholder="Jenis Berita"> 
                                            <option value="">Pilih Jenis Berita</option>
                                            <option data-country="1">Pemerintah Desa</option>
                                            <option data-country="2">Kelompok PKK</option>
                                            <option data-country="3">Karang Taruna</option>   
                                            <option data-country="4">Linmas</option> 
                                            <option data-country="5">Upacara Adat</option>                                         
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="title" class="fw-semibold">Judul: </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-type-h1"></i></div>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Judul Berita">
                                        </div>
                                    </div>
                                </div>                                
                                
                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="uraian" class="fw-semibold">Description: </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="feather-type"></i></div>
                                            <textarea class="form-control" id="uraian" name="uraian" cols="30" rows="5" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label class="fw-semibold">Foto: </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="col-lg-8">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-images"></i></div>
                                            <input type="file" class="form-control" id="foto" name="foto" placeholder="foto">
                                        </div>
                                    </div>
                                    </div>
                                </div> 
                                <button type="submit" class="form-control">Sumbit</button>
                                </form>                                                        
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <p><span>By: <a target="_blank" href="https://wrapbootstrap.com/user/theme_ocean" target="_blank">theme_ocean</a></span> • <span>Distributed by: <a target="_blank" href="https://themewagon.com" target="_blank">ThemeWagon</a></span></p>
            <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
    </main>

 @endsection