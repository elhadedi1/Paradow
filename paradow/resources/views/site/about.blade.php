@extends('site/layout/main')

@section('content')
<div class="container">
<form class="searchBox" style="display: none;" method="get" action="{{url('/search')}}">
							{{csrf_field()}}
        <input type="text" name="search" placeholder="{{trans('main.searchNow')}}">
              <span id="cancel">
                <i class="fa fa-times"></i></span>
                  </form>
</div>

<!---------------Start About------------------>
<div class="container about">
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
            <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
            <?php $j=0; ?>
            @foreach($about as $data)
            <?php $j++ ; ?>
          @if($j == 1)
                <a href="#{{unserialize($data->mainTitle)[LaravelLocalization::getCurrentLocale()]}}" class="nav-link active" data-toggle="pill" role="tab" aria-controls="{{$data->mainTitle}}" aria-selected="true">
                    <i class="mdi mdi-help-circle"></i> {{unserialize($data->mainTitle)[LaravelLocalization::getCurrentLocale()]}}
                 </a>
          @endif
          @if($j != 1)
                <a href="#{{unserialize($data->mainTitle)[LaravelLocalization::getCurrentLocale()]}}" class="nav-link " data-toggle="pill" role="tab" aria-controls="{{$data->mainTitle}}" aria-selected="true">
                    <i class="mdi mdi-help-circle"></i> {{unserialize($data->mainTitle)[LaravelLocalization::getCurrentLocale()]}}
                 </a>
          @endif
                @endforeach 
            </div>
        </div>
        <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
            <div class="tab-content" id="faq-tab-content">
            <?php $m=0; ?>
            @foreach($about as $data)
            <?php $i=0;$m++; ?>
            @if($m ==1)
            <div class="tab-pane show active" id="{{unserialize($data->mainTitle)[LaravelLocalization::getCurrentLocale()]}}" role="tabpanel" aria-labelledby="{{unserialize($data->mainTitle)[LaravelLocalization::getCurrentLocale()]}}">
           @endif
           @if($m !=1)
            <div class="tab-pane show" id="{{unserialize($data->mainTitle)[LaravelLocalization::getCurrentLocale()]}}" role="tabpanel" aria-labelledby="{{unserialize($data->mainTitle)[LaravelLocalization::getCurrentLocale()]}}">
           @endif
            @foreach($aboutPageRes as $data2)
            @if(unserialize($data2->about_title)[LaravelLocalization::getCurrentLocale()]== unserialize($data->mainTitle)[LaravelLocalization::getCurrentLocale()])
            <?php $i++; ?>
            @if($i ==1)
                    <div class="accordion show active" id="accordion-tab-{{$i}}">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-{{$i}}-heading-{{$i}}">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-{{$i}}-content-{{$i}}" aria-expanded="false" aria-controls="accordion-tab-{{$i}}-content-{{$i}}">{{unserialize($data2->about_subtitle)[LaravelLocalization::getCurrentLocale()]}}</button>
                                </h5>
                            </div>
                            <div class="collapse show" id="accordion-tab-{{$i}}-content-{{$i}}" aria-labelledby="accordion-tab-{{$i}}-heading-{{$i}}" data-parent="#accordion-tab-{{$i}}">
                                <div class="card-body">
                                 <p>{{unserialize($data2->about_text)[LaravelLocalization::getCurrentLocale()]}} </p>
                                </div>
                            </div>
                      </div>
@endif
@if($i !=1)
                    <div class="accordion show " id="accordion-tab-{{$i}}">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-{{$i}}-heading-{{$i}}">
                                <h5>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-{{$i}}-content-{{$i}}" aria-expanded="false" aria-controls="accordion-tab-{{$i}}-content-{{$i}}">{{unserialize($data2->about_subtitle)[LaravelLocalization::getCurrentLocale()]}}</button>
                                </h5>
                            </div>
                            <div class="collapse " id="accordion-tab-{{$i}}-content-{{$i}}" aria-labelledby="accordion-tab-{{$i}}-heading-{{$i}}" data-parent="#accordion-tab-{{$i}}">
                                <div class="card-body">
                                 <p>{{unserialize($data2->about_text)[LaravelLocalization::getCurrentLocale()]}} </p>
                                </div>
                            </div>
                      </div>
@endif
                       
                    </div>
                    @endif
                    @endforeach
                </div>
           
                @endforeach
            
            </div>
        </div>
      
    </div>
</div>

<!---------------End About--------------->




@stop