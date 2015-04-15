@extends('back')

@section('content')
    {{ $url = Request::path() }}
    !{{ $url }}!


    <div class="row">
        <div class="col-xs-12">
            <div class="tabs tabs-primary">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#popular10" data-toggle="tab" class="text-center"><i class="fa fa-user"></i> Find one model</a>
                    </li>
                    <li>
                        <a href="#recent10" data-toggle="tab" class="text-center"><i class="fa fa-users"></i> Find models for group</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="popular10" class="tab-pane active">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Student name, surename</label>
                                <div class="col-md-6">
                                    <div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-user"></i></span>
													</span>
                                        <select id="student-list" class="form-control populate placeholder  data-placeholder">
                                            <option></option>
                                            <optgroup label="Students">
                                                <option value="01">Rolands Zeltins</option>
                                                <option value="02">Zane Zeltina</option>
                                                <option value="03">Kalvis Krastins</option>
                                                <option value="04">Agnese Kivrane</option>
                                                <option value="05">Alina Vasiljeva</option>
                                                <option value="06">Lasma Kaufmane</option>
                                                <option value="07">Laura Pulke</option>
                                                <option value="08">Ieva Tetate</option>
                                                <option value="09">Evita Juksha</option>
                                                <option value="10">Evija Melne</option>
                                                <option value="11">Maria Teresa</option>
                                                <option value="12">Denise Magnano</option>
                                                <option value="13">Artis Laganovskis</option>
                                                <option value="15">Elīza Velika</option>
                                                <option value="16">Ģirts Indrijaitis</option>
                                                <option value="17">Līna Gobiņa</option>
                                                <option value="18">Ieva Zirnite </option>
                                                <option value="19">Lucas Hanchuk</option>
                                                <option value="20">Zanda Luse</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Chose procedure name</label>
                                <div class="col-md-6">
                                    <div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-list"></i></span>
													</span>
                                        <select class="form-control" data-plugin-multiselect>
                                            <option class="none" style="display:none" value="false">Please select procedure</option>
                                            <option value="Manicure-with-polish">Manicure regular with polish</option>
                                            <option value="Manicure-with-gel-lacquer-polish">Manicure with gel lacquer polish</option>
                                            <option value="Gel-nail-extensions">Gel nail extensions</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Date and time</label>
                                <div class="col-md-6">
                                    <div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-calendar"></i></span>
													</span>
                                        <input type="text" onfocus="blur();" class="form_datetime form-control" placeholder="Chose date and time for procedure">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Aditional information</label>
                                <div class="col-md-6">
                                    <div class="input-group input-group-icon">
													<span class="input-group-addon">
														<span class="icon"><i class="fa fa-info"></i></span>
													</span>
                                        <textarea class="form-control" rows="3" placeholder="Please add any other important information, what potentional model should know!"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label"> </label>
                                <div class="col-md-6">
                                    <button type="button" class="mb-xs mt-xs mr-xs btn btn-lg btn-primary btn-block">Block level button</button>
                                </div>
                            </div>



                        </form>
                    </div>

                    <div id="recent10" class="tab-pane">
                        <p>Recent <code>.nav-tabs.nav-justified</code></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
