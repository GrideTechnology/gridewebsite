@extends('common.web.layout.base')
{{ App::setLocale(Request::route('lang') !== null ? Request::route('lang') : 'en') }}
@section('styles')
@parent
<link rel='stylesheet' type='text/css' href="{{ asset('assets/layout/css/financial.css')}}"/>
<style>@media(max-width: 767px){
  section#features div#London .row {
    display: flex;
    flex-wrap: wrap;
}
section#features div#London .row .responsive-img {
    padding: 2px 10px;
    width: 50%;
}
div#usa h1 {
    font-size: 20px;
}
h1.text-center {
    font-size: 32px !important;
}
}</style>
@stop
@section('content')

  <section id="features">
      <div class="container">
          <div class="heading dis-column">
              <hr>
              <h1 class="text-center"><span class="txt-green">Gride</span> App Financial</h1>
          </div>
      </div>
      <div class="row">
        <div class="container">
            <div id="example1"></div>
            <div class="tab">
              <!-- <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Leadership</button>
              <button class="tablinks" onclick="openCity(event, 'Paris')">Board of Directors</button>
              <button class="tablinks" onclick="openCity(event, 'Tokyo')">Committee composition</button>
              <button class="tablinks" onclick="openCity(event, 'usa')">Investors</button> -->
              <div>
                <button class="tablinks active" onclick="openCity(event, 'Paris')" id="defaultOpen">Board of Directors</button>
              </div>
              <div>
                <button class="tablinks" onclick="openCity(event, 'London')">Leadership</button>
              </div>
              <div>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Committee composition</button>
              </div>
              <div>
                <button class="tablinks" onclick="openCity(event, 'usa')">Investors</button>
              </div>
            </div>
             <!--Tab1-->
            <div id="London" class="tabcontent" style="display: block;">
              <!--image contents-->
              @foreach(Helper::getcmspage() as $k=>$v)
                @if($v->page_name == 'financial_leadership')
                    {!!$v->content !!} 
                @endif
              @endforeach
            </div>
        </div>
      </div>
      <!--End of tab1-->
      <!--tab2-->
      <div id="Paris" class="tabcontent" style="display: none;">
          <div class="list_wp">
            @foreach(Helper::getcmspage() as $k=>$v)
              @if($v->page_name == 'financial_board_of_directors')
                  {!!$v->content !!}
              @endif
            @endforeach
          </div>
          <!--End of tab 2-->
      </div> 
      <!-- removing this deletes tab 3 and 4-->
      <!--tab 3-->
      <div id="Tokyo" class="tabcontent" style="display: none;">
          <div class="list_wp">
              @foreach(Helper::getcmspage() as $k=>$v)
                @if($v->page_name == 'financial_committee')
                    {!!$v->content !!} 
                @endif
              @endforeach
          </div>
      </div>
      <!--end of tab3-->
      <!--tab4-->
      <div id="usa" class="tabcontent" style="display: none;">
          <div class="row">
              <div class="list_wp">
                  <div class="con">
                  @foreach(Helper::getcmspage() as $k=>$v)
                    @if($v->page_name == 'financial_investors')
                        {!!$v->content !!} 
                    @endif
                  @endforeach
                  </div>
              </div>
          </div>
      </div>
      <!--end of tab4-->
  </section>

  <div class="container">
    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div id="Moliere" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12 ml-auto">
                @foreach(Helper::getcmspage() as $k=>$v)
                  @if($v->page_name == 'financial_moliere')
                      {!!$v->content !!}
                  @endif
                @endforeach
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div id="trisha" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12 ml-auto">
                  @foreach(Helper::getcmspage() as $k=>$v)
                    @if($v->page_name == 'financial_trisha')
                        {!!$v->content !!}
                    @endif
                  @endforeach
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
      <!-- Trigger the modal with a button -->
      <!-- Modal -->
    <div id="joseph" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="col-md-12 ml-auto">
                  @foreach(Helper::getcmspage() as $k=>$v)
                    @if($v->page_name == 'financial_joseph')
                        {!!$v->content !!}
                    @endif
                  @endforeach
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
      <!-- Trigger the modal with a button -->
      <!-- Modal -->
      <div id="samin" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12 ml-auto">
                            @foreach(Helper::getcmspage() as $k=>$v)
                              @if($v->page_name == 'financial_samin')
                                  {!!$v->content !!}
                              @endif
                            @endforeach
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <!-- Trigger the modal with a button -->
      <!-- Modal -->
      <div id="marcius" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12 ml-auto">
                            @foreach(Helper::getcmspage() as $k=>$v)
                              @if($v->page_name == 'financial_marcius')
                                  {!!$v->content !!}
                              @endif
                            @endforeach
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <!-- Trigger the modal with a button -->
      <!-- Modal -->
      <div id="Julbert" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12 ml-auto">
                            @foreach(Helper::getcmspage() as $k=>$v)
                              @if($v->page_name == 'financial_abraham')
                                  {!!$v->content !!}
                              @endif
                            @endforeach
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <!-- Trigger the modal with a button -->
      <!-- Modal -->
      <div id="Similien" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12 ml-auto">
                            @foreach(Helper::getcmspage() as $k=>$v)
                              @if($v->page_name == 'financial_similien')
                                  {!!$v->content !!}
                              @endif
                            @endforeach
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

    <div class="container">
      <!-- Trigger the modal with a button -->
      <!-- Modal -->
      <div id="Cronin" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12 ml-auto">
                            @foreach(Helper::getcmspage() as $k=>$v)
                              @if($v->page_name == 'financial_cronin')
                                  {!!$v->content !!}
                              @endif
                            @endforeach
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <!-- Trigger the modal with a button -->
      <!-- Modal -->
      <div id="Orella" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12 ml-auto">
                            @foreach(Helper::getcmspage() as $k=>$v)
                              @if($v->page_name == 'financial_orella')
                                  {!!$v->content !!}
                              @endif
                            @endforeach
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <!-- Trigger the modal with a button -->
      <!-- Modal -->
      <div id="Jerome" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12 ml-auto">
                            @foreach(Helper::getcmspage() as $k=>$v)
                              @if($v->page_name == 'financial_jerome')
                                  {!!$v->content !!}
                              @endif
                            @endforeach
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";

    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
@stop



