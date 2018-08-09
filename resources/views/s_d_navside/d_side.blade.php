<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/provider" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                @if(Auth::user()->subscribtion!="noo")
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/doctors_booking" aria-expanded="false"><i class="fas fa-notes-medical"></i><span class="hide-menu">Seekers Bookings</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/transaction_hys" aria-expanded="false"><i class="fas fa-columns"></i><span class="hide-menu">Transactions</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/doctors_chatroom" aria-expanded="false"><i class="far fa-comments"></i><span class="hide-menu"> Chart Room </span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/payout" aria-expanded="false"><i class="fas fa-credit-card"></i><span class="hide-menu">Pay Out</span></a></li>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
