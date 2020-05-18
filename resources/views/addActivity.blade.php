@extends('layouts.app')

@section('content')

<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Create an Admin</h4>
<!--                            <span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
<!--                        <ul class="breadcrumb-title">-->
<!--                            <li class="breadcrumb-item">-->
<!--                                <a href="index.html"> <i class="feather icon-home"></i> </a>-->
<!--                            </li>-->
<!--                            <li class="breadcrumb-item"><a href="#!">Form Components</a>-->
<!--                            </li>-->
<!--                            <li class="breadcrumb-item"><a href="#!">Form Components</a>-->
<!--                            </li>-->
<!--                        </ul>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <!-- Page body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Form Inputs card start -->
                <div class="card">
                    <div class="card-header">
<!--                            <h5>Basic Form Inputs</h5>-->
<!--                            <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->


                        <div class="card-header-right">
                            <i class="icofont icofont-spinner-alt-5"></i>
                        </div>

                    </div>
                    <div class="card-block">
<!--                            <h4 class="sub-title">Basic Inputs</h4>-->
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Full name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter fullname" v-model="admin.name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                           placeholder="Enter  email" v-model="admin.email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                           placeholder="Enter phone number" v-model="admin.phone1">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                           value="Enter  admin title" v-model="admin.title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Select Role</label>
                                <div class="col-sm-10">
                                    <select name="select" class="form-control" v-model="admin.role">
                                        <option value="opt1">Select a role</option>
                                        <option value="opt2">super_admin</option>
                                        <option value="opt3">marketers</option>
                                        <option value="opt3">finance</option>
                                        <option value="opt4">broadcaster</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input class="btn btn-primary" value="Submit" @click="createAdmin()">

                                </div>
                            </div>
                        </form>


                    </div>
                </div>
                <!-- Basic Form Inputs card end -->


                <!-- Input Alignment card end -->
            </div>
        </div>
    </div>
    <!-- Page body end -->
</div>
    
@endsection
