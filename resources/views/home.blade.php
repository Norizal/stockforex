@extends('layouts_backend.app') 
@section('content')

<link href="{{ asset('css/backend_sidebar.css') }}" rel="stylesheet">
<div class="container">
  <div class="col-sm-2">
    <div>
      <h4>List of pages</h4>
    </div>
    <nav class="nav-sidebar">
      <ul class="nav tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">Main view</a></li>
        <li class=""><a href="#tab2" data-toggle="tab">About us</a></li>
        <li class=""><a href="#tab3" data-toggle="tab">How it works</a></li>
        <li class=""><a href="#tab4" data-toggle="tab">Screenshot</a></li>
        <li class=""><a href="#tab5" data-toggle="tab">Icon</a></li>
        <li class=""><a href="#tab6" data-toggle="tab">Pricing</a></li>
        <li class=""><a href="#tab7" data-toggle="tab">Faqs</a></li>
        <li class=""><a href="#tab8" data-toggle="tab">Contact</a></li>
        <li class=""><a href="#tab9" data-toggle="tab">Terms and condition</a></li>
      </ul>
    </nav>
  </div>
  <!-- tab content -->
  <div class="col-sm-10">
    <div class="tab-content">


      <div class="tab-pane active text-style" id="tab1">

        <h2>Main View</h2>
        <div class="row">
          <div class="col-sm-11">
            <h4>Data Mobile Mockup</h4>
          </div>
          <div class="col-sm-1">
            <a href="/mobile/create" class="btn btn-primary">Create</a>
          </div>
        </div>
        &nbsp;
        <div class="table-responsive">
          {{--
          <h3 align="center">Total Data : <span id="total_records"></span></h3> --}} @if(count($mvmms) > 0)
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Bil</th>
                <th>Image Mobile Mockup</th>
                <th></th>
                <th></th>
              </tr>
              @foreach($mvmms as $index => $mvmm)
              <tr>
                <td> {{ $index +1 }} </td>
                <td align="center"><img src="/storage/mv/mobile/{{$mvmm->mv_mm_image_mobile}}" style="width:15%"></td>
                <td><a href="/mobile/{{$mvmm->mv_mm_id}}/edit" class="btn btn-default">Edit</a></td>
                <td>{!!Form::open(['action' => ['MVMMController@destroy', $mvmm->mv_mm_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                  {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick' =>
                  "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                </td>
              </tr>


              @endforeach
          </table>
          {{ $mvmms->links() }} @else
          <p> No Data found!</p>
          @endif
        </div>


        <div class="row">
          <div class="col-sm-11">
            <h4>Data Title and Description</h4>
          </div>
          <div class="col-sm-1">
            {{-- <a href="/title-description/create" class="btn btn-primary">Create</a> --}}
          </div>
        </div>
        &nbsp; @if(count($mvtds) > 0)
        <div class="table-responsive">
          {{--
          <h3 align="center">Total Data : <span id="total_records"></span></h3> --}}
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Bil</th>
                <th>Title</th>
                <th>Sub Title</th>
                <th>Description</th>
                <th></th>
                {{--
                <th></th> --}}
              </tr>
              @foreach($mvtds as $index => $mvtd)
              <tr>
                <td> {{ $index +1 }} </td>
                <td> {{ $mvtd->mv_td_title }} </td>
                <td> {{ $mvtd->mv_td_head_title }} </td>
                <td> {{ $mvtd->mv_td_description}} </td>
                <td><a href="/title-description/{{$mvtd->mv_td_id}}/edit" class="btn btn-default">Edit</a></td>
                {{--
                <td>{!!Form::open(['action' => ['MVTDController@destroy', $mvtd->mv_td_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                  {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick' =>
                  "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                </td> --}}
              </tr>


              @endforeach
          </table>
          {{ $mvtds->links() }} @else
          <p> No Data found!</p>
          @endif
        </div>

        <div class="row">
          <div class="col-sm-11">
            <h4>Data Link URL</h4>
          </div>
          <div class="col-sm-1">
            <a href="/link-url/create" class="btn btn-primary">Create</a>
          </div>
        </div>
        &nbsp; @if(count($mvlinks) > 0)
        <div class="table-responsive">
          {{--
          <h3 align="center">Total Data : <span id="total_records"></span></h3> --}}
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Bil</th>
                <th>URL IOS</th>
                <th>URL Android</th>
                <th>URL Video Youtube</th>
                <th></th>
                <th></th>
              </tr>
              @foreach($mvlinks as $index => $mvlink)
              <tr>
                <td>{{ $index +1 }}</td>
                <td>{{ $mvlink->mv_link_url_ios }}</td>
                <td>{{ $mvlink->mv_link_url_android }}</td>
                <td>{{ $mvlink->mv_link_url_youtube }}</td>
                <td><a href="/link-url/{{$mvlink->mv_link_id}}/edit" class="btn btn-default">Edit</a></td>
                <td>{!!Form::open(['action' => ['MVLinkController@destroy', $mvlink->mv_link_id], 'method' => 'POST', 'class'
                  => 'pull-right'])!!} {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'
                  => "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                </td>
              </tr>
              @endforeach
          </table>

          {{ $mvlinks->links() }} @else
          <p> No Data found!</p>
          @endif

        </div>
      </div>




      <div class="tab-pane text-style" id="tab2">
        <h2>About Us</h2>
        <div class="row">
          <div class="col-sm-11">
            <h4>Data Mobile Mockup</h4>
          </div>
          <div class="col-sm-1">
            <a href="/about/create" class="btn btn-primary">Create</a>
          </div>
        </div>
        &nbsp;
        <div class="table-responsive">
          {{--
          <h3 align="center">Total Data : <span id="total_records"></span></h3> --}} @if(count($abouts) > 0)
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Bil</th>
                <th>Mission</th>
                <th>Vision</th>
                <th>Who We Are</th>
                <th></th>
                <th></th>
              </tr>
              @foreach($abouts as $index => $about)
              <tr>
                <td> {{ $index +1 }} </td>
                <td>{{ $about->about_us_mission }}</td>
                <td>{{ $about->about_us_vision }}</td>
                <td>{!! $about->about_us_who !!}</td>
                <td><a href="/about/{{$about->about_us_id}}/edit" class="btn btn-default">Edit</a></td>
                <td>{!!Form::open(['action' => ['AboutUsController@destroy', $about->about_us_id], 'method' => 'POST', 'class'
                  => 'pull-right'])!!} {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'
                  => "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                </td>
              </tr>


              @endforeach
          </table>
          {{ $abouts->links() }} @else
          <p> No Data found!</p>
          @endif


        </div>
      </div>


      <div class="tab-pane active text-style" id="tab3">

          <h2>How it works</h2>
          <div class="row">
            <div class="col-sm-11">
              <h4>Data How It Work - Analysis</h4>
            </div>
            <div class="col-sm-1">
              <a href="/analysis/create" class="btn btn-primary">Create</a>
            </div>
          </div>
          &nbsp;
          <div class="table-responsive">
            {{--
            <h3 align="center">Total Data : <span id="total_records"></span></h3> --}}
             @if(count($hiwanalysiss) > 0)
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Bil</th>
                  <th>Image Mobile Mockup</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th></th>
                  <th></th>
                </tr>
                @foreach($hiwanalysiss as $index => $hiwanalysis)
                <tr>
                  <td> {{ $index +1 }} </td>
                  <td>{{ $hiwanalysis->hiw_analysis_title }}</td>
                  <td>{!! $hiwanalysis->hiw_analysis_description !!}</td>
                  <td align="center"><img src="/storage/hiw/{{$hiwanalysis->hiw_analysis_image_mobile}}" style="width:15%"></td>
                  <td><a href="/analysis/{{ $hiwanalysis->hiw_analysis_id }}/edit" class="btn btn-default">Edit</a></td>
                  <td>{!!Form::open(['action' => ['HIWAnalysisController@destroy', $hiwanalysis->hiw_analysis_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick' =>
                    "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                  </td>
                </tr>
  
  
                @endforeach
            </table>
            {{ $hiwanalysiss->links() }} @else
            <p> No Data found!</p>
            @endif
          </div>
  
  
          <div class="row">
              <div class="col-sm-11">
                <h4>Data How It Work - New</h4>
              </div>
              <div class="col-sm-1">
                <a href="/new/create" class="btn btn-primary">Create</a>
              </div>
            </div>
            &nbsp;
            <div class="table-responsive">
              {{--
              <h3 align="center">Total Data : <span id="total_records"></span></h3> --}}
               @if(count($hiwnews) > 0)
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Bil</th>
                    <th>Image Mobile Mockup</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th></th>
                    <th></th>
                  </tr>
                  @foreach($hiwnews as $index => $hiwnew)
                  <tr>
                    <td> {{ $index +1 }} </td>
                    <td>{{ $hiwnew->hiw_new_title }}</td>
                    <td>{!! $hiwnew->hiw_new_description !!}</td>
                    <td align="center"><img src="/storage/hiw/{{$hiwnew->hiw_new_image_mobile}}" style="width:15%"></td>
                    <td><a href="/new/{{ $hiwnew->hiw_new_id }}/edit" class="btn btn-default">Edit</a></td>
                    <td>{!!Form::open(['action' => ['HIWNewController@destroy', $hiwnew->hiw_new_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                      {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick' =>
                      "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                    </td>
                  </tr>
    
    
                  @endforeach
              </table>
              {{ $hiwnews->links() }} @else
              <p> No Data found!</p>
              @endif
            </div>
  
            <div class="row">
                <div class="col-sm-11">
                  <h4>Data How It Work - Notification</h4>
                </div>
                <div class="col-sm-1">
                  <a href="/noti/create" class="btn btn-primary">Create</a>
                </div>
              </div>
              &nbsp;
              <div class="table-responsive">
                {{--
                <h3 align="center">Total Data : <span id="total_records"></span></h3> --}}
                 @if(count($hiwnotis) > 0)
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Bil</th>
                      <th>Image Mobile Mockup</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th></th>
                      <th></th>
                    </tr>
                    @foreach($hiwnotis as $index => $hiwnoti)
                    <tr>
                      <td> {{ $index +1 }} </td>
                      <td>{{ $hiwnoti->hiw_noti_title }}</td>
                      <td>{!! $hiwnoti->hiw_noti_description !!}</td>
                      <td align="center"><img src="/storage/hiw/{{$hiwnoti->hiw_noti_image_mobile}}" style="width:15%"></td>
                      <td><a href="/noti/{{ $hiwnoti->hiw_noti_id }}/edit" class="btn btn-default">Edit</a></td>
                      <td>{!!Form::open(['action' => ['HIWNotiController@destroy', $hiwnoti->hiw_noti_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick' =>
                        "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                      </td>
                    </tr>
      
      
                    @endforeach
                </table>
                {{ $hiwnotis->links() }} @else
                <p> No Data found!</p>
                @endif
              </div>

              <div class="row">
                  <div class="col-sm-11">
                    <h4>Data How It Work - Video</h4>
                  </div>
                  <div class="col-sm-1">
                    <a href="/video/create" class="btn btn-primary">Create</a>
                  </div>
                </div>
                &nbsp;
                <div class="table-responsive">
                  {{--
                  <h3 align="center">Total Data : <span id="total_records"></span></h3> --}}
                   @if(count($hiwvideos) > 0)
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Bil</th>
                        <th>Image Mobile Mockup</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th></th>
                        <th></th>
                      </tr>
                      @foreach($hiwvideos as $index => $hiwvideo)
                      <tr>
                        <td> {{ $index +1 }} </td>
                        <td>{{ $hiwvideo->hiw_video_title }}</td>
                        <td>{!! $hiwvideo->hiw_video_description !!}</td>
                        <td align="center"><img src="/storage/hiw/{{$hiwvideo->hiw_video_image_mobile}}" style="width:15%"></td>
                        <td><a href="/video/{{ $hiwvideo->hiw_video_id }}/edit" class="btn btn-default">Edit</a></td>
                        <td>{!!Form::open(['action' => ['HIWVideoController@destroy', $hiwvideo->hiw_video_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                          {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick' =>
                          "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                        </td>
                      </tr>
        
        
                      @endforeach
                  </table>
                  {{ $hiwvideos->links() }} @else
                  <p> No Data found!</p>
                  @endif
                </div>

                <div class="row">
                    <div class="col-sm-11">
                      <h4>Data How It Work - Web</h4>
                    </div>
                    <div class="col-sm-1">
                      <a href="/web/create" class="btn btn-primary">Create</a>
                    </div>
                  </div>
                  &nbsp;
                  <div class="table-responsive">
                    {{--
                    <h3 align="center">Total Data : <span id="total_records"></span></h3> --}}
                     @if(count($hiwwebs) > 0)
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Bil</th>
                          <th>Image Mobile Mockup</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th></th>
                          <th></th>
                        </tr>
                        @foreach($hiwwebs as $index => $hiwweb)
                        <tr>
                          <td> {{ $index +1 }} </td>
                          <td>{{ $hiwweb->hiw_web_title }}</td>
                          <td>{!! $hiwweb->hiw_web_description !!}</td>
                          <td align="center"><img src="/storage/hiw/{{$hiwweb->hiw_web_image_mobile}}" style="width:15%"></td>
                          <td><a href="/web/{{ $hiwweb->hiw_web_id }}/edit" class="btn btn-default">Edit</a></td>
                          <td>{!!Form::open(['action' => ['HIWWebController@destroy', $hiwweb->hiw_web_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick' =>
                            "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                          </td>
                        </tr>
          
          
                        @endforeach
                    </table>
                    {{ $hiwwebs->links() }} @else
                    <p> No Data found!</p>
                    @endif
                  </div>
        </div>


      <div class="tab-pane active text-style" id="tab4">

        <h2>ScreenShot</h2>
        <div class="row">
          <div class="col-sm-11">
            <h4>Data Mobile ScreenShot</h4>
          </div>
          <div class="col-sm-1">
            <a href="/screenshot/create" class="btn btn-primary">Create</a>
          </div>
        </div>
        &nbsp;
        <div class="table-responsive">
          {{--
          <h3 align="center">Total Data : <span id="total_records"></span></h3> --}} @if(count($screenshots) > 0)
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Bil</th>
                <th>Image Mobile ScreenShot</th>
                <th></th>
                <th></th>
              </tr>
              @foreach($screenshots as $index => $screenshot)
              <tr>
                <td> {{ $index +1 }} </td>
                <td align="center"><img src="/storage/screenshot/{{$screenshot->screenshot_image_mobile}}" style="width:15%"></td>
                <td><a href="/screenshot/{{$screenshot->screenshot_id}}/edit" class="btn btn-default">Edit</a></td>
                <td>{!!Form::open(['action' => ['ScreenShotController@destroy', $screenshot->screenshot_id], 'method' => 'POST',
                  'class' => 'pull-right'])!!} {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' =>
                  'btn btn-danger','onclick' => "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                </td>
              </tr>


              @endforeach
          </table>
          {{ $screenshots->links() }} @else
          <p> No Data found!</p>
          @endif


        </div>
      </div>




      <div class="tab-pane active text-style" id="tab5">

          <h2>Icon</h2>
          <div class="row">
            <div class="col-sm-11">
              <h4>Data Icon</h4>
            </div>
            <div class="col-sm-1">
              <a href="/icon/create" class="btn btn-primary">Create</a>
            </div>
          </div>
          &nbsp;
          <div class="table-responsive">
            {{--
            <h3 align="center">Total Data : <span id="total_records"></span></h3> --}} 
            @if(count($icons) > 0)
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Bil</th>
                  <th>Icon Header</th>
                  <th>Icon Footer</th>
                  <th></th>
                  <th></th>
                </tr>
                @foreach($icons as $index => $icon)
                <tr>
                  <td> {{ $index +1 }} </td>
                  <td align="center"><img src="/storage/icon/{{$icon->icon_image}}" style="width:15%"></td>
                  <td align="center"><img src="/storage/icon/{{ $icon->icon_image2 }}" style="width:15%"></td>
                  <td><a href="/icon/{{$icon->icon_id}}/edit" class="btn btn-default">Edit</a></td>
                  <td>{!!Form::open(['action' => ['IconController@destroy', $icon->icon_id], 'method' => 'POST',
                    'class' => 'pull-right'])!!} {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' =>
                    'btn btn-danger','onclick' => "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                  </td>
                </tr>
  
  
                @endforeach
            </table>
            {{ $icons->links() }} @else
            <p> No Data found!</p>
            @endif
  
  
          </div>
        </div>





      <div class="tab-pane active text-style" id="tab6">

        <h2>Pricing</h2>
        <div class="row">
          <div class="col-sm-11">
            <h4>Data Pricing 1</h4>
          </div>
          <div class="col-sm-1">
            <a href="/pricing1/create" class="btn btn-primary">Create</a>
          </div>
        </div>
        &nbsp;
        <div class="table-responsive">
          {{--
          <h3 align="center">Total Data : <span id="total_records"></span></h3> --}} @if(count($pricing1s) > 0)
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Bil</th>
                <th>Price</th>
                <th>Duration</th>
                <th>Promotion</th>
                <th>Description</th>
                <th></th>
                <th></th>
              </tr>
              @foreach($pricing1s as $index => $pricing1)
              <tr>
                <td> {{ $index +1 }} </td>
                <td> {{ $pricing1->pricing1_price }} </td>
                <td> {{ $pricing1->pricing1_duration }} </td>
                <td> {{ $pricing1->pricing1_promotion }} </td>
                <td> {!! $pricing1->pricing1_description !!} </td>
                <td><a href="/pricing1/{{$pricing1->pricing1_id}}/edit" class="btn btn-default">Edit</a></td>
                <td>{!!Form::open(['action' => ['Pricing1Controller@destroy', $pricing1->pricing1_id], 'method' => 'POST', 'class'
                  => 'pull-right'])!!} {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'
                  => "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                </td>
              </tr>


              @endforeach
          </table>
          {{ $pricing1s->links() }} @else
          <p> No Data found!</p>
          @endif

        </div>


        <div class="row">
          <div class="col-sm-11">
            <h4>Data Pricing 2</h4>
          </div>
          <div class="col-sm-1">
            <a href="/pricing2/create" class="btn btn-primary">Create</a>
          </div>
        </div>
        &nbsp;
        <div class="table-responsive">
          {{--
          <h3 align="center">Total Data : <span id="total_records"></span></h3> --}} @if(count($pricing2s) > 0)
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Bil</th>
                <th>Price</th>
                <th>Duration</th>
                <th>Promotion</th>
                <th>Description</th>
                <th></th>
                <th></th>
              </tr>
              @foreach($pricing2s as $index => $pricing2)
              <tr>
                <td> {{ $index +1 }} </td>
                <td> {{ $pricing2->pricing2_price }} </td>
                <td> {{ $pricing2->pricing2_duration }} </td>
                <td> {{ $pricing2->pricing2_promotion }} </td>
                <td> {!! $pricing2->pricing2_description !!} </td>
                <td><a href="/pricing2/{{$pricing2->pricing2_id}}/edit" class="btn btn-default">Edit</a></td>
                <td>{!!Form::open(['action' => ['Pricing2Controller@destroy', $pricing2->pricing2_id], 'method' => 'POST', 'class'
                  => 'pull-right'])!!} {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'
                  => "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                </td>
              </tr>


              @endforeach
          </table>
          {{ $pricing2s->links() }} @else
          <p> No Data found!</p>
          @endif

        </div>


        <div class="row">
          <div class="col-sm-11">
            <h4>Data Pricing 3</h4>
          </div>
          <div class="col-sm-1">
            <a href="/pricing3/create" class="btn btn-primary">Create</a>
          </div>
        </div>
        &nbsp;
        <div class="table-responsive">
          {{--
          <h3 align="center">Total Data : <span id="total_records"></span></h3> --}} @if(count($pricing3s) > 0)
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Bil</th>
                <th>Price</th>
                <th>Duration</th>
                <th>Promotion</th>
                <th>Description</th>
                <th></th>
                <th></th>
              </tr>
              @foreach($pricing3s as $index => $pricing3)
              <tr>
                <td> {{ $index +1 }} </td>
                <td> {{ $pricing3->pricing3_price }} </td>
                <td> {{ $pricing3->pricing3_duration }} </td>
                <td> {{ $pricing3->pricing3_promotion }} </td>
                <td> {!! $pricing3->pricing3_description !!} </td>
                <td><a href="/pricing3/{{$pricing3->pricing3_id}}/edit" class="btn btn-default">Edit</a></td>
                <td>{!!Form::open(['action' => ['Pricing3Controller@destroy', $pricing3->pricing3_id], 'method' => 'POST', 'class'
                  => 'pull-right'])!!} {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'
                  => "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                </td>
              </tr>


              @endforeach
          </table>
          {{ $pricing3s->links() }} @else
          <p> No Data found!</p>
          @endif

        </div>
      </div>



      <div class="tab-pane text-style" id="tab7">
        <h2>Faqs</h2>
        <div class="row">
          <div class="col-sm-11">
            <h4>Data Faqs</h4>
          </div>
          <div class="col-sm-1">
            <a href="/faq/create" class="btn btn-primary">Create</a>
          </div>
        </div>
        &nbsp;
        <div class="table-responsive">
          {{--
          <h3 align="center">Total Data : <span id="total_records"></span></h3> --}} @if(count($faqs) > 0)
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Bil</th>
                <th>Title</th>
                <th>Description</th>
                <th></th>
                <th></th>
              </tr>
              @foreach($faqs as $index => $faq)
              <tr>
                <td> {{ $index +1 }} </td>
                <td> {{ $faq->faqs_title }} </td>
                <td>{!! $faq->faqs_description !!}</td>
                <td><a href="/faq/{{$faq->faqs_id}}/edit" class="btn btn-default">Edit</a></td>
                <td>{!!Form::open(['action' => ['FaqController@destroy', $faq->faqs_id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                  {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick' =>
                  "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                </td>
              </tr>


              @endforeach
          </table>
          {{ $terms->links() }} @else
          <p> No Data found!</p>
          @endif



        </div>
      </div>

      <div class="tab-pane text-style" id="tab8">
        <h2>Contact</h2>
        <div class="row">
          <div class="col-sm-11">
            <h4>Data Contact</h4>
          </div>
          <div class="col-sm-1">
            <a href="/contact/create" class="btn btn-primary">Create</a>
          </div>
        </div>
        &nbsp;
        <div class="table-responsive">
          {{--
          <h3 align="center">Total Data : <span id="total_records"></span></h3> --}} @if(count($contacts) > 0)
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Bil</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Instagram</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th></th>
                <th></th>
              </tr>
              @foreach($contacts as $index => $contact)
              <tr>
                <td> {{ $index +1 }} </td>
                <td>{!! $contact->contact_address !!}</td>
                <td>{{ $contact->contact_email }}</td>
                <td>{{ $contact->contact_phone }}</td>
                <td>{{ $contact->contact_instagram }}</td>
                <td>{{ $contact->contact_facebook }}</td>
                <td>{{ $contact->contact_twitter }}</td>
                <td><a href="/contact/{{$contact->contact_id}}/edit" class="btn btn-default">Edit</a></td>
                <td>{!!Form::open(['action' => ['ContactController@destroy', $contact->contact_id], 'method' => 'POST', 'class'
                  => 'pull-right'])!!} {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'
                  => "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                </td>
              </tr>


              @endforeach
          </table>
          {{ $contacts->links() }} @else
          <p> No Data found!</p>
          @endif

        </div>

      </div>



      <div class="tab-pane text-style" id="tab9">
        <h2>Terms and Conditions</h2>
        <div class="row">
          <div class="col-sm-11">
            <h4>Data Terms and Conditions</h4>
          </div>
          <div class="col-sm-1">
            <a href="/terms/create" class="btn btn-primary">Create</a>
          </div>
        </div>
        &nbsp;
        <div class="table-responsive">
          {{--
          <h3 align="center">Total Data : <span id="total_records"></span></h3> --}} @if(count($terms) > 0)
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Bil</th>
                <th>Description Terms and Conditions</th>
                <th></th>
                <th></th>
              </tr>
              @foreach($terms as $index => $term)
              <tr>
                <td> {{ $index +1 }} </td>
                <td>{!! $term->description !!}</td>
                <td><a href="/terms/{{$term->id}}/edit" class="btn btn-default">Edit</a></td>
                <td>{!!Form::open(['action' => ['TermsController@destroy', $term->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                  {{Form::hidden('_method', 'DELETE')}} {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick' =>
                  "return confirm('Are you sure?')"])}} {!!Form::close()!!}
                </td>
              </tr>


              @endforeach
          </table>
          {{ $terms->links() }} @else
          <p> No Data found!</p>
          @endif

        </div>

      </div>



    </div>
  </div>


</div>
@endsection