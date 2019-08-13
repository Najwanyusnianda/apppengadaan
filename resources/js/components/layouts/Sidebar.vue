<template>
    <div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="main.html">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                    <span class="badge badge-info">NEW</span>
                </a>
            </li>
            <li class="nav-title">User</li>
            <li class="nav-item">
                <a class="nav-link active" href="colors.html">
                    <i class="nav-icon icon-drop"></i> Notifikasi</a>
            </li>
            <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon icon-puzzle"></i> Disposisi</a>
                    <ul class="nav-dropdown-items">
        
                        <li class="nav-item">
                            <a class="nav-link" href="base/jumbotron.html">
                                <i class="nav-icon icon-puzzle"></i> Disposisi Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="base/list-group.html">
                                <i class="nav-icon icon-puzzle"></i> Disposisi Terkirim</a>
                        </li>
                       
                    </ul>
             </li>

            <li class="nav-title">Work</li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="nav-icon icon-pie-chart"></i> Rekap Permintaan</a>
            </li>
        
        
        </ul>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 549px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 252px;"></div>
        </div>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
</template>
<script>
export default {
    
}
</script>

