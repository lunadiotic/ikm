<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">--- Dashboard</li>
                <li> 
                    <a class="waves-effect waves-dark" href="{{ route('home') }}" aria-expanded="false"><i class="ti-home"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('respondent.index') }}" aria-expanded="false"><i class="ti-list"></i><span class="hide-menu">Responden</span></a>
                </li>
                <li class="nav-small-cap">--- Laporan</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-layers"></i><span class="hide-menu">Laporan</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('report.respondent.check') }}">Respondent</a></li>
                        <li><a href="{{ route('report.check') }}">Tahunan</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap">--- Setting</li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="ti-layers"></i><span class="hide-menu">Data Master</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('setting.gender.index') }}">Gender</a></li>
                        <li><a href="{{ route('setting.education.index') }}">Pendidikan</a></li>
                        <li><a href="{{ route('setting.job.index') }}">Pekerjaan</a></li>
                        <li><a href="{{ route('setting.info.index') }}">Informasi</a></li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('setting.respondents.form.index') }}" aria-expanded="false"><i class="ti-layers"></i><span class="hide-menu">Kuesioner</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>