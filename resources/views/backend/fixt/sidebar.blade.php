<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DBPAT</h3>
                </a>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    @if(auth()->user()->role =='admin')
                    
                    <div class="nav-item dropdown">
                        <a href="{{route('category.table')}}" class="nav-link"><i class="fa fa-keyboard me-2"></i>Categories</a>  
                    </div>




                    
                   
                    <a href="{{route('customer.table')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Coustomers</a>

                    <a href="{{route('beautician.table')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Beautician</a>

                    <a href="{{route('doctor.table')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Doctor</a>   



                    
                    <a href="{{route('payment.table')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Payment</a>
                    <a href="{{route('service.table')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Service</a>

                    <a href="{{route('appointment.table')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Beautician Appointment</a>
                        






                    <a href="{{route('dappointment.table')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Doctor
                    Appointment </a>
                    <a href="{{route('all.report')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Report</a>
                    



                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Feedback</a>

                    @endif


                    @if(auth()->user()->role =='beautician')

                    <a href="{{route('appointment.table')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Beautician Appointment</a>
                    @endif
                    

                    @if(auth()->user()->role =='doctor')
                    <a href="{{route('dappointment.table')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Doctor Appointment </a>
                    
                    @endif

       
                    
                   


{{-- 
                    <a href="{{route('produets.index')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Produets</a>
                    --}}
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->