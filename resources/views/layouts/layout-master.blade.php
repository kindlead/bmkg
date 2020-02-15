<!DOCTYPE html>
<html lang="en">
<head>
  @if(isset($dataTable))
    @php $dataTable = $dataTable; @endphp
  @else
    @php $dataTable = 'Off'; @endphp  
  @endif
  @component('layouts.layout-header-tool',['title'=> $pageTitle, 'dataTable'=> $dataTable])@endcomponent
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @component('layouts.layout-navbar')@endcomponent
    <!-- partial -->
    <div class="container-fluid page-body-wrapper bg-info">
      <!-- partial:partials/_sidebar.html -->
      @component('layouts.layout-sidebar', ['authData'=>$authData, 'title'=>$pageTitle, 'checkPoint'=>$checkPoint])@endcomponent
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper"> 
          <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">

              <div class="alert alert-danger">
                <div class="row">
                  <div class="col-1 text-center">
                    <i class="fas fs30 fa-warning"></i>
                  </div>
                  <div class="col-11 pl-0">                    
                    <span>
                      You only have 4 days left to use this Web Application, after that you will be lost access in all section of this Web Application and may not be able to manage your data, <b class="upper underline"> Please contact developer for continue Subcription ! </b>
                    </span>
                  </div>
                </div>
              </div>
              
              <li style="list-style: none;" class="font-weight-normal mb-2 text-muted">
                @if(isset($mainPage1) && $mainPage1 != $pageTitle)
                  <span class="upper fs16 text-info">{{$mainPage1}}</span>
                @endif
                @if(isset($mainPage2) && $mainPage2 != $mainPage1)
                  <i class="fas fa-chevron-right text-secondary"></i>
                  <a href="{{url($linkPage2)}}"><span class="upper fs16 text-info">{{$mainPage2}}</span></a>
                @endif
                @if(isset($mainPage3) && $mainPage3 != $mainPage2)
                  <i class="fas fa-chevron-right text-secondary"></i>
                  <a href="{{url($linkPage3)}}"><span class="upper fs16 text-info">{{$mainPage3}}</span></a>
                  @endif
                {{-- @if(!isset($mainPage2) || !isset($mainPage3)) --}}
                  <i class="fas fa-chevron-right text-secondary"></i>
                  <span class="upper fs10 bold">{{$pageTitle}}</span>
                {{-- @endif --}}
              </li>
            </div>
            {{-- Content loaded --}}
            @yield('content')
            {{-- End Content Loaded --}}
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @component('layouts.layout-footer')@endcomponent
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- Javascript partials load -->
  @component('layouts.layout-bottom-tool', ['title'=>$checkPoint, 'dataTable'=>$dataTable])@endcomponent
</body>

</html>

