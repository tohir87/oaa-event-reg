@extends('layout.content_layout')
@section('title', 'Register for Event')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Event Registration
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Register for event</a></li>
        </ol>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </section>

    <!-- Main content -->
    <section class="content">
        <form method="post" action="/register">
            <div class="row">
                <div class="col-md-6">

                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title alert alert-info">Education Provider (If Applicable)</h3>
                        </div>
                        <div class="box-body">

                            <div class="form-group">
                                <label>Name of Institution:</label>
                                <input required type="text" name="institution_name" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Email Address:</label>
                                <input type="email" name="email_address" class="form-control"/>
                            </div>


                            <!-- checkbox -->
                            <div class="form-group">
                                <label>Program Offered:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>
                                            <input name="program_offered[]" type="checkbox" class="minimal" value="A-Level" checked/> A-Level
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>
                                            <input name="program_offered[]" type="checkbox" class="minimal" value="Foundation" /> Foundation
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>
                                            <input name="program_offered[]" type="checkbox" class="minimal" value="Diploma" /> Diploma
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>
                                            <input name="program_offered[]" type="checkbox" class="minimal" value="Bachelor" /> Bachelor
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>
                                            <input name="program_offered[]" type="checkbox" class="minimal" value="Post-Graduate" /> Post Graduate
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Address:</label>
                                <input type="text" name="address" class="form-control"/>
                            </div>

                            <h3 class="box-title alert alert-info">Service Provider (if Applicable)</h3>
                            <div class="form-group">
                                <label>Name of Organisation:</label>
                                <input type="text" name="organisation_name" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Email Address:</label>
                                <input type="email" name="org_email_address" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label>Type of Service:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>
                                            <input name="service_type" type="radio" class="minimal" value="Govt Agency" checked/> Govt Agency
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>
                                            <input name="service_type" type="radio" class="minimal" value="Student Services" checked/> Student Services
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>
                                            <input name="service_type" type="radio" class="minimal" value="Other" checked/> Other
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <h3 class="box-title alert alert-info ">Participant(s) Details</h3>
                            <div>
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input required type="text" name="participant_name" class="form-control" placeholder="Participant Full Name"/>
                                </div>
                                <div class="form-group">
                                    <label>Designation:</label>
                                    <input type="text" name="participant_designation" class="form-control" placeholder="Designation"/>
                                </div>

                                <div class="form-group">
                                    <label>Email Address:</label>
                                    <input required type="email" name="participant_email_address" class="form-control"/>
                                </div>
                            </div>


                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                </div>
            </div>

            <div class="box-footer">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary pull-right">Next -> Participation Access</button>
                <button type="reset" class="btn btn-warning">Reset Form</button>
            </div>
        </form>
    </section>

</div>

@stop