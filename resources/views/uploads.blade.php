@include('header')


<div class="container">
            
          @if(Session::has("message"))
          {{ Session::get("message") }}
        @endif

          <div class="row">
            <section>
              <div class="wizard">
                  <div class="wizard-inner">
                      <div class="connecting-line"></div>
                      <ul class="nav nav-tabs" role="tablist">
      
                          <li role="presentation" class="active">
                              <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                  <span class="round-tab">
                                      <i class="glyphicon glyphicon-folder-open"></i>
                                  </span>
                              </a>
                          </li>
      
                          <li role="presentation" class="disabled">
                              <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                  <span class="round-tab">
                                      <i class="glyphicon glyphicon-pencil"></i>
                                  </span>
                              </a>
                          </li>
                          <li role="presentation" class="disabled">
                              <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                  <span class="round-tab">
                                      <i class="glyphicon glyphicon-picture"></i>
                                  </span>
                              </a>
                          </li>
                          <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step4" role="tab" title="Step 3">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-save-file"></i>
                                </span>
                            </a>
                        </li>
      
                          <li role="presentation" class="disabled">
                              <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                  <span class="round-tab">
                                      <i class="glyphicon glyphicon-ok"></i>
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </div>
      
                  <form action="/upload/add" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="tab-content">
                          <div class="tab-pane active" role="tabpanel" id="step1">
                              <div class="step1">
                                  <div class="row">
                                      <div class="col-md-6">
                                        <label class="control-label col-sm-4" for="email">No. de Cotización: </label>
                                        <p class="form-control-static">Prodemex 001 swj</p>
                                      </div>
                                      <div class="col-md-6">
                                      </div>
                                  <div class="col-md-6">
                                      <label for="cliente">Cliente:</label>
                                      <input type="text" class="form-control" id="nameClient" placeholder="Nombre Cliente" name="nameClient">
                                  </div>
                                  <div class="col-md-6">
                                    <label for="exampleInputEmail1">Abreviación:</label>
                                    <input type="text" class="form-control" id="abreviation" placeholder="Abreviacion" name="abreviation">
                                </div>
                                <div class="col-md-6">
                                  <label for="exampleInputEmail1">Pago Anticipo: </label>
                                  <input type="text" class="form-control" id="anticipo" placeholder="Anticipo" name="anticipo">
                              </div>
                                  <div class="col-md-6">
                                      <label for="exampleInputEmail1">Direccion: </label>
                                      <input type="text" class="form-control" id="direction" placeholder="Direccion" name="direction">
                                  </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                      <label for="exampleInputEmail1">Email</label>
                                      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Telefono</label>
                                        <input type="text" class="form-control" id="tel" placeholder="Telefono" name="tel">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 col-xs-3">
                                        <label>Enviada por:</label>
                                    </div>
                                    
                                    <div class="col-md-8 col-xs-9">
                                        <select name="highest_qualification" id="highest_qualification" class="dropselectsec form-control">
                                            <option value="">Encargado </option>
                                            <option value="1">Swat Millan Baza</option>
                                            <option value="2">Victor Vargas Cruz </option>
                                            <option value="3">Teresa de Jesus Tolentino</option>
                                        </select>
                                    </div>
                                </div>

                              <div class="row"> 
                                 <div class="col-md-6">
                                    <label>Nombre del archivo</label>
                                    <input type="text" id="nomArchivo" name="nomArchivo">
                                </div>

                                <div class="col-md-6">
                                    <input type="file" name="file">
                                    <input type="submit" value="Guardar Archivo">
                                </div>
                              </div>

  
                              </div>
                              
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-primary next-step">Guardar y Continuar </button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step2">
                              <div class="step2">
                                  <div class="step_21">
                                      <div class="row">
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=" " id="defaultCheck1">
                                            <
                                              
                                            </div>
                                      </div>
                                  </div>
                                  <div class="step-22">
                                  
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="step3">
                              <div class="step33">
                              <h5><strong>Basic Details</strong></h5>
                              <hr>
                                  <div class="row mar_ned">
                                      
                                  </div>
                                  <div class="row mar_ned">
                                      <div class="col-md-4 col-xs-3">
                                          <p align="right"><stong>Date of birth</stong></p>
                                      </div>
                                      <div class="col-md-8 col-xs-9">
                                          <div class="row">
                                              <div class="col-md-4 col-xs-4 wdth">
                                                  <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                      <option value="">Date</option>
                                                      <option value="2">1</option>
                                                      <option value="1">2</option>
                                                      <option value="4">3</option>
                                                      <option value="5">4</option>
                                                      <option value="6">5</option>
                                                      <option value="3">6</option>
                                                      <option value="7">7</option>
                                                      <option value="8">8</option>
                                                      <option value="9">9</option>
                                                  </select>
                                              </div>
                                              <div class="col-md-4 col-xs-4 wdth">
                                                  <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                      <option value="">Month</option>
                                                      <option value="2">Jan</option>
                                                      <option value="1">Feb</option>
                                                      <option value="4">Mar</option>
                                                      <option value="5">Apr</option>
                                                      <option value="6">May</option>
                                                      <option value="3">June</option>
                                                      <option value="7">July</option>
                                                      <option value="8">Aug</option>
                                                      <option value="9">Sept</option>
                                                  </select>
                                              </div>
                                              <div class="col-md-4 col-xs-4 wdth">
                                                    <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                      <option value="">Year</option>
                                                      <option value="2">1990</option>
                                                      <option value="1">1991</option>
                                                      <option value="4">1992</option>
                                                    </select>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row mar_ned">
                                      <div class="col-md-4 col-xs-3">
                                          <p align="right"><stong>Marital Status</stong></p>
                                      </div>
                                      <div class="col-md-8 col-xs-9">
                                          <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Single
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Married
                                          </label>
                                      </div>
                                  </div>
                                  <div class="row mar_ned">
                                      <div class="col-md-4 col-xs-3">
                                          <p align="right"><stong>Highest Education</stong></p>
                                      </div>
                                      <div class="col-md-8 col-xs-9">
                                          <select name="highest_qualification" id="highest_qualification" class="dropselectsec">
                                              <option value=""> Select Highest Education</option>
                                              <option value="1">Ph.D</option>
                                              <option value="2">Masters Degree</option>
                                              <option value="3">PG Diploma</option>
                                              <option value="4">Bachelors Degree</option>
                                              <option value="5">Diploma</option>
                                              <option value="6">Intermediate / (10+2)</option>
                                              <option value="7">Secondary</option>
                                              <option value="8">Others</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="row mar_ned">
                                      <div class="col-md-4 col-xs-3">
                                          <p align="right"><stong>Specialization</stong></p>
                                      </div>
                                      <div class="col-md-8 col-xs-9">
                                          <input type="text" name="specialization" id="specialization" placeholder="Specialization" class="dropselectsec" autocomplete="off">
                                      </div>
                                  </div>
                                  <div class="row mar_ned">
                                      <div class="col-md-4 col-xs-3">
                                          <p align="right"><stong>Year of Passed Out</stong></p>
                                      </div>
                                      <div class="col-md-8 col-xs-9">
                                          <select name="year_of_passedout" id="year_of_passedout" class="birthdrop">
                                              <option value="">Year</option>
                                              <option value="1980">1980</option>
                                              <option value="1981">1981</option>
                                              <option value="1982">1982</option>
                                              <option value="1983">1983</option>
                                              <option value="1984">1984</option>
                                              <option value="1985">1985</option>
                                              <option value="1986">1986</option>
                                              <option value="1987">1987</option>
                                              <option value="1988">1988</option>
                                              <option value="1989">1989</option>
                                              <option value="1990">1990</option>
                                              <option value="1991">1991</option>
                                              <option value="1992">1992</option>
                                              <option value="1993">1993</option>
                                              <option value="1994">1994</option>
                                              <option value="1995">1995</option>
                                              <option value="1996">1996</option>
                                              <option value="1997">1997</option>
                                              <option value="1998">1998</option>
                                              <option value="1999">1999</option>
                                              <option value="2000">2000</option>
                                              <option value="2001">2001</option>
                                              <option value="2002">2002</option>
                                              <option value="2003">2003</option>
                                              <option value="2004">2004</option>
                                              <option value="2005">2005</option>
                                              <option value="2006">2006</option>
                                              <option value="2007">2007</option>
                                              <option value="2008">2008</option>
                                              <option value="2009">2009</option>
                                              <option value="2010">2010</option>
                                              <option value="2011">2011</option>
                                              <option value="2012">2012</option>
                                              <option value="2013">2013</option>
                                              <option value="2014">2014</option>
                                              <option value="2015">2015</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="row mar_ned">
                                      <div class="col-md-4 col-xs-3">
                                          <p align="right"><stong>Total Experience</stong></p>
                                      </div>
                                      <div class="col-md-8 col-xs-9">
                                          <div class="row">
                                              <div class="col-md-6 col-xs-6 wdth">
                                                  <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                      <option value="">Month</option>
                                                      <option value="2">Jan</option>
                                                      <option value="1">Feb</option>
                                                      <option value="4">Mar</option>
                                                      <option value="5">Apr</option>
                                                      <option value="6">May</option>
                                                      <option value="3">June</option>
                                                      <option value="7">July</option>
                                                      <option value="8">Aug</option>
                                                      <option value="9">Sept</option>
                                                  </select>
                                              </div>
                                              <div class="col-md-6 col-xs-6 wdth">
                                                  
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row mar_ned">
                                     
                                  </div>
                              </div>
                              <ul class="list-inline pull-right">
                                  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                  <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                  <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                              </ul>
                          </div>
                          <div class="tab-pane" role="tabpanel" id="complete">
                              <div class="step44">
                                  <h5>Completed</h5>
                                  
                                
                              </div>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
          </section>
         </div>
               
         <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">25%</div>
      </div>
    @include('footer')
    @yield('javascript')
