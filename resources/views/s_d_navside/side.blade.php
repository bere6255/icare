<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/home" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                @if(Auth::user()->subscribtion!="noo")
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/seeker_viewbook" aria-expanded="false"><i class="fas fa-book"></i><span class="hide-menu">My Booking</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/load_provider" aria-expanded="false"><i class="fas fa-stethoscope"></i><span class="hide-menu">Providers</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/s_prescribtions" aria-expanded="false"><i class="fas fa-notes-medical"></i><span class="hide-menu">Prescribtions</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/s_transec_hys" aria-expanded="false"><i class="fas fa-columns"></i><span class="hide-menu">Transections</span></a></li>
                                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/pricing" aria-expanded="false"><i class="fas fa-money-bill-alt"></i><span class="hide-menu">subscriptions</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-envelope"></i><span class="hide-menu">Message</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Inbox </span></a></li>
                        <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Unread </span></a></li>
                        <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Sent </span></a></li>
                        <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Trash </span></a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
