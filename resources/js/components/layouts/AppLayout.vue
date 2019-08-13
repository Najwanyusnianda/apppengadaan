<template>
<div class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show" >
 <navbar></navbar>   
 <div class="app-body">
    <sidebar></sidebar>
             <div class="main">
                <!--breadcrumb-->
                  <!--main CONTENT-->
                <div class="container-fluid">
                    <div class="ui-view">
                            <div class="animated fadeIn">
                            <div class="card">
                                test
                            </div>
                             
                            </div>
                    </div>

                </div>
                 <!--end MAIN CONTENT-->
            </div>
 </div>
</div>
   
</template>
<script>
import Sidebar from './Sidebar';
import Navbar from './Navbar'


export default{
    components:{
        'sidebar':Sidebar,
        'navbar':Navbar
    }
}
</script>
