<div class="row my-2">
    <div class="stepwizard" row='1'>
        <div class="stepwizard-row setup-panel">

            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle" disabled="disabled">1</a>
                <p>Physical Health-Fall Screening</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">2</a>
                <p>Depression PHQ-9</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">3</a>
                <p>High Stress</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">4</a>
                <p>General Health</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">5</a>
                <p>Social/Emotional Support </p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-6" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">6</a>
                <p>Pain</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-7" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">7</a>
                <p>Cognitive Assesment</p>
            </div>
        </div>
    </div>

    <div class="stepwizard" row='2'>
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-8" type="button" class="btn btn-default bg-secondary btn-circle">8</a>
                <p>Physical Activity</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-9" type="button" class="btn bg-secondary btn-circle" disabled="disabled">9</a>
                <p>Alcohol Use</p>
            </div>
            
            <div class="stepwizard-step tobaccouse">
                <a href="#step-10" type="button" class="btn bg-secondary btn-circle" disabled="disabled">10</a>
                <p>Tobacco Use</p>
            </div>
            
            <div class="stepwizard-step d-none ldctcounseling">
                <a href="#step-11" type="button" class="btn bg-secondary btn-circle" disabled="disabled">11</a>
                <p>LDCT Counseling</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-12" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">11</a>
                <p>Nutrition</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-13" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">12</a>
                <p>Seat Belt Use</p>
            </div>
        </div>
    </div>

    <div class="stepwizard" row='3'>
        <div class="stepwizard-row setup-panel">
            
            <div class="stepwizard-step">
                <a href="#step-14" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">13</a>
                <p>Immunization</p>
            </div>
            
            <div class="stepwizard-step">
                <a href="#step-15" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">14</a>
                <p>Screening</p>
            </div>
            
            <div class="stepwizard-step">
                <a href="#step-16" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">15</a>
                <p>Diabetes</p>
            </div>
            
            <div class="stepwizard-step">
                <a href="#step-17" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">16</a>
                <p>Cholesterol</p>
            </div>
            
            <div class="stepwizard-step">
                <a href="#step-18" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">17</a>
                <p>BP Assessment</p>
            </div>
            
            <div class="stepwizard-step">
                <a href="#step-19" type="button" class="btn btn-default bg-secondary btn-circle" disabled="disabled">18</a>
                <p>Weight Assessment</p>
            </div>
        </div>
    </div>
</div>

<div class="row my-2">
    <div class="col-12">

        {{-- PHYSICAL HEALTH-FALL SCREENING START --}}
        <div class="row setup-content" id="step-1">
            <h3> Physical Health - Fall Screening</h3>
            <div class="form-group mb-3">
                <label class="control-label">
                    Have you fallen in the past 1 year?
                </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input" name="fall_screening[fall_in_one_year]" type="radio" value="{{$val}}" onclick="fallScreening(this)">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>

            <div class="agree_to_fall d-none">
                <div class="form-group mb-3">
                    <label class="control-label">
                        Number of times you fell in last 1 year
                    </label>
                    @foreach(Config('constants.fall_screening') as $key => $val)
                        <div class="form-group form-check">
                            <input class="form-check-input tab6" name="fall_screening[number_of_falls]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
                
                <div class="form-group mb-3">
                    <label class="control-label">
                        Was their any injury?
                    </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check">
                            <input class="form-check-input tab6" name="fall_screening[injury]" type="radio" value="{{$val}}">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
                
                <div class="form-group mb-3">
                    <label class="control-label">
                        Physical Therapy
                    </label>
                    @foreach(Config('constants.physical_therapy') as $key => $val)
                        <div class="form-group form-check">
                            <input class="form-check-input tab6" name="fall_screening[physical_therapy]" type="radio" value="{{$val}}">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="form-group mb-3">
                <label class="control-label">
                    Do you feel unsteady or do thing move when standing or Walking ?
                </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="fall_screening[unsteady_todo_things]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    Do you feel like “blacking out” when getting up from bed or chair?
                </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="fall_screening[blackingout_from_bed]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    Do you use any assistance device?
                </label>
                @foreach(Config('constants.assistance_device') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="fall_screening[assistance_device]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>

            
            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary nextBtn mx-2 pull-right" type="button" >Next</button>
                </div>
            </div>
        </div>
        {{-- PHYSICAL HEALTH-FALL SCREENING END --}}

        {{-- DEPRESSION PHQ-9 START --}}
        <div class="row setup-content" id="step-2">
            <h3> Depression PHQ-9</h3>
            <ul class="list-group">
                <li class="list-group-item border-0 fw-bold lh-lg">In the past two weeks.</li>
            </ul>
            <div class="form-group mb-3">
                <label class="control-label">
                    How often have you felt down, depressed, or hopeless?
                </label>
                @foreach(Config('constants.depression_phq_9') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="depression_phq9[feltdown_depressed_hopeless]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$key}} </label>
                    </div>
                @endforeach
            </div>
            <div class="form-group mb-3">
                <label class="control-label">
                    How often have you felt little interest or pleasure in doing things?
                </label>
                @foreach(Config('constants.depression_phq_9') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="depression_phq9[little_interest_pleasure]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$key}} </label>
                    </div>
                @endforeach
            </div>
            <div class="form-group mb-3">
                <label class="control-label">
                    Trouble falling or staying asleep, or sleeping too much
                </label>
                @foreach(Config('constants.depression_phq_9') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="depression_phq9[trouble_sleep]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$key}} </label>
                    </div>
                @endforeach
            </div>
            <div class="form-group mb-3">
                <label class="control-label">
                    Feeling tired or having little energy
                </label>
                @foreach(Config('constants.depression_phq_9') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="depression_phq9[tired_little_energy]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$key}} </label>
                    </div>
                @endforeach
            </div>
            <div class="form-group mb-3">
                <label class="control-label">
                    Poor appetite or overeating
                </label>
                @foreach(Config('constants.depression_phq_9') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="depression_phq9[poor_over_appetite]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$key}} </label>
                    </div>
                @endforeach
            </div>
            <div class="form-group mb-3">
                <label class="control-label">
                    Feeling bad about yourself or that you are a failure or have let yourself or your family down
                </label>
                @foreach(Config('constants.depression_phq_9') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="depression_phq9[feeling_bad_failure]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$key}} </label>
                    </div>
                @endforeach
            </div>
            <div class="form-group mb-3">
                <label class="control-label">
                    Trouble concentrating on things, such as reading the newspaper or watching television
                </label>
                @foreach(Config('constants.depression_phq_9') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="depression_phq9[trouble_concentrating]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$key}} </label>
                    </div>
                @endforeach
            </div>
            <div class="form-group mb-3">
                <label class="control-label">
                    Moving or speaking so slowly that other people could have noticed? Or the opposite - being so fidgety or restless that you have been moving around a lot more than usual?
                </label>
                @foreach(Config('constants.depression_phq_9') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="depression_phq9[slow_fidgety]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$key}} </label>
                    </div>
                @endforeach
            </div>
            <div class="form-group mb-3">
                <label class="control-label">
                    Thoughts that you would be better off dead, or of hurting yourself in some way?
                </label>
                @foreach(Config('constants.depression_phq_9') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="depression_phq9[suicidal_thoughts]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$key}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    If you checked off any problems, how difficult have these problems made it for you to do your work, take care of things at home, or get along with other people?
                </label>
                @foreach(Config('constants.problem_difficulty') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="depression_phq9[problem_difficulty]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                    <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- DEPRESSION PHQ-9 END --}}

        {{-- HIGH STRESS START --}}
        <div class="row setup-content" id="step-3">
            <h3> High Stress</h3>
            <div class="form-group mb-3">
                <label class="control-label">
                    How often is stress a problem for you in handling such things as:
                </label>
                <ul class="list-unstyled">
                    <li>
                        <ul>
                            <li class="">Your health?</li>
                            <li class="">Your finances?</li>
                            <li class="">Your family or social relationships?</li>
                            <li class="">Your Work?</li>
                        </ul>
                    </li>
                </ul>
                @foreach(Config('constants.high_stress') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="high_stress[stress_problem]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                    <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- HIGH STRESS END --}}
        
        {{-- GENERAL HEALTH START --}}
        <div class="row setup-content" id="step-4">
            <h3> Genereal Health</h3>
            <div class="form-group mb-3">
                <label class="control-label">
                    In general, would you say your health is?
                </label>
                @foreach(Config('constants.general_health') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="general_health[health_level]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    How would you describe the condition of your mouth and teeth—including false teeth or dentures?
                </label>
                @foreach(Config('constants.general_health') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="general_health[mouth_and_teeth]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>

            <div class="form-group mb-3">
                <label class="control-label">
                    Have your feelings caused you distress or interfered with your ability to get along socially with family or friends?
                </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="general_health[feeling_caused_distress]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                    <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- GENERAL HEALTH END --}}
        
        {{-- SOCIAL/EMOTIONAL START --}}
        <div class="row setup-content" id="step-5">
            <h3> Social/Emotional Support</h3>
            <div class="form-group mb-3">
                <label class="control-label">
                    How often do you get the social and emotional support you need?
                </label>
                @foreach(Config('constants.social_emotional_support') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="social_emotional_support[get_social_emotional_support]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                    <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- SOCIAL/EMOTIONAL END --}}
        
        {{-- PAIN START --}}
        <div class="row setup-content" id="step-6">
            <h3> Pain</h3>
            <div class="form-group mb-3">
                <label class="control-label">
                    In the past 7 days, how much pain have you felt?
                </label>
                @foreach(Config('constants.pain') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="pain[pain_felt]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                    <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- PAIN END --}}

        {{-- COGNITIVE ASSESSMENT START --}}
        <div class="row setup-content" id="step-7">
            <h3> Cognitive Assessment</h3>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    What year is it? 
                </label>
                @foreach(Config('constants.error_options_a') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="cognitive_assessment[year_recalled]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    What month is it?
                </label>
                @foreach(Config('constants.error_options_a') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="cognitive_assessment[month_recalled]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    Give the patient an address phrase to remember with 5 components, <b>eg John, Smith, 42, High St, Bedford</b> 
                </label>
            </div>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    About what time is it (within 1 hour) ?
                </label>
                @foreach(Config('constants.error_options_a') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="cognitive_assessment[hour_recalled]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    Count backwards from 20-1.
                </label>
                @foreach(Config('constants.error_options_b') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="cognitive_assessment[reverse_count]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    Say the months of the year in reverse.
                </label>
                @foreach(Config('constants.error_options_b') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input" name="cognitive_assessment[reverse_month]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    Repeat address phrase <b>John, Smith, 42, High St, Bedford</b>
                </label>
                @foreach(Config('constants.error_options_c') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input " name="cognitive_assessment[address_recalled]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>

            
            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                    <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- COGNITIVE ASSESSMENT END --}}
        
        {{-- PHYSICAL ACTIVITIES START --}}
        <div class="setup-content" id="step-8" tabno="1">
            <h4> Physical Activity</h4>
            <div class="form-group mb-3">
                <label class="control-label">In the past 7 days, how many days did you exercise?</label>
                <input type="number" min="0" name="physical_activities[days_of_exercise]"  class="form-control tab1" placeholder="Days"
                onkeyup="hidePhysicalSection(this)"
                />
            </div>

            <div class="physicalActivitySection">
                <div class="form-group mb-3">
                    <label class="control-label">On days when you exercised, for how long did you exercise (in minutes)?</label>
                    <input type="number" min="0" name="physical_activities[mins_of_exercise]"  class="form-control tab1" placeholder="Minutes per day"  />
                </div>

                <div class="form-group mb-3">
                    <label class="control-label mb-2">
                        How intense was your typical exercise?
                    </label>
                    @foreach(Config('constants.physical_intense') as $key => $val)
                        <div class="form-group form-check" style="padding-left: 5em;">
                            <input class="form-check-input tab1" type="radio" name="physical_activities[exercise_intensity]" value="{{$key}}">
                            <label class="form-check-label">
                                {{$val}}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group mb-3">
                    <input class="form-check-input tab1" type="checkbox" value="0" name="physical_activities[does_not_apply]" id="flexCheckDefault" onChange="exerciseTypeForm(this)">
                    
                    <label class="form-check-label"> Does not apply</label>
                </div>
            </div>

            <button class="btn btn-primary prevBtn" type="button">Previous</button>
            <button class="btn btn-primary nextBtn btn-md" type="button" > Next </button>
        </div>
        {{-- PHYSICAL ACTIVITIES END --}}

        {{-- ALCOHOL USE START --}}
        <div class="row setup-content" id="step-9">
            <h3> Alcohol Use</h3>
            <div class="form-group mb-3">
                <label class="control-label">
                    In the past 7 days,on how many days did you drink alcohol?
                </label>
                <input maxlength="100" type="number" min="0"  name="alcohol_use[days_of_alcoholuse]" class="form-control tab3" placeholder="Days of Alcohol usage" 
                onkeyup="hideAlcoholSection(this)"
                />
            </div>

            <div class="alcoholSection">
                <div class="form-group mb-3">
                    <label class="control-label">How many drinks per day?</label>
                    <input maxlength="100" type="number" min="0"  name="alcohol_use[drinks_per_day]" class="form-control tab3" placeholder="Drinks per day" />
                </div>

                <div class="form-group mb-3">
                    <label class="control-label">On days when you drank alcohol, how often did you have alcoholic drinks on one occasion?</label>
                    <input maxlength="100" type="number" min="0"  name="alcohol_use[drinks_per_occasion]" class="form-control tab3" placeholder="Drinks per occasion" />
                </div>

                <div class="form-group mb-3">
                    <label class="control-label mb-2">
                        How many sittings occasions per week you take?
                    </label>
                    @foreach(Config('constants.alcohol_average_use') as $key => $val)
                        <div class="form-group form-check pl-3">
                            <input class="form-check-input" type="radio" name="alcohol_use[average_usage]" value="{{$key}}" >
                            <label class="form-check-label">
                                {{$val}}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group mb-3">
                    <label class="control-label">Do you ever drive after drinking, or ride with a driver who has been drinking?</label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check-inline">
                        <input class="form-check-input " name="alcohol_use[drink_drive_yes]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                    @endforeach
                </div>
            </div>


            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
            
        </div>
        {{-- ALCOHOL USE END --}}
        
        {{-- TOBACCO USE START --}}
        <div class="row setup-content" id="step-10">
            <h3> Tobacco Use</h3>

            <div class="thirty-days-record">

                <div class="form-group mb-3">
                    <label class="control-label"> Patient Age? </label>
                    <input maxlength="100" type="number" min="0"  name="tobacco_use[patient_age]" class="form-control tab3" placeholder="Age" value="" />
                </div>

                <div class="form-group mb-3">
                    <label class="control-label">
                    In the last 30 days, have you used tobacco?
                    </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check-inline">
                            <input class="form-check-input " name="tobacco_use[smoked_in_thirty_days]" type="radio" value="{{$val}}" onclick="smokingStatus()">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group mb-3">
                    <label class="control-label">Used a smokeless tobacco product?</label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check-inline">
                            <input class="form-check-input " name="tobacco_use[smokeless_product_use]" type="radio" value="{{$val}}" onclick="smokingStatus()">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="fifteen-years-record">
                <div class="form-group mb-3">
                    <label class="control-label">
                    In the last 15 years, have you used tobacco?
                    </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check-inline">
                            <input class="form-check-input " name="tobacco_use[smoked_in_fifteen_years]" type="radio" value="{{$val}}" onclick="smokingStatus()">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="average-smoking d-none">
                <div class="form-group mb-3">
                    <label class="control-label">Average smoking years?</label>
                    <input maxlength="100" type="number" min="0"  name="tobacco_use[average_smoking_years]" class="form-control tab3" placeholder="Average smoking years" onkeyup="claculateSmokingpacks()" />
                </div>
                
                <div class="form-group mb-3">
                    <label class="control-label">Average packs per day?</label>
                    <input maxlength="100" type="number" min="0"  name="tobacco_use[average_packs_per_day]" class="form-control tab3" placeholder="Average pack per day" onkeyup="claculateSmokingpacks()" />
                </div>
                
                <div class="form-group mb-3">
                    <label class="control-label">Average packs per year?</label>
                    <input maxlength="100" type="number" min="0"  name="tobacco_use[average_packs_per_year]" class="form-control tab3" placeholder="Average packs per year" />
                </div>

                <div class="form-group mb-3">
                    <label class="control-label">Would you be interested in quitting tobacco use within the next month?</label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check-inline">
                            <input class="form-check-input " name="tobacco_use[quit_tobacco]" type="radio" value="{{$val}}" onclick="quitTobacco(this)">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div class="d-none ldctquestion">
                <div class="form-group mb-3">
                    <label class="control-label">Would you be interested to Perform LDCT?</label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check-inline">
                            <input class="form-check-input " name="tobacco_use[perform_ldct]" type="radio" value="{{$val}}" onclick="ldctCouncelingSection(this)">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="d-none tobacoo-alternate">
                <div class="form-group mb-3">
                    <label class="control-label">Would you be interested in using any alternate?</label>
                    @foreach(Config('constants.tobacco_alternate') as $key => $val)
                        <div class="form-group form-check-inline">
                            <input class="form-check-input " name="tobacco_use[tobacoo_alternate]" type="radio" value="{{$val}}">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group mb-3">
                    @foreach(Config('constants.tobacco_alternate_qty') as $key => $val)
                        <div class="form-group form-check-inline">
                            <input class="form-check-input " name="tobacco_use[tobacoo_alternate_qty]" type="radio" value="{{$val}}">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
            
        </div>
        {{-- TOBACCO USE END --}}

        {{-- LDCT COUNSELING START --}}
        <div class="row setup-content" id="step-11">
            <h3> LDCT Counseling</h3>

            <div class="form-group mb-3">
                <label class="control-label">
                    Sign and Symptoms of Lung Cancer?
                </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check-inline">
                        <input class="form-check-input " name="ldct_counseling[cancer_symptoms]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>

            <div class="form-group mb-3">
                <label class="control-label">
                    No of Pack-Year?
                </label>
                <input maxlength="100" type="number" min="0"  name="ldct_counseling[no_of_packs_year]" class="form-control tab3" disabled placeholder="No of packs year" />
            </div>

            <div class="form-group mb-3">
                <label class="control-label">
                    Current Smoker or Years since quit?
                </label>
                <input type="text" name="ldct_counseling[current_quit_smoker]" class="form-control tab3" placeholder="Current smoker or year since quit" />
            </div>
            
            <ul class="list-group">
                <li class="list-group-item border-0">Patient Counseled that LDCT will help find the effect of Smoking on the Lungs and help identify Nodules or masses that might need a follow up. Advised the it has low dose radiation exposure.</li>
                <li class="list-group-item border-0">Patient understand that we would need annual LDCT. Patient if needed will undergo treatment.</li>
                <li class="list-group-item border-0">Patient counseled to quit smoking. Patient understand the importance of smoking abstinence.</li>
            </ul>

            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>

        </div>
        {{-- LDCT COUNSELING END --}}
        
        {{-- NUTRITION USE START --}}
        <div class="row setup-content" id="step-12">
            <h3> Nutrition</h3>
            <div class="form-group mb-3">
                <label class="control-label">In the past 7 days, how many servings of fruits and vegetables did you typically eat each day?</label>
                </br><span class="text-secondary">(1 serving = 1 cup of fresh vegetables, ½ cup of cooked vegetables, or 1 medium piece of fruit. 1 cup = size of a baseball.)</span>
                <input maxlength="100" type="number" min="0"  name="nutrition[fruits_vegs]" class="form-control tab3 mt-2" placeholder="servings per day" />
            </div>                            
            <div class="form-group mb-3">
                <label class="control-label">In the past 7 days, how many servings of high fiber or whole (not refined) grain foods did you typically eat each day?</label>
                </br><span class="text-secondary">(1 serving = 1 slice of 100% whole wheat bread, 1 cup of whole-grain or high-fiber ready-to-eat cereal, ½ cup of cooked cereal such as oatmeal, or ½ cup of cooked brown rice or whole wheat pasta.)</span>
                <input maxlength="100" type="number" min="0"  name="nutrition[whole_grain_food]" class="form-control tab3 mt-2" placeholder="servings per day" />
            </div>
            <div class="form-group mb-3">
                <label class="control-label">In the past 7 days, how many servings of fried or high-fat foods did you typically eat each day?</label>
                </br><span class="text-secondary">(Examples include fried chicken, fried fish, bacon, French fries, potato chips, corn chips, doughnuts, creamy salad dressings, and foods made with whole milk, cream, cheese, or mayonnaise.)</span>
                <input maxlength="100" type="number" min="0"  name="nutrition[high_fat_food]" class="form-control tab3 mt-2" placeholder="servings per day"/>
            </div>
            <div class="form-group mb-3">
                <label class="control-label">In the past 7 days, how many sugar-sweetened (not diet) beverages did you typically consume each day?</label>
                <input maxlength="100" type="number" min="0"  name="nutrition[sugar_beverages]" class="form-control tab3 mt-2" placeholder="servings per day" />
            </div>

            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- NUTRITION USE END --}}

        {{-- SEAT BELT USE START --}}
        <div class="row setup-content" id="step-13">
            <h3> Seat Belt Use</h3>
            <div class="form-group mb-3">
                <label class="control-label">
                    Do you always fasten your seat belt when you are in a car?
                </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check-inline">
                        <input class="form-check-input tab6" name="seatbelt_use[wear_seal_belt]" type="radio" value="{{$val}}" @if($key==0) checked @endif>
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                    <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- SEAT BELT USE END --}}
        
        {{-- IMMUNIZATION START --}}
        <div class="row setup-content" id="step-14">
            <h3> Immunization</h3>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    Refused Flu Vaccine ?
                </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input" name="immunization[flu_vaccine_refused]" type="radio" value="{{$val}}" onclick="showFluvaccineSection(this)">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="fluvaccine_section">
                <div class="form-group mb-3">
                    <label class="control-label">
                        Received Flu Vaccine ?
                    </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check">
                            <input class="form-check-input tab6" name="immunization[flu_vaccine_recieved]" type="radio" value="{{$val}}" onclick="fluVaccineInformation(this)">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group mb-3 recieved_flu_vaccine d-none">
                    <label class="control-label">
                        Flu vaccine recieved on
                    </label>
                    <input type="text" class="form-control datepicker" name="immunization[flu_vaccine_recieved_on]" placeholder="Flu Vaccine Recieved on MM/YYYY"/>
                </div>
                
                <div class="form-group mb-3 recieved_flu_vaccine d-none">
                    <label class="control-label">
                        Flu vaccine recieved at
                    </label>
                    <input type="text" class="form-control" name="immunization[flu_vaccine_recieved_at]" placeholder="Flu Vaccine Recieved at place"/>
                </div>
                
                
                <div class="form-group mb-3 flu_script">
                    <label class="control-label">
                        Script given for Flu Vaccine
                    </label>
                    
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check">
                            <input class="form-check-input tab6" name="immunization[flu_vaccine_script_given]" type="radio" value="{{$val}}">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="form-group mb-3">
                <label class="control-label">
                    Refused Pneumococcal Vaccine ?
                </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="immunization[pneumococcal_vaccine_refused]" type="radio" value="{{$val}}" onclick="showpnemuvaccineSection(this)">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            <div class="pneumococcal_vaccine_section">
                
                <div class="form-group mb-3">
                    <label class="control-label">
                        Received Pneumococcal Vaccine ?
                    </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check">
                            <input class="form-check-input tab6" name="immunization[pneumococcal_vaccine_recieved]" type="radio" value="{{$val}}" onclick="pneumococcalVaccineInformation(this)">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>

                <div class="recieved_pneumococcal_vaccine d-none">

                    
                    <div class="form-group mb-3">
                        <label class="control-label">
                            Recieved Prevnar 13 on
                        </label>
                        <input type="text" class="form-control datepicker" name="immunization[pneumococcal_prevnar_recieved_on]" placeholder="Prevnar 13 Vaccine Recieved on MM/YYYY" />
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="control-label">
                            Recieved Prevnar 13 at
                        </label>
                        <input type="text" class="form-control" name="immunization[pneumococcal_prevnar_recieved_at]" placeholder="Prevnar 13 Vaccine Recieved at place"/>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="control-label">
                            Recieved PPSV 23 on
                        </label>
                        <input type="text" class="form-control datepicker" name="immunization[pneumococcal_ppsv23_recieved_on]" placeholder="PPSV 23 Vaccine Recieved on MM/YYYY"/>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="control-label">
                            Recieved PPSV 23 at
                        </label>
                        <input type="text" class="form-control" name="immunization[pneumococcal_ppsv23_recieved_at]" placeholder="PPSV 23 Vaccine Recieved at place"/>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3 script_pneumococcal">
                <label class="control-label">
                    Script given for Prevnar 13 / PPSV 23
                </label>
                
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="immunization[pneumococcal_vaccine_script_given]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>

            
            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                    <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- IMMUNIZATION END --}}
        
        {{-- SCREENING START --}}
        <div class="row setup-content" id="step-15">
            <h3> Screening</h3>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    Refused Mammogram ?
                </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="screening[mammogram_refused]" type="radio" value="{{$val}}" onclick="showMammogramSection(this)">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>

            <div class="mammogramSection">
                <div class="form-group mb-3">
                    <label class="control-label">
                        Mammogram done ?
                    </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check">
                            <input class="form-check-input tab6" name="screening[mammogram_done]" type="radio" value="{{$val}}" onchange="mammogramInformation(this)">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
                
                <div class="mammogram_done d-none">
                    <div class="form-group mb-3">
                        <label class="control-label">
                            Mammogram done on ?
                        </label>
                        <input type="text" class="form-control datepicker" name="screening[mammogram_done_on]" placeholder="Mammogram done on MM/YYYY"/>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="control-label">
                            Mammogram done at ?
                        </label>
                        <input type="text" class="form-control" name="screening[mammogram_done_at]" placeholder="Mammogram done at"/>
                    </div>
                    
                    <div class="form-group mb-3">
                        <input class="form-check-input tab1" type="checkbox" value="1" name="screening[mommogram_report_reviewed]" id="flexCheckDefault">
                        
                        <label class="form-check-label"> Report reviewed</label>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="control-label">
                            Next Mammogram due on (1 year from the last Mammogram)
                        </label>
                        <input type="text" class="form-control datepicker" name="screening[next_mommogram]" placeholder="Next mommogram on MM/YYYY"/>    
                    </div>
                </div>
                
                <div class="form-group mb-3 mammogram_script">
                    <label class="control-label">
                        Script given for the Screening Mammogram ?
                    </label>
                    
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check">
                            <input class="form-check-input tab6" name="screening[mammogram_script]" type="radio" value="{{$val}}">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
            </div>
            

            <div class="form-group mb-3">
                <label class="control-label">
                    Refused Colonoscopy & FIT Test ?
                </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="screening[colonoscopy_refused]" type="radio" value="{{$val}}" onclick="showColonographSection(this)">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>

            <div class="colonographSection">
                <div class="form-group mb-3">
                    <label class="control-label">
                        Colonoscopy / FIT Test / Cologuard done ?
                    </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check">
                            <input class="form-check-input tab6" name="screening[colonoscopy_done]" type="radio" value="{{$val}}" onchange="colonoscopyInformation(this)">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
                
                <div class="colonoscopy_done d-none">

                    <div class="form-group mb-3">
                        @foreach(Config('constants.colon_test_type') as $key => $val)
                            <div class="form-group form-check-inline">
                                <input class="form-check-input tab6" name="screening[colon_test_type]" type="radio" value="{{$val}}"
                                onclick="udpateFieldsLable(this)"
                                >
                                <label class="form-check-label"> {{$val}} </label>
                            </div>
                        @endforeach
                    </div>

                    <div class="form-group mb-3 performed_on">
                        <label class="control-label">
                            Colonoscopy / FIT Test / Cologuard done on
                        </label>
                        <input type="text" class="form-control datepicker" name="screening[colonoscopy_done_on]" placeholder="Performed on MM/YYYY"/>    
                    </div>
                    
                    <div class="form-group mb-3 performed_at">
                        <label class="control-label">
                            Colonoscopy / FIT Test / Cologuard done at
                        </label>
                        <input type="text" class="form-control" name="screening[colonoscopy_done_at]" placeholder="Performed at"/>
                    </div>

                    <div class="form-group mb-3">
                        <input class="form-check-input tab1" type="checkbox" value="1" name="screening[colonoscopy_report_reviewed]" id="flexCheckDefault">
                        
                        <label class="form-check-label"> Report reviewed</label>
                    </div>
                    
                    <div class="form-group mb-3 next_perform">
                        <label class="control-label">
                            Next Colonoscopy/FIT Test due on
                        </label>
                        <input type="text" class="form-control datepicker" name="screening[next_colonoscopy]" placeholder="Next Colonoscopy on MM/YYYY"/>    
                    </div>
                </div>

                
                <div class="form-group mb-3 colonscopy_script">
                    <label class="control-label">
                        Script given for the Screening Colonoscopy
                    </label>
                    
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check">
                            <input class="form-check-input tab6" name="screening[colonoscopy_script]" type="radio" value="{{$val}}">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
            </div>

            
            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                    <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- SCREENING END --}}
        
        {{-- DIABATES START --}}
        <div class="row setup-content" id="step-16">
            <h3> Diabetes</h3>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    Does patent have active diagnosis of diabetes ?
                </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="diabetes[diabetec_patient]" type="radio" value="{{$val}}" onclick="diabeticpatientCheck(this)">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>

            <div class="fbs_last12_moths d-none">
                <div class="form-group mb-3">
                    <label class="control-label">
                        FBS done in last 12 months ?
                    </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check">
                            <input class="form-check-input tab6" name="diabetes[fbs_in_year]" type="radio" value="{{$val}}" onclick="diabeteseFbsdata(this)">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
                
                
                <div class="diabetes_fbs_data d-none">
                    <div class="form-group mb-3">
                        <label class="control-label">
                            Fasting Blood Sugar (FBS)
                        </label>
                        <input type="number" min="0" class="form-control fbsvalue" name="diabetes[fbs_value]" placeholder="Fasting Blood Sugar" onkeyup="diabetesHba1cdata(this)"/>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="control-label">
                            Fasting Blood Sugar (FBS) date
                        </label>
                        <input type="text" class="form-control mt-2 datepicker" name="diabetes[fbs_date]" placeholder="FBS Date"/>
                    </div>
                </div>
            </div>

            <div class="diabeted_hba1c_data d-none">
                <div class="form-group mb-3">
                    <label class="control-label">
                        HBA1C
                    </label>
                    <input type="text" class="form-control hba1cvalue" name="diabetes[hba1c_value]" placeholder="HBA1C" onkeyup="diabetesHba1cdata(this)" />
                </div>
                
                <div class="form-group mb-3">
                    <label class="control-label">
                        HBA1C date
                    </label>
                    <input type="text" class="form-control datepicker" name="diabetes[hba1c_date]" placeholder="HBA1C Date"/>
                </div>
            </div>

            <div class="form-group mb-3 eye_examintaion d-none">
                <h5> Eye Examination </h5>
                <label class="control-label">
                    Diabetic Eye Examination in last 12 months ?
                </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="diabetes[diabetec_eye_exam]" type="radio" value="{{$val}}" onclick="eyeExamReport(this)">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>

            <div class="eye_exam_order_section d-none">
                <div class="form-group mb-3">
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" name="diabetes[ratinavue_ordered]" type="radio" value="Yes">
                        <label class="form-check-label"> Ratinavue Ordered </label>
                    </div>

                    <div class="form-group form-check-inline">
                        <input class="form-check-input" name="diabetes[ratinavue_ordered]" type="radio" value="No">
                        <label class="form-check-label"> Script given for Eye Examination </label>
                    </div>
                </div>
            </div>

            <div class="form-group mb-3 eye_exam_repot d-none">
                @foreach(Config('constants.diabetec_eye_exam_report') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="diabetes[diabetec_eye_exam_report]" type="radio" value="{{$val}}" onclick="eyeExamReportData(this)">
                        <label class="form-check-label"> {{$key}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="eye_exam_report_data d-none">
                <div class="form-group mb-3">
                    <input type="text" class="form-control mt-2" name="diabetes[eye_exam_doctor]" placeholder="Name of Doctor"/>
                    <input type="text" class="form-control mt-2" name="diabetes[eye_exam_facility]" placeholder="Facility"/>
                    <input type="text" class="form-control mt-2 datepicker" name="diabetes[eye_exam_date]" placeholder="Eye exam date"/>
                </div>
                
                <div class="form-group mb-3">
                    <input class="form-check-input" type="checkbox" value="1" name="diabetes[eye_exam_report_reviewed]" id="flexCheckDefault" onchange="checkDiabetecRatipathy(this)">
                    <label class="form-check-label"> Report reviewed</label>
                </div>
                
                <div class="form-group mb-3 diabetec_retinopath d-none">
                    <label class="form-check-label"> Report Shows Diabetic Retinopathy</label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check-inline">
                        <input class="form-check-input tab6" name="diabetes[diabetec_ratinopathy]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
                </div>
            </div>


            <div class="form-group mb-3 nephropathy d-none">
                <h5> Nephropathy </h5>
                <label class="control-label">
                    Urine for microalbumin in last 6 months
                </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check">
                        <input class="form-check-input tab6" name="diabetes[urine_microalbumin]" type="radio" value="{{$val}}" onclick="urineMicroalbumin(this)">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>

            <div class="form-group mb-3 urine_microalbumin_section d-none">
                <input type="text" class="form-control mt-2 datepicker" name="diabetes[urine_microalbumin_date]" placeholder="Urine for Microalbumin date"/>
                @foreach(Config('constants.urine_microalbumin_report') as $key => $val)
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" name="diabetes[urine_microalbumin_report]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                @endforeach
            </div>
            
            <div class="declined_urine_microalbumin d-none">

                <div class="form-group mb-3">
                    <label class="control-label">
                        Urine for Micro-albumin ordered
                    </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                        <div class="form-group form-check-inline">
                            <input class="form-check-input tab6" name="diabetes[urine_microalbumin_ordered]" type="radio" value="{{$val}}" onclick="inhibitorsData(this)">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group mb-3">
                    <label class="control-label">
                        Does patient use
                    </label>
                    @foreach(Config('constants.inhibitor') as $key => $val)
                        <div class="form-group form-check-inline">
                            <input class="form-check-input tab6" name="diabetes[urine_microalbumin_inhibitor]" type="radio" value="{{$val}}" onclick="inhibitorsData(this)">
                            <label class="form-check-label"> {{$key}} </label>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div class="form-group mb-3 ckd_stage4_data d-none">
                <label class="control-label">
                    Does patient has
                </label>
                @foreach(Config('constants.ckd_stage_4_options') as $key => $val)
                    <div class="form-group form-check-inline">
                        <input class="form-check-input tab6" name="diabetes[ckd_stage_4]" type="radio" value="{{$val}}">
                        <label class="form-check-label"> {{$key}} </label>
                    </div>
                @endforeach
            </div>

            
            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                    <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- DIABATES END --}}

        {{-- CHOLESTEROL ASSESSMENT STARTS --}}
        <div class="row setup-content" id="step-17">
            <h3> Cholesterol Assessment</h3>
            
            <div class="form-group mb-3">
                <label class="control-label"> LDL Done in last 12 months? </label>
                @foreach(Config('constants.agree_options') as $key => $val)
                <div class="form-group form-check-inline">
                    <input class="form-check-input " name="cholesterol_assessment[ldl_in_last_12months]" type="radio" value="{{$val}}" onclick="showLdlandASVDsection(this)">
                    <label class="form-check-label"> {{$val}} </label>
                </div>
                @endforeach
            </div>

            {{-- If above ldl in last 12 months is Yes --}}
            <div class="form-group mb-3 row ldlvalues_section d-none">
                <label class="control-label">
                    LDL is  ?
                </label>
                <div class="col">
                    <input type="number" min="0" class="form-control" name="cholesterol_assessment[ldl_value]" placeholder="LDL" >
                </div>
                
                <div class="col">
                    <input type="text" class="form-control datepicker" name="cholesterol_assessment[ldl_date]" placeholder="LDL Date" >
                </div>
            </div>

            {{-- ASCVD Question section --}}
            <div class="ascvd_section">
                <div class="form-group mb-3">
                    <label class="control-label"> Does Patient have ASCVD?  </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check-inline">
                        <input class="form-check-input " name="cholesterol_assessment[patient_has_ascvd]" type="radio" value="{{$val}}" onclick="showStatinOrHypercholSection(this)">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                    @endforeach
                </div>
            </div>
            
            {{-- Hypercholesterolemia Section (show if ascvd is no) --}}
            <div class="hypercholesterolemia_section d-none">
                <div class="form-group mb-3">
                    <label class="control-label"> Fasting or direct LDL-C ≥ 190 mg/dL? Check from result above  </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" name="cholesterol_assessment[ldlvalue_190ormore]" type="radio" value="{{$val}}" onclick="showDibetesOrStatin()">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                    @endforeach
                </div>
                
                <div class="form-group mb-3">
                    <label class="control-label"> History or active diagnosis of familial or pure hypercholesterolemia  </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" name="cholesterol_assessment[pure_hypercholesterolemia]" type="radio" value="{{$val}}" onclick="showDibetesOrStatin()">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                    @endforeach
                </div>
            </div>
            
            {{-- Cholesterol Diabetes Section (show if hypercholesterolemia is no) --}}
            <div class="cholesterol_diabetes_section d-none">
                <div class="form-group mb-3">
                    <label class="control-label"> Does Patient have active diagnosis of diabetes?  </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" name="cholesterol_assessment[active_diabetes]" type="radio" value="{{$val}}" onclick="askPatientage(this)">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                    @endforeach
                </div>
                
                {{-- If above diabetes question is yes --}}
                <div class="form-group mb-3 patient_agesection d-none">
                    <label class="control-label"> Patient age between 40-75 years? </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" name="cholesterol_assessment[diabetes_patient_age]" type="radio" value="{{$val}}" onclick="lastTwoyearsStatin(this)">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                    @endforeach
                </div>
                
                {{-- If above patient age question is yes --}}
                <div class="form-group mb-3 last_two_yearsLDL d-none">
                    <label class="control-label"> Fasting or Direct LDL-C 70-189 mg/dL any time in past two years (2020-2022)? </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" name="cholesterol_assessment[ldl_range_in_past_two_years]" type="radio" value="{{$val}}" onclick="prescribedStatin($(this).val())">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                    @endforeach
                </div>
            </div>



            {{-- Statin question section --}}
            <div class="statin_question_section d-none">
                <div class="form-group mb-3">
                    <label class="control-label"> Was the patient prescribed any high or moderate intensity statin in the current calendar year?  </label>
                    @foreach(Config('constants.agree_options') as $key => $val)
                    <div class="form-group form-check-inline">
                        <input class="form-check-input " name="cholesterol_assessment[statin_prescribed]" type="radio" value="{{$val}}" onclick="showStatinDosage(this)">
                        <label class="form-check-label"> {{$val}} </label>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Show if above question about statin usage is YES --}}
            <div class="statin_dosage_section d-none">
                <div class="mb-3">
                    <label class="control-label fs-5"> Statin Type and dosage </label>
                </div>
                
                <div class="row">
                    <div class="col-md-2">
                    <label class=""> <b> Statin </b> </label> <br>
                    @foreach (Config('constants.statin_name') as $key => $statin_name)
                        <label class="form-check-label"> {{$statin_name}} </label> <br>
                    @endforeach
                    </div>
                    <div class="col-md-4">
                        <label>
                            <b>
                                Moderate-intensity
                                (LDL-C reduction 30% to < 50%)
                            </b>    
                        </label>
                        <div class="form-group mb-3">
                            @foreach (Config('constants.moderate_intensity_statin') as $key => $moderate_dosage)
                                <input class="form-check-input " name="cholesterol_assessment[statintype_dosage]" type="radio" value="{{$key}} {{$moderate_dosage}}">
                                <label class="form-check-label"> {{$moderate_dosage}} </label> <br>
                            @endforeach 
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>
                            <b>
                                High-intensity
                                (LDL-C reduction >50%)
                            </b>    
                        </label>
                        <div class="form-group mb-3">
                            @foreach (Config('constants.high_intensity_statin') as $key => $high_dosage)
                                @if ($high_dosage != "")
                                <input class="form-check-input " name="cholesterol_assessment[statintype_dosage]" type="radio" value="{{$key}} {{$high_dosage}}">
                                <label class="form-check-label"> {{$high_dosage}} </label> <br>
                                @else
                                <label class="form-check-label text-muted"> NA </label>
                                    <br>
                                @endif
                            @endforeach 
                        </div>
                    </div>
                </div>
            </div>

            {{-- Medical reason for no statin --}}
            <div class="medical_reasonforstatin_section d-none">
                <label class="control-label"> Documented medical reason for not being on statin therapy is: </label>
                <div class="form-group mb-3">
                    @foreach(Config('constants.statin_medical_reason') as $key => $val)
                        <div class="form-group form-check-inline">
                            <input class="form-check-input " name="cholesterol_assessment[medical_reason_for_nostatin{{$key}}]" type="checkbox" value="{{$val}}">
                            <label class="form-check-label"> {{$val}} </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                    <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- CHOLESTEROL ASSESSMENT END --}}
        
        {{-- BP ASSESSMENT START --}}
        <div class="row setup-content" id="step-18">
            <h3> BP Assessment</h3>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    BP ?
                </label>
                <input type="text" class="form-control" name="bp_assessment[bp_value]" placeholder="BP e.g (120/90)"/>
            </div>

            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary nextBtn mx-2" type="button" >Next</button>
                    <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- BP ASSESSMENT END --}}
        
        {{-- Weight ASSESSMENT START --}}
        <div class="row setup-content" id="step-19">
            <h3> Weight Assessment</h3>
            
            <div class="form-group mb-3">
                <label class="control-label">
                    BMI ?
                </label>
                <input type="number" min="0" class="form-control" name="weight_assessment[bmi_value]" placeholder="BMI"/>
            </div>
            
            <div class="form-group mb-3">
                <label class="control-label">Patient advised to follow up with the Nutritionist ?</label>
                @foreach(Config('constants.agree_options') as $key => $val)
                <div class="form-group form-check-inline">
                    <input class="form-check-input " name="weight_assessment[followup_withnutritionist]" type="radio" value="{{$val}}">
                    <label class="form-check-label"> {{$val}} </label>
                </div>
                @endforeach
            </div>

            <div class="pull-right align-items-end">
                <div class="btn-group flex-row-reverse" role="group" aria-label="Basic example">
                    <button class="btn btn-primary mx-2" type="submit" >Finish!</button>
                    <button class="btn btn-primary prevBtn" type="button">Previous</button>
                </div>
            </div>
        </div>
        {{-- Weight ASSESSMENT END --}}
    </div>
</div>
