@extends('back')
@section('Specific-Page-Vendor-CSS')
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/select2.css') }}" />
@stop
@section('scripts')
<script src="{{ asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('assets/vendor/select2/select2.js') }}"></script>
@stop
@section('content')
<section class="panel panel-featured panel-featured-primary">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
            <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss=""></a>
        </div>

        <h2 class="panel-title">Add new school</h2>
        <p class="panel-subtitle">Add new school to database</p>
    </header>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="form-group">
                    <label for="name">Company name or Name Surname <sup>*</sup></label>
                    <input name="name" type="text" id="name" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="regnr">Registration number or personal code<sup>*</sup></label>
                    <input name="regnr" maxlength="11" type="text" id="regnr" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Legal address or declared address <sup>*</sup></label>
                    <input name="address" type="text" id="address" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="website">Company web page</label>
                    <div class="input-group">
                        <span class="input-group-addon">http://</span>
                        <input name="website" type="text" id="website" value="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="website">Company logo</label>
                    <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="fa fa-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
                            <span class="btn btn-default btn-file">
                                <span class="fileupload-exists">Change</span>
                                <span class="fileupload-new">Select file</span>
                                <input type="file">
                            </span>
                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="owner">Please select school owner <sup>*</sup></label>

                            <select data-plugin-selectTwo class="form-control populate">
                                <optgroup label="List of users form database">
                                    <option value="1">Zane Zeltiņa / +37127831183</option>
                                    <option value="1">Rolands Zeltiņš / +37122458878</option>
                                    <option value="1">Ieva Bērziņa / +37123689985</option>                                  
                                    <option value="1">Aija Kalēja / +37124658878</option>
                                    <option value="1">Mārīe Pētersone / +37136989956</option>
                                    <option value="1">Olga Žuža / +37169562248</option>
                                    <option value="1">Sigita Priede / +37125796653</option>
                                    <option value="1">Leona Rižā / +37121146652</option>
                                    <option value="1">Māra Siliņa / +37123468856</option>
                                    <option value="1">Dita Fedjoreva / +37126598779</option>
                                    <option value="1">Milda Dzirksts / +37126548875</option>
                                </optgroup>
                            </select>

                    </div>                
                <br>
                <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary btn-lg btn-block">Add new school to database</button>       
            </div>
        </div>    
    </div>
</section>
<div class="col-xs-12">
    <div class="tabs tabs-primary">
        <ul class="nav nav-tabs nav-justified">
            <li class="active">
                <a href="#myCompany" data-toggle="tab" class="text-center" aria-expanded="true"><i class="fa fa-star"></i> My company</a>
            </li>
            <li class="">
                <a href="#locations" data-toggle="tab" class="text-center" aria-expanded="false"><i class="fa fa-map-marker"></i> Locations/Klases</a>
            </li>
            <li class="">
                <a href="#services" data-toggle="tab" class="text-center" aria-expanded="false"><i class="fa fa-list-alt"></i> Services</a>
            </li>
            <li class="">
                <a href="#staff" data-toggle="tab" class="text-center" aria-expanded="false"><i class="fa fa-group"></i> Staff</a>
            </li>
            <li class="">
                <a href="#settings" data-toggle="tab" class="text-center" aria-expanded="false"><i class="fa fa-gear"></i> Settings</a>
            </li>                                                                     
        </ul>
    <div class="tab-content">
        <div id="myCompany" class="tab-pane active">
        <br>
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="form-group">
                    <label for="name">Company name or Name Surname <sup>*</sup></label>
                    <input name="name" type="text" id="name" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="regnr">Registration number or personal code<sup>*</sup></label>
                    <input name="regnr" maxlength="11" type="text" id="regnr" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Legal address or declared address <sup>*</sup></label>
                    <input name="address" type="text" id="address" value="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="website">Company web page</label>
                    <div class="input-group">
                        <span class="input-group-addon">http://</span>
                        <input name="website" type="text" id="website" value="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="website">Company logo</label>
                    <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden">
                        <div class="input-append">
                            <div class="uneditable-input">
                                <i class="fa fa-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                            </div>
                            <span class="btn btn-default btn-file">
                                <span class="fileupload-exists">Change</span>
                                <span class="fileupload-new">Select file</span>
                                <input type="file">
                            </span>
                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                        </div>
                    </div>
                </div>
                <br>
                <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary btn-lg btn-block">Add new school to database</button>       
            </div>
        </div>
        </div>
        <div id="locations" class="tab-pane">
            <p>venues <code>.nav-tabs.nav-justified</code></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
        </div>
        <div id="services" class="tab-pane">
            <p>services <code>.nav-tabs.nav-justified</code></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
        </div>
        <div id="staff" class="tab-pane">
            <p>staff <code>.nav-tabs.nav-justified</code></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
        </div>
        <div id="settings" class="tab-pane">
            <p>settings <code>.nav-tabs.nav-justified</code></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
        </div>                                                                                                            
        </div>
    </div>
</div>
@stop