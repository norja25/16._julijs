@extends('back')
@section('Specific-Page-Vendor-CSS')
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}">
@stop
@section('scripts')
<script src="{{ asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') }}"></script>
<script src="{{ asset('assets/vendor/select2/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript">
$('.tabs a[href="' + window.location.hash + '"]').trigger('click');
    /*
    Modal with CSS animation
    */
    $('.modal-with-zoom-anim').magnificPopup({
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,
        
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in',
        modal: true
    });
        /*
    Modal Dismiss
    */
    $(document).on('click', '.modal-dismiss', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });

    /*
    Modal Confirm
    */
    $(document).on('click', '.modal-confirm', function (e) {
        e.preventDefault();
        $.magnificPopup.close();

        new PNotify({
            title: 'Success!',
            text: 'Modal Confirm Message.',
            type: 'success'
        });
    });
</script>
@stop
@section('content')

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
                    <input name="name" type="text" id="name" value="Versija Tev IK" class="form-control">
                </div>
                <div class="form-group">
                    <label for="regnr">Registration number or personal code<sup>*</sup></label>
                    <input name="regnr" maxlength="11" type="text" id="regnr" value="4568458654" class="form-control">
                </div>
                <div class="form-group">
                    <label for="address">Legal address or declared address <sup>*</sup></label>
                    <input name="address" type="text" id="address" value="Turkalnes iela 25a, Ogre, LV1011" class="form-control">
                </div>
                <div class="form-group">
                    <label for="website">Company web page</label>
                    <div class="input-group">
                        <span class="input-group-addon">http://</span>
                        <input name="website" type="text" id="website" value="manikirs.lv" class="form-control">
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
                        <label for="owner">School owner <sup>*</sup></label>
                        <input type="text" value="Zane Zeltiņa / +37127831183" id="inputReadOnly" class="form-control" readonly="readonly">
                    </div>                
                <br>
                <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary btn-lg btn-block">Save company info</button>       
            </div>
        </div>  
        </div>
        <div id="locations" class="tab-pane">           
         <button  href="#modalAnim" type="button" class="mb-xs mt-xs mr-xs modal-with-zoom-anim btn btn-default mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-plus"></i> Add school location</button>
         <hr>   
            <div id="modalAnim" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Add school location</h2>
                    </header>
                    <div class="panel-body">
                        <div class="modal-wrapper">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-8">
                                    <div class="form-group">
                                        <label for="name">School location name <sup>*</sup></label>
                                        <input name="name" type="text" id="name" value="Manikīra studiaj 1 stāvs" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Class adress/location <sup>*</sup></label>
                                            <section class="">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="street">Street</label>
                                                <div class="col-md-9">
                                                      <input class="form-control" type="text" placeholder="Street">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="street">City</label>
                                                <div class="col-md-9">
                                                      <input class="form-control" type="text" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="street">ZIP-Code</label>
                                                <div class="col-md-9">
                                                      <input class="form-control" type="text" placeholder="ZIP-Code">
                                                </div>
                                            </div>                                           
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="street">Country</label>
                                                <div class="col-md-9">
                                                    <select required=""  class="form-control last">
                                                        <option value="AF" title="+93">Afghanistan</option><option value="AL" title="+355">Albania</option><option value="DZ" title="+213">Algeria</option><option value="AS" title="+1684">American Samoa</option><option value="AD" title="+376">Andorra</option><option value="AO" title="+244">Angola</option><option value="AI" title="+1264">Anguilla</option><option value="AQ" title="+672">Antarctica</option><option value="AG" title="+1268">Antigua and Barbuda</option><option value="AR" title="+54">Argentina</option><option value="AM" title="+374">Armenia</option><option value="AW" title="+297">Aruba</option><option value="AU" title="+61">Australia</option><option value="AT" title="+43">Austria</option><option value="AZ" title="+994">Azerbaijan</option><option value="BS" title="+1242">Bahamas, The</option><option value="BH" title="+973">Bahrain</option><option value="BD" title="+880">Bangladesh</option><option value="BB" title="+1246">Barbados</option><option value="BY" title="+375">Belarus</option><option value="BE" title="+32">Belgium</option><option value="BZ" title="+501">Belize</option><option value="BJ" title="+229">Benin</option><option value="BM" title="+1441">Bermuda</option><option value="BT" title="+975">Bhutan</option><option value="BO" title="+591">Bolivia</option><option value="BA" title="+387">Bosnia and Herzegovina</option><option value="BW" title="+267">Botswana</option><option value="BR" title="+55">Brazil</option><option value="VG" title="+1284">British Virgin Islands</option><option value="BN" title="+673">Brunei</option><option value="BG" title="+359">Bulgaria</option><option value="BF" title="+226">Burkina Faso</option><option value="BI" title="+257">Burundi</option><option value="CV" title="+238">Cabo Verde</option><option value="KH" title="+855">Cambodia</option><option value="CM" title="+237">Cameroon</option><option value="CA" title="+1">Canada</option><option value="KY" title="+1345">Cayman Islands</option><option value="CF" title="+236">Central African Republic</option><option value="TD" title="+235">Chad</option><option value="CL" title="+56">Chile</option><option value="CN" title="+86">China</option><option value="CO" title="+57">Colombia</option><option value="KM" title="+269">Comoros</option><option value="CG" title="+242">Congo</option><option value="CD" title="+243">Congo (DRC)</option><option value="CK" title="+682">Cook Islands</option><option value="CR" title="+506">Costa Rica</option><option value="CI" title="+225">Côte d’Ivoire</option><option value="HR" title="+385">Croatia</option><option value="CU" title="+53">Cuba</option><option value="CW" title="+5999">Curaçao</option><option value="CY" title="+357">Cyprus</option><option value="CZ" title="+420">Czech Republic</option><option value="DK" title="+45">Denmark</option><option value="DJ" title="+253">Djibouti</option><option value="DM" title="+1767">Dominica</option><option value="DO" title="+18">Dominican Republic</option><option value="EC" title="+593">Ecuador</option><option value="EG" title="+20">Egypt</option><option value="SV" title="+503">El Salvador</option><option value="GQ" title="+240">Equatorial Guinea</option><option value="ER" title="+291">Eritrea</option><option value="EE" title="+372">Estonia</option><option value="ET" title="+251">Ethiopia</option><option value="FK" title="+500">Falkland Islands</option><option value="FO" title="+298">Faroe Islands</option><option value="FJ" title="+679">Fiji</option><option value="FI" title="+358">Finland</option><option value="FR" title="+33">France</option><option value="GF" title="+594">French Guiana</option><option value="PF" title="+689">French Polynesia</option><option value="GA" title="+241">Gabon</option><option value="GM" title="+220">Gambia, The</option><option value="GE" title="+995">Georgia</option><option value="DE" title="+49">Germany</option><option value="GH" title="+233">Ghana</option><option value="GI" title="+350">Gibraltar</option><option value="GR" title="+30">Greece</option><option value="GL" title="+299">Greenland</option><option value="GD" title="+1473">Grenada</option><option value="GP" title="+590">Guadeloupe</option><option value="GU" title="+1671">Guam</option><option value="GT" title="+502">Guatemala</option><option value="GN" title="+224">Guinea</option><option value="GW" title="+245">Guinea-Bissau</option><option value="GY" title="+592">Guyana</option><option value="HT" title="+509">Haiti</option><option value="VA" title="+3">Holy See (Vatican City)</option><option value="HN" title="+504">Honduras</option><option value="HK" title="+852">Hong Kong SAR</option><option value="HU" title="+36">Hungary</option><option value="IS" title="+354">Iceland</option><option value="IN" title="+91">India</option><option value="ID" title="+62">Indonesia</option><option value="IR" title="+98">Iran</option><option value="IQ" title="+964">Iraq</option><option value="IE" title="+353">Ireland, Republic of</option><option value="IL" title="+972">Israel</option><option value="IT" title="+39">Italy</option><option value="JM" title="+1876">Jamaica</option><option value="JP" title="+81">Japan</option><option value="JO" title="+962">Jordan</option><option value="KZ" title="+7">Kazakhstan</option><option value="KE" title="+254">Kenya</option><option value="KI" title="+686">Kiribati</option><option value="KR" title="+82">Korea</option><option value="KW" title="+965">Kuwait</option><option value="KG" title="+996">Kyrgyzstan</option><option value="LA" title="+856">Laos</option><option value="LV" title="+371" selected="selected">Latvia</option><option value="LB" title="+961">Lebanon</option><option value="LS" title="+266">Lesotho</option><option value="LR" title="+231">Liberia</option><option value="LY" title="+218">Libya</option><option value="LI" title="+423">Liechtenstein</option><option value="LT" title="+370">Lithuania</option><option value="LU" title="+352">Luxembourg</option><option value="MO" title="+853">Macao SAR</option><option value="MK" title="+389">Macedonia, FYRO</option><option value="MG" title="+261">Madagascar</option><option value="MW" title="+265">Malawi</option><option value="MY" title="+60">Malaysia</option><option value="MV" title="+960">Maldives</option><option value="ML" title="+223">Mali</option><option value="MT" title="+356">Malta</option><option value="MH" title="+692">Marshall Islands</option><option value="MQ" title="+596">Martinique</option><option value="MR" title="+222">Mauritania</option><option value="MU" title="+230">Mauritius</option><option value="YT" title="+269">Mayotte</option><option value="MX" title="+52">Mexico</option><option value="FM" title="+691">Micronesia</option><option value="MD" title="+373">Moldova</option><option value="MC" title="+377">Monaco</option><option value="MN" title="+976">Mongolia</option><option value="ME" title="+382">Montenegro</option><option value="MS" title="+1664">Montserrat</option><option value="MA" title="+212">Morocco</option><option value="MZ" title="+258">Mozambique</option><option value="MM" title="+95">Myanmar</option><option value="NA" title="+264">Namibia</option><option value="NR" title="+674">Nauru</option><option value="NP" title="+977">Nepal</option><option value="NL" title="+31">Netherlands</option><option value="NC" title="+687">New Caledonia</option><option value="NZ" title="+64">New Zealand</option><option value="NI" title="+505">Nicaragua</option><option value="NE" title="+227">Niger</option><option value="NG" title="+234">Nigeria</option><option value="NU" title="+683">Niue</option><option value="MP" title="+1670">Northern Mariana Islands</option><option value="KP" title="+850">North Korea</option><option value="NO" title="+47">Norway</option><option value="OM" title="+968">Oman</option><option value="PK" title="+92">Pakistan</option><option value="PW" title="+680">Palau</option><option value="PS" title="+970">Palestinian Authority</option><option value="PA" title="+507">Panama</option><option value="PG" title="+675">Papua New Guinea</option><option value="PY" title="+595">Paraguay</option><option value="PE" title="+51">Peru</option><option value="PH" title="+63">Philippines</option><option value="PL" title="+48">Poland</option><option value="PT" title="+351">Portugal</option><option value="PR" title="+1787">Puerto Rico</option><option value="QA" title="+974">Qatar</option><option value="RE" title="+262">Reunion</option><option value="RO" title="+40">Romania</option><option value="RU" title="+7">Russia</option><option value="RW" title="+250">Rwanda</option><option value="KN" title="+1869">Saint Kitts and Nevis</option><option value="LC" title="+1758">Saint Lucia</option><option value="PM" title="+508">Saint Pierre and Miquelon</option><option value="VC" title="+1784">Saint Vincent and the Grenadines</option><option value="WS" title="+685">Samoa</option><option value="SM" title="+378">San Marino</option><option value="ST" title="+239">São Tomé and Príncipe</option><option value="SA" title="+966">Saudi Arabia</option><option value="SN" title="+221">Senegal</option><option value="RS" title="+381">Serbia</option><option value="SC" title="+248">Seychelles</option><option value="SL" title="+232">Sierra Leone</option><option value="SG" title="+65">Singapore</option><option value="SX" title="+1721">Sint Maarten</option><option value="SK" title="+421">Slovakia</option><option value="SI" title="+386">Slovenia</option><option value="SB" title="+677">Solomon Islands</option><option value="SO" title="+252">Somalia</option><option value="ZA" title="+27">South Africa</option><option value="ES" title="+34">Spain</option><option value="LK" title="+94">Sri Lanka</option><option value="SH" title="+290">St Helena, Ascension, Tristan da Cunha</option><option value="SD" title="+249">Sudan</option><option value="SR" title="+597">Suriname</option><option value="SZ" title="+268">Swaziland</option><option value="SE" title="+46">Sweden</option><option value="CH" title="+41">Switzerland</option><option value="SY" title="+963">Syria</option><option value="TW" title="+886">Taiwan</option><option value="TJ" title="+992">Tajikistan</option><option value="TZ" title="+255">Tanzania</option><option value="TH" title="+66">Thailand</option><option value="TL" title="+670">Timor-Leste</option><option value="TG" title="+228">Togo</option><option value="TK" title="+690">Tokelau</option><option value="TO" title="+676">Tonga</option><option value="TT" title="+1868">Trinidad and Tobago</option><option value="TN" title="+216">Tunisia</option><option value="TR" title="+90">Turkey</option><option value="TM" title="+993">Turkmenistan</option><option value="TC" title="+1649">Turks and Caicos Islands</option><option value="TV" title="+688">Tuvalu</option><option value="UG" title="+256">Uganda</option><option value="UA" title="+380">Ukraine</option><option value="AE" title="+971">United Arab Emirates</option><option value="GB" title="+44">United Kingdom</option><option value="US" title="+1">United States</option><option value="UY" title="+598">Uruguay</option><option value="VI" title="+1340">US Virgin Islands</option><option value="UZ" title="+998">Uzbekistan</option><option value="VU" title="+678">Vanuatu</option><option value="VE" title="+58">Venezuela</option><option value="VN" title="+84">Vietnam</option><option value="WF" title="+681">Wallis and Futuna</option><option value="YE" title="+967">Yemen</option><option value="ZM" title="+260">Zambia</option><option value="ZW" title="+263">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr class="solid short mt-lg">
                                            <div class="form-group">
                                           <label for="name">Select dates when class is closed<sup>*</sup></label>
                                            <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                <input type="text" data-plugin-datepicker="" data-plugin-options="{ &quot;multidate&quot;: true }" class="form-control">
                                            </div>
                                            </div>                                            

                                            </section>
                                    </div>                                                                                         
                                </div>
                            </div>  
                        </div>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-primary modal-confirm">Add new school location</button>
                                <button class="btn btn-default modal-dismiss">Cancel</button>
                            </div>
                        </div>
                    </footer>
                </section>
            </div>
        <br>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <section class="panel">
                <header class="panel-heading bg-primary">
                    <div class="panel-heading-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                </header>
                <div class="panel-body text-center">
                    <h3 class="text-semibold mt-sm text-center">Manikīra studiaj 1 stāvs</h3>
                    <p class="text-center">Lāčplēša iela 41/2, Rīga, LV1011</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="h4 text-bold mb-none mt-lg">10</div>
                            <p class="text-xs text-muted mb-none">Max places</p>
                        </div>
                        <div class="col-md-4">
                            <div class="h4 text-bold mb-none mt-lg">All days</div>
                            <p class="text-xs text-muted mb-none">Working time</p>
                        </div>
                        <div class="col-md-4">
                            <div class="h4 text-bold mb-none mt-lg">23</div>
                            <p class="text-xs text-muted mb-none">Curently studying</p>
                        </div>
                    </div>                     
                    <div class="summary-footer">
                        <a class="text-uppercase">(info)</a>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <section class="panel">
                <header class="panel-heading bg-primary">
                    <div class="panel-heading-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                </header>
                <div class="panel-body text-center">
                    <h3 class="text-semibold mt-sm text-center">Manikīra studiaj 2 stāvs</h3>
                    <p class="text-center">Lāčplēša iela 41/2, Rīga, LV1011</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="h4 text-bold mb-none mt-lg">10</div>
                            <p class="text-xs text-muted mb-none">Max places</p>
                        </div>
                        <div class="col-md-4">
                            <div class="h4 text-bold mb-none mt-lg">All days</div>
                            <p class="text-xs text-muted mb-none">Working time</p>
                        </div>
                        <div class="col-md-4">
                            <div class="h4 text-bold mb-none mt-lg">23</div>
                            <p class="text-xs text-muted mb-none">Curently studying</p>
                        </div>
                    </div>                   
                    <div class="summary-footer">
                        <a class="text-uppercase">(info)</a>
                    </div>
                </div>
            </section>
        </div> 
        <div class="tab-content clearfix"></div>       
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
<style type="text/css">
    <style>
.datepicker{z-index:1151 !important;}
</style>

@stop