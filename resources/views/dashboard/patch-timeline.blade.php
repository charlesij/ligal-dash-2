@extends('layout.main')
@section('container')
<div class="main-content app-content">
  <div class="container-fluid">
      <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
              <h1 class="page-title fw-medium fs-18 mb-2">Project Timeline</h1>
              <div class="">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="{{ route('timeline') }}">Timeline</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Main Project</li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>

      <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                  <div class="card-title">
                    Main Project
                  </div>
                </div>
                <div class="card-body">
                <ul class="notification">
                  @foreach($data as $d)
                    <li>
                      <div class="notification-time">
                          <span class="date">{{ $d->day }}</span>
                          <span class="time">{{ $d->time }}</span>
                      </div>
                      <div class="notification-icon">
                          <span class="avatar avatar-lg p-1 border border-{{ $d->color }} border-opacity-25 rounded-pill">
                              <span class="avatar avatar-md avatar-rounded bg-{{ $d->color }}-transparent svg-{{ $d->color }}">
                                  {!! $d->icon !!}
                                </span>
                          </span>
                      </div>
                      <div class="notification-body">
                          <div class="d-flex align-items-start gap-3 flex-wrap p-3 rounded bg-light">
                              <div class="flex-fill w-50">
                                  <h5 class="mb-1 fs-15 fw-medium text-dark">{{ $d->title }}</h5>
                                  <p class="mb-0 text-muted">{{ $d->description }}</p>
                              </div>
                              <div>
                                  <span class="badge bg-{{ $d->color }}">
                                    {{ $d->date }}
                                  </span>
                              </div>
                          </div>
                      </div>
                    </li>
                  @endforeach
                  </ul>
                </div>
            </div>
        </div>
      </div>
      <!-- End:: row-1 -->
{{-- 
        <!-- Start:: row-2 -->
      <div class="row">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header">
                      <div class="card-title">TIMELINE 2</div>
                  </div>
                  <div class="card-body">
                      <div class="timeline-steps">
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                                  <div class="inner-circle primary"><span>1</span></div>
                                  <div class="card custom-card mb-0 border border-opacity-25 border-primary content-top p-2">
                                      <div class="card-body bg-primary-transparent">
                                          <span class="avatar avatar-md p-1 bg-white avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/11.jpg" alt="">
                                          </span>
                                          <p class="fw-medium mt-1 mb-1"> October 6, 2024</p>
                                          <p class="mb-1 fw-semibold text-default">Planning: <span class="text-muted fw-normal mb-0 mb-lg-0">Research and competitor analysis.</span>  </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                                  <div class="inner-circle secondary"><span>2</span></div>
                                  <div class="card custom-card mb-0 border border-opacity-25 border-secondary content-top p-2">
                                      <div class="card-body bg-secondary-transparent">
                                          <span class="avatar avatar-md p-1 bg-white avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="">
                                          </span>
                                          <p class="fw-medium mt-1 mb-1">September 12, 2024</p>
                                          <p class="mb-1 fw-semibold text-default">Design: <span class="text-muted fw-normal mb-0 mb-lg-0">Frontend and backend components.</span> </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                                  <div class="inner-circle success"><span>3</span></div>
                                  <div class="card custom-card mb-0 border border-opacity-25 border-success content-top p-2">
                                      <div class="card-body bg-success-transparent">
                                          <span class="avatar avatar-md avatar-rounded p-1 bg-white">
                                              <img src="{{ asset('') }}/assets/images/faces/12.jpg" alt="">
                                          </span>
                                          <p class="fw-medium mt-1 mb-1">July 20, 2024</p>
                                          <p class="mb-1 fw-semibold text-default">Testing: <span class="text-muted fw-normal mb-0 mb-lg-0">Conducted comprehensive testing.</span></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="timeline-step">
                              <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                                  <div class="inner-circle info"><span>4</span></div>
                                  <div class="card custom-card mb-0 border border-opacity-25 border-info content-top p-2">
                                      <div class="card-body bg-info-transparent">
                                          <span class="avatar avatar-md avatar-rounded p-1 bg-white">
                                              <img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="">
                                          </span>
                                          <p class="fw-medium mt-1 mb-1">May 18, 2024</p>
                                          <p class="mb-1 fw-semibold text-default">Deployment: <span class="text-muted fw-normal mb-0 mb-lg-0">Conducted final checks.</span></p> 
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="timeline-step mb-0">
                              <div class="timeline-content" data-toggle="popover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2020">
                                  <div class="inner-circle warning"><span>5</span></div>
                                  <div class="card custom-card mb-0 border border-opacity-25 border-warning p-2">
                                      <div class="card-body bg-warning-transparent">
                                          <span class="avatar avatar-md p-1 bg-white avatar-rounded">
                                              <img src="{{ asset('') }}/assets/images/faces/14.jpg" alt="">
                                          </span>
                                          <p class="fw-medium mt-1 mb-1"> April 5, 2024</p>
                                          <p class="mb-1 fw-semibold text-default">Post-Launch: <span class="text-muted fw-normal mb-0 mb-lg-0">Provided ongoing support.</span></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-2 -->
      
      <!-- Start:: row-3 -->
      <div class="row mb-5">
          <div class="col-xl-12">
              <div class="card custom-card">
                  <div class="card-header">
                    <div class="card-title">
                        Timeline 3
                    </div>
                  </div>
                  <div class="card-body">
                      <div class="timeline">
                          <div class="container">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <div class="timeline-container">
                                          <div class="timeline-end">
                                              <span class="avatar avatar-lg avatar-rounded bg-primary-transparent backdrop-blur d-inline-flex align-items-center"> <span class="avatar avatar-md bg-primary svg-white avatar-rounded  d-inline-flex align-items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M176,120c0,32-48,56-48,56s-48-24-48-56a24,24,0,0,1,48,0,24,24,0,0,1,48,0Z" opacity="0.2"></path><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm0,176H48V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V208ZM152,88a31.91,31.91,0,0,0-24,10.86A32,32,0,0,0,72,120c0,36.52,50.28,62.08,52.42,63.16a8,8,0,0,0,7.16,0C133.72,182.08,184,156.52,184,120A32,32,0,0,0,152,88Zm-24,78.93c-13.79-7.79-40-26.75-40-46.93a16,16,0,0,1,32,0,8,8,0,0,0,16,0,16,16,0,0,1,32,0C168,140.19,141.79,159.15,128,166.93Z"></path></svg> </span> </span>
                                          </div>
                                          <div class="timeline-continue">
                                              <div class="row timeline-right">
                                                  <div class="col-md-6">
                                                      <p class="timeline-date">
                                                        Step 1
                                                      </p>
                                                      <span class="timeline-time fs-12 text-muted fw-medium d-block">
                                                          12:37PM
                                                      </span>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="timeline-box">
                                                          <div class="datebox">
                                                                2024-03-10
                                                          </div>
                                                          <div class="dropdown float-end">
                                                              <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                                  <i class="fe fe-more-vertical"></i>
                                                              </a>
                                                              <ul class="dropdown-menu">
                                                                  <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                  <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                  <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                              </ul>
                                                          </div>
                                                          <div class="d-flex align-items-center gap-2 mb-2 mt-4"> 
                                                              <span class="avatar avatar-xs avatar-rounded"><img src="{{ asset('') }}/assets/images/faces/1.jpg" alt="img"></span>
                                                              <span class="fw-semibold fs-13">Wide Warner</span>
                                                          </div>
                                                          <p class="fw-medium fs-14 mb-1">Melissa Blue liked your post travel excites.</p>
                                                          <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam.</span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row timeline-left">
                                                  <div class="col-md-6">
                                                      <div class="timeline-box ms-md-auto">
                                                          <div class="datebox">
                                                              2024-10-05
                                                        </div>
                                                        <div class="dropdown float-md-start float-end">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex align-items-center  justify-content-md-end gap-2 mb-2 mt-4"> 
                                                            <span class="avatar avatar-xs avatar-rounded"><img src="{{ asset('') }}/assets/images/faces/2.jpg" alt="img"></span>
                                                            <span class="fw-semibold fs-13">Alicia Mike</span>
                                                        </div>
                                                        <p class="mb-1">
                                                          <b>You</b> Commented on <b>Peter Engola</b> post <a class="text-secondary" href="javascript:void(0);"><u>#Mother Nature</u></a>.
                                                      </p>
                                                        <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam.</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <p class="timeline-date">
                                                          Step 2
                                                      </p>
                                                      <span class="timeline-time fs-12 text-muted fw-medium d-block text-start">
                                                          10:15AM
                                                      </span>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-12">
                                                      <div class="timeline-year">
                                                          <span class="avatar avatar-lg avatar-rounded bg-secondary-transparent backdrop-blur d-inline-flex align-items-center"> <span class="avatar avatar-md bg-secondary svg-white avatar-rounded  d-inline-flex align-items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M216,83.31V208a8,8,0,0,1-8,8H176V152a8,8,0,0,0-8-8H88a8,8,0,0,0-8,8v64H48a8,8,0,0,1-8-8V48a8,8,0,0,1,8-8H172.69a8,8,0,0,1,5.65,2.34l35.32,35.32A8,8,0,0,1,216,83.31Z" opacity="0.2"></path><path d="M219.31,72,184,36.69A15.86,15.86,0,0,0,172.69,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V83.31A15.86,15.86,0,0,0,219.31,72ZM168,208H88V152h80Zm40,0H184V152a16,16,0,0,0-16-16H88a16,16,0,0,0-16,16v56H48V48H172.69L208,83.31ZM160,72a8,8,0,0,1-8,8H96a8,8,0,0,1,0-16h56A8,8,0,0,1,160,72Z"></path></svg> </span> </span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row timeline-right">
                                                  <div class="col-md-6">
                                                      <p class="timeline-date">
                                                          Step 3
                                                      </p>
                                                      <span class="timeline-time fs-12 text-muted fw-medium d-block">
                                                          17:25PM
                                                      </span>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="timeline-box">
                                                          <div class="datebox">
                                                                2024-09-21
                                                          </div>
                                                          <div class="dropdown float-end">
                                                              <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                                  <i class="fe fe-more-vertical"></i>
                                                              </a>
                                                              <ul class="dropdown-menu">
                                                                  <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                  <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                  <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                              </ul>
                                                          </div>
                                                          <div class="d-flex align-items-center gap-2 mb-2 mt-4"> 
                                                              <span class="avatar avatar-xs avatar-rounded"><img src="{{ asset('') }}/assets/images/faces/3.jpg" alt="img"></span>
                                                              <span class="fw-semibold fs-13">Mukesh Karna</span>
                                                          </div>
                                                          <p class="text-muted mb-2">
                                                              <span class="text-default"><b>Alicia Keys</b> shared a document with <b>you</b></span>.
                                                          </p>
                                                          <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsam.</span>
                                                          <p class="profile-activity-media mb-0">
                                                              <a href="javascript:void(0);">
                                                                  <img src="{{ asset('') }}/assets/images/media/file-manager/3.png" alt="">
                                                              </a>  
                                                              <span class="fs-11 text-muted">432.87KB</span>
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row timeline-left">
                                                  <div class="col-md-6">
                                                      <div class="timeline-box ms-md-auto">
                                                          <div class="datebox">
                                                              2024-02-05
                                                        </div>
                                                        <div class="dropdown float-md-start float-end">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-md-end gap-2 mb-2 mt-4"> 
                                                            <span class="avatar avatar-xs avatar-rounded"><img src="{{ asset('') }}/assets/images/faces/6.jpg" alt="img"></span>
                                                            <span class="fw-semibold fs-13">Dwayne Bero</span>
                                                        </div>
                                                        <p class="mb-1">
                                                          Admin and other team accepted your work request
                                                      </p>
                                                        <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam.</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <p class="timeline-date">
                                                        Step 4
                                                      </p>
                                                      <span class="timeline-time fs-12 text-muted fw-medium d-block text-start">
                                                          11:55AM
                                                      </span>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="col-12">
                                                      <div class="timeline-year">
                                                          <span class="avatar avatar-lg avatar-rounded bg-success-transparent backdrop-blur d-inline-flex align-items-center"> <span class="avatar avatar-md bg-success svg-white avatar-rounded  d-inline-flex align-items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,56v82.06l-23.72-23.72a8,8,0,0,0-11.31,0L163.31,140,113.66,90.34a8,8,0,0,0-11.32,0L64,128.69V56a8,8,0,0,1,8-8H216A8,8,0,0,1,224,56Z" opacity="0.2"></path><path d="M216,40H72A16,16,0,0,0,56,56V72H40A16,16,0,0,0,24,88V200a16,16,0,0,0,16,16H184a16,16,0,0,0,16-16V184h16a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM72,56H216v62.75l-10.07-10.06a16,16,0,0,0-22.63,0l-20,20-44-44a16,16,0,0,0-22.62,0L72,109.37ZM184,200H40V88H56v80a16,16,0,0,0,16,16H184Zm32-32H72V132l36-36,49.66,49.66a8,8,0,0,0,11.31,0L194.63,120,216,141.38V168ZM160,84a12,12,0,1,1,12,12A12,12,0,0,1,160,84Z"></path></svg> </span> </span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row timeline-right">
                                                  <div class="col-md-6">
                                                      <p class="timeline-date">
                                                        Step 5
                                                      </p>
                                                      <span class="timeline-time fs-12 text-muted fw-medium d-block">
                                                          07:45AM
                                                      </span>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="timeline-box">
                                                          <div class="datebox">
                                                              2024-11-12
                                                        </div>
                                                        <div class="dropdown float-end">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2 mb-2 mt-4"> 
                                                          <span class="avatar avatar-xs avatar-rounded"><img src="{{ asset('') }}/assets/images/faces/7.jpg" alt="img"></span>
                                                          <span class="fw-semibold fs-13">Alister Chuk</span>
                                                      </div>
                                                          <p class="text-muted mb-1">
                                                              <span class="text-default"><b>Melissa Blue</b> liked your post <b>travel excites</b></span>.
                                                          </p>
                                                          <p class="text-muted">you are already feeling the tense atmosphere of the video playing in the background</p>
                                                          <p class="profile-activity-media mb-0">
                                                              <a href="javascript:void(0);">
                                                                  <img src="{{ asset('') }}/assets/images/media/media-59.jpg" class="m-1" alt="">
                                                              </a>  
                                                              <a href="javascript:void(0);">
                                                                  <img src="{{ asset('') }}/assets/images/media/media-60.jpg" class="m-1" alt="">
                                                              </a>  
                                                              <a href="javascript:void(0);">
                                                                  <img src="{{ asset('') }}/assets/images/media/media-61.jpg" class="m-1" alt="">
                                                              </a>  
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row timeline-left">
                                                  <div class="col-md-6">
                                                      <div class="timeline-box ms-md-auto">
                                                          <div class="datebox">
                                                              2024-04-15
                                                        </div>
                                                        <div class="dropdown float-md-start float-end">
                                                            <a aria-label="anchor" href="javascript:void(0);" class="p-2 fs-16 text-muted" data-bs-toggle="dropdown">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-md-end gap-2 mb-2 mt-4"> 
                                                            <span class="avatar avatar-xs avatar-rounded"><img src="{{ asset('') }}/assets/images/faces/8.jpg" alt="img"></span>
                                                            <span class="fw-semibold fs-13">Monika Karan</span>
                                                        </div>
                                                        <p class="mb-1">
                                                          Social network accounts are at risk check your <span class="text-success">Login</span> Details
                                                      </p>
                                                        <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, repellendus rem rerum excepturi aperiam ipsam.</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <p class="timeline-date">
                                                      Step 6
                                                      </p>
                                                      <span class="timeline-time fs-12 text-muted fw-medium d-block text-start">
                                                          15:56PM
                                                      </span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="timeline-start">
                                              <span class="avatar avatar-lg avatar-rounded bg-info-transparent backdrop-blur d-inline-flex align-items-center"> <span class="avatar avatar-md bg-info svg-white avatar-rounded  d-inline-flex align-items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path><path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg> </span> </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End:: row-3 --> --}}

  </div>
</div>
@endsection