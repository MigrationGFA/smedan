<!-- BEGIN: Main Menu-->
<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');


$regBatchData = $this->gfa_model->regAllBatch();
?>
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
       <center><img src="https://gfa-tech.com/wema.lms.login//public/assets/images/logo.webp" align="center"></center>
		
    </div><br> <br> <br>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
         <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Quick Menu</span><i data-feather="more-horizontal"></i>
		 
		 <li class=" nav-item" style="margin-top:10px;"><a class="d-flex align-items-center clicklink1">
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span></a>
            <ul class="menu-content">
	
			</ul>
          </li>
		 <script>
		     
		     $(function(){
		         
		    
		        $('.clicklink1').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/users_analytics", "_self");  
		       }); 
		        $('.clicklink2').click(function(){
		      //   window.open("<?php echo base_url(); ?>gfa/corperate_startups", "_self");  
		         window.open("<?php echo base_url(); ?>gfa/users_analytics", "_self");  
		       }); 
		        
		        $('.clicklink3').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/signoutActionAdmin", "_self");  
		       }); 
                $('.clicklink5').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/partners", "_self");  
		       }); 
		       
		       $('.clicklink6').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/reports", "_self");  
		       }); 
		       
		       $('.clicklink7').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/manage_csr", "_self");  
		       }); 
		       
		       $('.clicklink8').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/manage_event", "_self");  
		       }); 
		       
		       $('.clicklink9').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/partners", "_self");  
		       }); 
		       
		       $('.clicklink10').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/partners", "_self");  
		       }); 
		
			   $('.clicklink11').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/manage_slider", "_self");  
		       });
		     });
		 </script>
		 
		 
		   <li class="nav-item active" style="margin-top:10px;"><a href="<?php echo base_url("gfa/users_analytics/"); ?>" class="d-flex align-items-center clicklink2" >
		   <i data-feather="square"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Users Analytics</span></a>
            <ul class="menu-content">
            </ul>
          </li>
          
		  
          
          
         
          
		  <li class="nav-item" style="margin-top:10px;">
        <a href="<?php echo base_url("gfa/signoutActionAdmin/"); ?>" class="d-flex align-items-center clicklink3" >
		    <i data-feather="file"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Logout</span></a>
           <ul class="menu-content">
            
            </ul>
        </li>
		
		   
          <!--
		   <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink00" >
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Digital Products</span></a>
            <ul class="menu-content">
		
			</ul>
          </li>
		  <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink00" >
		   <i data-feather="user-check"></i><span class="menu-title text-truncate" data-i18n="Dashboards">News</span></a>
           
          </li>
		  
		  
		   <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink1" >
		   <i data-feather="video"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Media & PR</span></a>
           
          </li>
		  
		   <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink00" >
		   <i data-feather="rss"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Forms & Surveys</span></a>
           
          </li>
		  
		   
          <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink00" >
		   <i data-feather="sliders"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Content</span></a>
           
          </li>
          <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink00" >
		   <i data-feather="share-2"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Learning</span></a>
           
          </li>
          <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink00" >
		   <i data-feather="speaker"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Entertainment</span></a>
           
          </li>
         -->
          
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->
