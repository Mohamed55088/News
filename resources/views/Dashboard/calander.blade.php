@extends('Dashboard.master')
@section('content')
    <!-- ====================================
                 ——— PAGE WRAPPER
                 ===================================== -->
    <div class="page-wrapper">
        <!-- Header -->
        @include('Dashboard.header_page', ['title_page' => 'Calander'])
        <!-- ====================================
                           ——— CONTENT WRAPPER
                     ===================================== -->
        <div class="content-wrapper">
            <div class="content">
                <div class="card card-default border-0 bg-transparent">
                    <div class="card-header align-items-center p-0">
                        <h2>Calendar</h2>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-event">
                            <i class="mdi mdi-plus mr-1"></i> Add New Event
                        </button>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-body p-0">
                        <div class="full-calendar">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>

                <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between align-items-center">
                        <h2>How to use</h2>

                        <a href="https://codepen.io/iamabdus/pen/OJPZxMg" target="_blank"
                            class="btn btn-outline-primary btn-sm text-uppercase">
                            <i class="mdi mdi-codepen mr-1"></i> Open with codepen
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="mb-5">
                            <h5 class="text-dark mb-3">FullCalendar</h5>

                            <p>We are using the FullCalendar plugin for this calendar app. This is a great plugin for
                                displaying events with details in a tooltip. You can change an event's name or other
                                associated data and add a new event. It is up to you to add this functionality through
                                FullCalendar's event hooks. Check <a href="http://fullcalendar.io/"
                                    target="_blank">FullCalendar documentation</a> for more details.</p>
                        </div>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true"><i
                                        class="mdi mdi-language-javascript mr-1"></i> Javascript</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false"><i
                                        class="mdi mdi-language-html5 mr-1"></i> HTML</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false"><i class="mdi mdi-language-css3 mr-1"></i>
                                    CSS</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">

                                <pre class="mt-4 m-0 pre-code">document.addEventListener('DOMContentLoaded', function() {
           var calendarEl = document.getElementById('calendar');
           var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid' ],
            defaultView: 'dayGridMonth',
            eventRender: function(info) {
             var ntoday = moment().format('YYYYMMDD');
             var eventStart = moment( info.event.start ).format('YYYYMMDD');
             info.el.setAttribute("title", info.event.extendedProps.description);
             info.el.setAttribute("data-toggle", "tooltip");
             if (eventStart &lt; ntoday){
              info.el.classList.add("fc-past-event");
             } else if (eventStart == ntoday){
                info.el.classList.add("fc-current-event");
             } else {
                info.el.classList.add("fc-future-event");
              }
            },
          
            events: [
              {
               title: 'All Day Event',
               description: 'description for All Day Event',
               start: '2020-01-01'
             }
             // more events here
            ]
           });
           calendar.render();
          });
          </pre>

                                <pre class="mt-4 m-0"><code>&lt;script src="plugins/fullcalendar/core-4.3.1/main.min.js"&gt;&lt;/script&gt;</code>
          <code>&lt;script src="plugins/fullcalendar/daygrid-4.3.0/main.min.js"&gt;&lt;/script&gt;</code>
          <code>&lt;script src="js/calendar.js"&gt;&lt;/script&gt;</code>
          </pre>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <pre class="mt-4 m-0">&lt;div id="calendar"&gt;&lt;/div&gt;
          </pre>
                            </div>

                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <pre class="mt-4 m-0"><code>&lt;link href="plugins/fullcalendar/core-4.3.1/main.min.css" rel="stylesheet"&gt;</code>
          <code>&lt;link href="plugins/fullcalendar/daygrid-4.3.0/main.min.css" rel="stylesheet"&gt;</code>
          </pre>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Event Button  -->
                <div class="modal fade" id="modal-add-event" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header px-4">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Add New Event</h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>

                                <div class="modal-body px-4">

                                    <div class="form-group">
                                        <label for="firstName">Title</label>
                                        <input type="text" class="form-control" value="Meeting">
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="firstName">Date</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text py-1">
                                                            <i class="mdi mdi-calendar-range"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="dateRange"
                                                        value="" placeholder="Date">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect3">Time</label>
                                                <select class="form-control" id="exampleFormControlSelect3">
                                                    <option>10:00am</option>
                                                    <option>10:30am</option>
                                                    <option>11am</option>
                                                    <option>11:30am</option>
                                                    <option>12:00pm</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <label for="firstName">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="modal-footer border-top-0 px-4 pt-0">
                                    <button type="button" class="btn btn-primary btn-pill m-0">Creat Event</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer -->
        <footer class="footer mt-auto">
            <div class="copyright bg-white">
                <p>
                    &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a
                        class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
                </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
        </footer>
    </div>
    </div>
@endsection
