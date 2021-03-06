@section('content')
<div class="page-content">
	<h3 class="page-title">
		Client <small>management</small>
	</h3>
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="{{URL::to('admin')}}">Home</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="{{URL::to('admin/client')}}">Client</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				Edit
			</li>
		</ul>
	</div>

	<div class="row">
	<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-group"></i>Client Management
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							{{ Form::model($client, array('method' => 'PUT', 'route'=> array('admin.client.update', $client->id), 'class'=>'form-horizontal')) }} 
								<div class="form-body">

									<h3 class="form-section">Client<small>informations</small></h3>
									
									@if ($errors->has('name') || $errors->has('email')) 
									<div class="alert alert-danger">
										You have some form errors. Please check below.
									</div>
									 @endif

									<div class="form-group @if ($errors->has('name'))has-error @endif">
										<label class="control-label col-md-3">Company Name <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="name" placeholder="Name" class="form-control" value="{{ $client->name }}" />
											@foreach($errors->get('name') as $error)
									            	<span class="help-inline"> {{ $error }}</span>
									        @endforeach
										</div>
									</div>

									<div class="form-group @if ($errors->has('office'))has-error @endif">
										<label class="control-label col-md-3">Office No.<span class="required">
										* </span></label>
										<div class="col-md-4">
											<input type="text" name="office" placeholder="No." class="form-control" value="{{ $client->office }}" />
											@foreach($errors->get('office') as $error)
									            	<span class="help-inline"> {{ $error }}</span>
									        @endforeach
										</div>
									</div>

									<div class="form-group @if ($errors->has('salutation'))has-error @endif">
										<label class="control-label col-md-3">Salutation <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select name="salutation" class="form-control select2">
										                    <option value="">Choose Salutation</option>
										                    <option {{ ($client->salutation == 'dr')?'selected':'' }} value="dr">Dr</option>
										                    <option {{ ($client->salutation == 'm/s')?'selected':'' }} value="m/s">M/S</option>
										                    <option {{ ($client->salutation == 'mdm')?'selected':'' }} value="mdm">Mdm</option>
										                    <option {{ ($client->salutation == 'miss')?'selected':'' }} value="miss">Miss</option>
										                    <option {{ ($client->salutation == 'mr')?'selected':'' }} value="mr">Mr</option>
										                    <option {{ ($client->salutation == 'mrs')?'selected':'' }} value="mrs">Mrs</option>
										                    <option {{ ($client->salutation == 'ms')?'selected':'' }} value="ms">Ms</option>              
										           </select>
											@foreach($errors->get('salutation') as $error)
									            	<span class="help-inline"> {{ $error }}</span>
									        @endforeach
										</div>
									</div>

									<div class="form-group @if ($errors->has('contact'))has-error @endif">
										<label class="control-label col-md-3">Contact Person<span class="required">
										* </span></label>
										<div class="col-md-4">
											<input type="text" name="contact" placeholder="Name" class="form-control" value="{{ $client->contact }}" />
											@foreach($errors->get('contact') as $error)
									            	<span class="help-inline"> {{ $error }}</span>
									        @endforeach
										</div>
									</div>

									<div class="form-group @if ($errors->has('email'))has-error @endif">
										<label class="control-label col-md-3">Email <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="email" placeholder="Email" class="form-control" value="{{ $client->email }}" />
											@foreach($errors->get('email') as $error)
									            	<span class="help-inline"> {{ $error }}</span>
									        @endforeach
										</div>
									</div>
									

									<div class="form-group @if ($errors->has('mobile'))has-error @endif">
											<label class="control-label col-md-3">Mobile <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="text" name="mobile" placeholder="Mobile" class="form-control" value="{{ $client->mobile }}" />
												@foreach($errors->get('mobile') as $error)
										            	<span class="help-inline"> {{ $error }}</span>
										        @endforeach
											</div>
									</div>

									<div class="form-group @if ($errors->has('country'))has-error @endif">
										<label class="control-label col-md-3">Country <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select name="country" class="form-control select2">
										                      <option value="">Choose Country</option>
										                      <option value="Afghanistan">Afghanistan</option>
										                      <option value="Albania">Albania</option>
										                      <option value="Algeria">Algeria</option>
										                      <option value="American Samoa">American Samoa</option>
										                      <option value="Andorra">Andorra</option>
										                      <option value="Angola">Angola</option>
										                      <option value="Anguilla">Anguilla</option>
										                      <option value="Antarctica">Antarctica</option>
										                      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
										                      <option value="Argentina">Argentina</option>
										                      <option value="Armenia">Armenia</option>
										                      <option value="Aruba">Aruba</option>
										                      <option value="Australia">Australia</option>
										                      <option value="Austria">Austria</option>
										                      <option value="Azerbaijan">Azerbaijan</option>
										                      <option value="Bahrain">Bahrain</option>
										                      <option value="Bangladesh">Bangladesh</option>
										                      <option value="Barbados">Barbados</option>
										                      <option value="Belarus">Belarus</option>
										                      <option value="Belgium">Belgium</option>
										                      <option value="Belize">Belize</option>
										                      <option value="Benin">Benin</option>
										                      <option value="Bermuda">Bermuda</option>
										                      <option value="Bhutan">Bhutan</option>
										                      <option value="Bolivia">Bolivia</option>
										                      <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										                      <option value="Botswana">Botswana</option>
										                      <option value="Bouvet Island">Bouvet Island</option>
										                      <option value="Brazil">Brazil</option>
										                      <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
										                      <option value="British Virgin Islands">British Virgin Islands</option>
										                      <option value="Brunei">Brunei</option>
										                      <option value="Bulgaria">Bulgaria</option>
										                      <option value="Burkina Faso">Burkina Faso</option>
										                      <option value="Burundi">Burundi</option>
										                      <option value="Côte d'Ivoire">Côte d'Ivoire</option>
										                      <option value="Cambodia">Cambodia</option>
										                      <option value="Cameroon">Cameroon</option>
										                      <option value="Canada">Canada</option>
										                      <option value="Cape Verde">Cape Verde</option>
										                      <option value="Cayman Islands">Cayman Islands</option>
										                      <option value="Central African Republic">Central African Republic</option>
										                      <option value="Chad">Chad</option>
										                      <option value="Chile">Chile</option>
										                      <option value="China">China</option>
										                      <option value="Christmas Island">Christmas Island</option>
										                      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
										                      <option value="Colombia">Colombia</option>
										                      <option value="Comoros">Comoros</option>
										                      <option value="Congo">Congo</option>
										                      <option value="Cook Islands">Cook Islands</option>
										                      <option value="Costa Rica">Costa Rica</option>
										                      <option value="Croatia">Croatia</option>
										                      <option value="Cuba">Cuba</option>
										                      <option value="Cyprus">Cyprus</option>
										                      <option value="Czech Republic">Czech Republic</option>
										                      <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
										                      <option value="Denmark">Denmark</option>
										                      <option value="Djibouti">Djibouti</option>
										                      <option value="Dominica">Dominica</option>
										                      <option value="Dominican Republic">Dominican Republic</option>
										                      <option value="East Timor">East Timor</option>
										                      <option value="Ecuador">Ecuador</option>
										                      <option value="Egypt">Egypt</option>
										                      <option value="El Salvador">El Salvador</option>
										                      <option value="Equatorial Guinea">Equatorial Guinea</option>
										                      <option value="Eritrea">Eritrea</option>
										                      <option value="Estonia">Estonia</option>
										                      <option value="Ethiopia">Ethiopia</option>
										                      <option value="Faeroe Islands">Faeroe Islands</option>
										                      <option value="Falkland Islands">Falkland Islands</option>
										                      <option value="Fiji">Fiji</option>
										                      <option value="Finland">Finland</option>
										                      <option value="Former Yugoslav Republic of Macedonia">Former Yugoslav Republic of Macedonia</option>
										                      <option value="France">France</option>
										                      <option value="France, Metropolitan">France, Metropolitan</option>
										                      <option value="French Guiana">French Guiana</option>
										                      <option value="French Polynesia">French Polynesia</option>
										                      <option value="French Southern Territories">French Southern Territories</option>
										                      <option value="Gabon">Gabon</option>
										                      <option value="Georgia">Georgia</option>
										                      <option value="Germany">Germany</option>
										                      <option value="Ghana">Ghana</option>
										                      <option value="Gibraltar">Gibraltar</option>
										                      <option value="Greece">Greece</option>
										                      <option value="Greenland">Greenland</option>
										                      <option value="Grenada">Grenada</option>
										                      <option value="Guadeloupe">Guadeloupe</option>
										                      <option value="Guam">Guam</option>
										                      <option value="Guatemala">Guatemala</option>
										                      <option value="Guinea">Guinea</option>
										                      <option value="Guinea-Bissau">Guinea-Bissau</option>
										                      <option value="Guyana">Guyana</option>
										                      <option value="Haiti">Haiti</option>
										                      <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
										                      <option value="Honduras">Honduras</option>
										                      <option value="Hong Kong">Hong Kong</option>
										                      <option value="Hungary">Hungary</option>
										                      <option value="Iceland">Iceland</option>
										                      <option value="India">India</option>
										                      <option value="Indonesia">Indonesia</option>
										                      <option value="Iran">Iran</option>
										                      <option value="Iraq">Iraq</option>
										                      <option value="Ireland">Ireland</option>
										                      <option value="Israel">Israel</option>
										                      <option value="Italy">Italy</option>
										                      <option value="Jamaica">Jamaica</option>
										                      <option value="Japan">Japan</option>
										                      <option value="Jordan">Jordan</option>
										                      <option value="Kazakhstan">Kazakhstan</option>
										                      <option value="Kenya">Kenya</option>
										                      <option value="Kiribati">Kiribati</option>
										                      <option value="Kuwait">Kuwait</option>
										                      <option value="Kyrgyzstan">Kyrgyzstan</option>
										                      <option value="Laos">Laos</option>
										                      <option value="Latvia">Latvia</option>
										                      <option value="Lebanon">Lebanon</option>
										                      <option value="Lesotho">Lesotho</option>
										                      <option value="Liberia">Liberia</option>
										                      <option value="Libya">Libya</option>
										                      <option value="Liechtenstein">Liechtenstein</option>
										                      <option value="Lithuania">Lithuania</option>
										                      <option value="Luxembourg">Luxembourg</option>
										                      <option value="Macau">Macau</option>
										                      <option value="Madagascar">Madagascar</option>
										                      <option value="Malawi">Malawi</option>
										                      <option value="Malaysia">Malaysia</option>
										                      <option value="Maldives">Maldives</option>
										                      <option value="Mali">Mali</option>
										                      <option value="Malta">Malta</option>
										                      <option value="Marshall Islands">Marshall Islands</option>
										                      <option value="Martinique">Martinique</option>
										                      <option value="Mauritania">Mauritania</option>
										                      <option value="Mauritius">Mauritius</option>
										                      <option value="Mayotte">Mayotte</option>
										                      <option value="Mexico">Mexico</option>
										                      <option value="Micronesia">Micronesia</option>
										                      <option value="Moldova">Moldova</option>
										                      <option value="Monaco">Monaco</option>
										                      <option value="Mongolia">Mongolia</option>
										                      <option value="Montenegro">Montenegro</option>
										                      <option value="Montserrat">Montserrat</option>
										                      <option value="Morocco">Morocco</option>
										                      <option value="Mozambique">Mozambique</option>
										                      <option value="Myanmar">Myanmar</option>
										                      <option value="Namibia">Namibia</option>
										                      <option value="Nauru">Nauru</option>
										                      <option value="Nepal">Nepal</option>
										                      <option value="Netherlands">Netherlands</option>
										                      <option value="Netherlands Antilles">Netherlands Antilles</option>
										                      <option value="New Caledonia">New Caledonia</option>
										                      <option value="New Zealand">New Zealand</option>
										                      <option value="Nicaragua">Nicaragua</option>
										                      <option value="Niger">Niger</option>
										                      <option value="Nigeria">Nigeria</option>
										                      <option value="Niue">Niue</option>
										                      <option value="Norfolk Island">Norfolk Island</option>
										                      <option value="North Korea">North Korea</option>
										                      <option value="Northern Marianas">Northern Marianas</option>
										                      <option value="Norway">Norway</option>
										                      <option value="Oman">Oman</option>
										                      <option value="Pakistan">Pakistan</option>
										                      <option value="Palau">Palau</option>
										                      <option value="Palestine">Palestine</option>
										                      <option value="Panama">Panama</option>
										                      <option value="Papua New Guinea">Papua New Guinea</option>
										                      <option value="Paraguay">Paraguay</option>
										                      <option value="Peru">Peru</option>
										                      <option value="Philippines">Philippines</option>
										                      <option value="Pitcairn Islands">Pitcairn Islands</option>
										                      <option value="Poland">Poland</option>
										                      <option value="Portugal">Portugal</option>
										                      <option value="Puerto Rico">Puerto Rico</option>
										                      <option value="Qatar">Qatar</option>
										                      <option value="Reunion">Reunion</option>
										                      <option value="Romania">Romania</option>
										                      <option value="Russia">Russia</option>
										                      <option value="Rwanda">Rwanda</option>
										                      <option value="São Tomé and Príncipe">São Tomé and Príncipe</option>
										                      <option value="Saint Helena">Saint Helena</option>
										                      <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
										                      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
										                      <option value="Saint Lucia">Saint Lucia</option>
										                      <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
										                      <option value="Samoa">Samoa</option>
										                      <option value="San Marino">San Marino</option>
										                      <option value="Saudi Arabia">Saudi Arabia</option>
										                      <option value="Senegal">Senegal</option>
										                      <option value="Serbia">Serbia</option>
										                      <option value="Seychelles">Seychelles</option>
										                      <option value="Sierra Leone">Sierra Leone</option>
										                      <option value="Singapore" selected>Singapore</option>
										                      <option value="Slovakia">Slovakia</option>
										                      <option value="Slovenia">Slovenia</option>
										                      <option value="Solomon Islands">Solomon Islands</option>
										                      <option value="Somalia">Somalia</option>
										                      <option value="South Africa">South Africa</option>
										                      <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
										                      <option value="South Korea">South Korea</option>
										                      <option value="Spain">Spain</option>
										                      <option value="Sri Lanka">Sri Lanka</option>
										                      <option value="Sudan">Sudan</option>
										                      <option value="Suriname">Suriname</option>
										                      <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
										                      <option value="Swaziland">Swaziland</option>
										                      <option value="Sweden">Sweden</option>
										                      <option value="Switzerland">Switzerland</option>
										                      <option value="Syria">Syria</option>
										                      <option value="Taiwan">Taiwan</option>
										                      <option value="Tajikistan">Tajikistan</option>
										                      <option value="Tanzania">Tanzania</option>
										                      <option value="Thailand">Thailand</option>
										                      <option value="The Bahamas">The Bahamas</option>
										                      <option value="The Gambia">The Gambia</option>
										                      <option value="Togo">Togo</option>
										                      <option value="Tokelau">Tokelau</option>
										                      <option value="Tonga">Tonga</option>
										                      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
										                      <option value="Tunisia">Tunisia</option>
										                      <option value="Turkey">Turkey</option>
										                      <option value="Turkmenistan">Turkmenistan</option>
										                      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
										                      <option value="Tuvalu">Tuvalu</option>
										                      <option value="US Virgin Islands">US Virgin Islands</option>
										                      <option value="Uganda">Uganda</option>
										                      <option value="Ukraine">Ukraine</option>
										                      <option value="United Arab Emirates">United Arab Emirates</option>
										                      <option value="United Kingdom">United Kingdom</option>
										                      <option value="United States">United States</option>
										                      <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
										                      <option value="Uruguay">Uruguay</option>
										                      <option value="Uzbekistan">Uzbekistan</option>
										                      <option value="Vanuatu">Vanuatu</option>
										                      <option value="Vatican City">Vatican City</option>
										                      <option value="Venezuela">Venezuela</option>
										                      <option value="Vietnam">Vietnam</option>
										                      <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
										                      <option value="Western Sahara">Western Sahara</option>
										                      <option value="Yemen">Yemen</option>
										                      <option value="Zambia">Zambia</option>
										                      <option value="Zimbabwe">Zimbabwe</option>
										                    </select>                  
											@foreach($errors->get('country') as $error)
									            	<span class="help-inline"> {{ $error }}</span>
									        		@endforeach
										</div>
									</div>

									<div class="form-group @if ($errors->has('address')) has-error @endif">
										<label class="control-label col-md-3">Address <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<textarea name="address" class="form-control">{{ $client->address }}</textarea>
											@foreach($errors->get('address') as $error)
									            	<span class="help-inline"> {{ $error }}</span>
									        @endforeach
										</div>
									</div>

									<div class="form-group @if ($errors->has('join_date'))has-error @endif">
										<label class="control-label col-md-3">Register Date <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="join_date" placeholder="Date" class="form-control datepicker" value="{{ ($client->join_date)?date('d-m-Y',$client->join_date):date('d-m-Y') }}" />
											@foreach($errors->get('join_date') as $error)
									            	<span class="help-inline"> {{ $error }}</span>
									        @endforeach
										</div>
									</div>

									<div class="form-group @if ($errors->has('fax'))has-error @endif">
										<label class="control-label col-md-3">FAX </label>
										<div class="col-md-4">
											<input type="text" name="fax" placeholder="No." class="form-control" value="{{ $client->fax }}" />
											@foreach($errors->get('fax') as $error)
									            	<span class="help-inline"> {{ $error }}</span>
									        @endforeach
										</div>
									</div>

									<div class="form-group @if ($errors->has('website'))has-error @endif">
										<label class="control-label col-md-3">Website </label>
										<div class="col-md-4">
											<input type="text" name="website" placeholder="Link" class="form-control" value="{{ $client->website }}" />
											@foreach($errors->get('website') as $error)
									            	<span class="help-inline"> {{ $error }}</span>
									        @endforeach
										</div>
									</div>


							   </div>
								
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn red"><i class="fa fa-check"></i> Save</button>
											<button type="button" class="btn default" id="back">Cancel</button>
										</div>
									</div>
								</div>		
								
											
							{{Form::close()}}
							<!-- END FORM-->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
</div>
@stop