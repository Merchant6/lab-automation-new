@extends("dashboard.master")




    @section('content')
            
            
                
            
                <div class="main-panel p-3">
                    <div class=" my-3">
                    
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="d-flex align-items-end flex-wrap">
                            <div class="me-md-3 me-xl-5">
                                <h2>Welcome back, <span class="text-capitalize">{{Auth::user()->username}}</span></h2>
                                <p class="mb-md-0">Your analytics dashboard template.</p>
                            </div>
                            <div class="d-flex">
                                <i class="mdi mdi-home text-muted hover-cursor"></i>
                                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                                <p class="text-primary mb-0 hover-cursor">Analytics</p>
                            </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-end flex-wrap">
                            <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                                <i class="mdi mdi-download text-muted"></i>
                            </button>
                            <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                                <i class="mdi mdi-clock-outline text-muted"></i>
                            </button>
                            <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                                <i class="mdi mdi-plus text-muted"></i>
                            </button>
                           
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12  stretch-card">
                        <div class="card">
                            <div class="card-body dashboard-tabs p-0">
                            <ul class="nav nav-tabs px-2" role="tablist">
                                <li class="nav-item">
                                <h4 class="nav-link active mx-2">Insights</h4>
                                </li>
                                
                            </ul>
                            <div class="tab-content py-0 px-0">
                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <div class="d-flex flex-wrap justify-content-xl-between">
                                    <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                    <div class="d-flex flex-column justify-content-around">

                                       
                                        

                                        <small class="mb-1 text-muted"></small>
                                        <div class="">
                                            <h5 class="mb-0 d-inline-block"></h5>
                                        
                                       
                                        
                                    </div>
                                    </div>
                                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                    <i class="mdi mdi-arrow-bottom-right me-3 icon-lg text-warning"></i>
                                    <div class="d-flex flex-column justify-content-around">
                                        <small class="mb-1 text-muted">Total Products</small>
                                        <h5 class="me-2 mb-0">{{$total}}</h5>
                                    </div>
                                    </div>
                                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                    <i class="mdi mdi-check-all me-3 icon-lg text-success"></i>
                                    <div class="d-flex flex-column justify-content-around">
                                        <small class="mb-1 text-muted">Tested Products</small>
                                        <h5 class="me-2 mb-0">{{$tested}}</h5>
                                    </div>
                                    </div>
                                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                    <i class="mdi mdi-close-box-multiple-outline me-3 icon-lg text-danger"></i>
                                    <div class="d-flex flex-column justify-content-around">
                                        <small class="mb-1 text-muted">Untested Products</small>
                                        <h5 class="me-2 mb-0">{{ $untested}}</h5>
                                    </div>
                                    </div>
                                    <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                    <i class="mdi mdi-arrow-collapse me-3 icon-lg text-primary"></i>
                                    <div class="d-flex flex-column justify-content-around">
                                        <small class="mb-1 text-muted">Ratio: Tested to Untested</small>
                                        <h5 class="me-2 mb-0">{{$ratio}}</h5>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                
                                    
                                </div>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row p-1">
                        
                        <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                            <p class="card-title">Cash deposits</p>
                            <p class="mb-4">To start a blog, think of a topic about and first brainstorm party is ways to write details</p>
                            <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
                            <canvas id="cash-deposits-chart"></canvas>
                            </div>
                        </div>
                        </div>

                        
                        </div>
                 
                    </div>
                    <!-- content-wrapper ends -->
                    
                </div>
                <!-- main-panel ends --> 
    

        
    @endsection

