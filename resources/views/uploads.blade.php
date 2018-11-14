@include('header')


<div class="container">
            
        @if(Session::has("message"))
            {{ Session::get("message") }}
        @endif
        
        <div class="row">
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">
    
                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1" id="step1Boton">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-folder-open"></i>
                                </span>
                            </a>
                        </li>
    
                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2" id="step2Boton">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3" id="step3Boton">
                                <span class="round-tab">
                                    <i class="glyphicon glyphicon-picture"></i>
                                </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4" id="step4Boton">
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
                        
            </div>
        </div>

        <div class="tab-content">
            @include('steps.one')  
            @include('steps.two')  
            @include('steps.three')  
        </div>
</div>
               
<div class="progress">
    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="barProgress">0%</div>
</div>

@include('footer')

<script type="text/javascript" src="{{URL::asset('js/app/client.js')}}"></script>
@yield('javascript')
