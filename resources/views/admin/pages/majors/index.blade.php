@extends('admin.layout.auth')
@section('title','majors')
@section('adminContent')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>MAJORS</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    MAJORS
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                    <div class="card card-box">
                        <img
                            class="card-img-top"
                            src="admin/vendors/images/img2.jpg"
                            alt="Card image cap"
                        />
                        <div class="card-body">
                            <h5 class="card-title weight-500">majors</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.
                            </p>

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
