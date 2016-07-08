<? $page_id = mysql_escape_string($_GET['pageid']); ?>
<? include 'header.php'; ?>
<? $y = mysql_query("SELECT * FROM posts WHERE is_gallery = '1' ORDER BY post_id DESC"); 


	
?>

<?  ?>
    <div class="container white" style="padding:0">

	  <div class="row" style="background: white;">
      <? include 'leftl.php' ?>
       <div class="large-9 columns" style="margin-bottom: 15px;">
   		<h3 class="subheader">Headquarter's Staff</h3>
       
     
         
       <div class="large-12 columns">
      	 	<h5 class="subheader">President / CEO</h5>  
       	 	<hr>
    		<div class="large-4 columns">
    		  <div class="border"><img src="staff/madam.jpg" />
        		<h6>Mrs. Olubukola Adebiyi</h6>
       			<p>President / CEO</p>
   			  </div>
   		 </div>
       </div>
        <div class="large-12 columns">
      	 	<h5 class="subheader">Admin Staff</h5>  
       	 	<hr>
    		<div class="large-4 columns">
    		  <div class="border"><img src="staff/tessy.jpg" />
        		<h6>Mrs Tessy U. Ozobialu</h6>
       			<p>Acting Admin Officer</p>
   			  </div>
   		  </div>
             <div class="large-4 columns"><div class="border"><img src="staff/none.jpg" />
        		<h6>Lolade Samuel</h6>
       			<p>Communications Officer</p>
       			</div>
      		 </div>
             <div class="large-4 columns"><div class="border"><img src="staff/none.jpg" />
        		<h6>Mrs Abosede Matanmi</h6>
       			<p>Assitant Admin Officer</p>
       			</div>
      		 </div>
             <div class="large-4 columns"><div class="border"><img src="staff/Olubukola_Adebiyi.jpg" />
        		<h6>Name of Person</h6>
       			<p>Position</p>
       			</div>
      		 </div>
             <div class="large-4 columns">
               <div class="border"><img src="staff/Ademola_Akinsowon.jpg" />
        		<h6>Akinsowon Ademola</h6>
       			<p>Admin Assistant</p>
   			   </div>
      		 </div>
             <div class="large-4 columns">
               <div class="border"><img src="staff/Lade_Oladokun.jpg" />
        		<h6>Lade Oladokun</h6>
       			<p>Motor Vehicle Officer (MVO)</p>
   			   </div>
      		 </div>
             <div class="large-4 columns" style="float: left"><div class="border"><img src="staff/Olamide_Ogunmila.jpg" />
       		 <h6>Miss Ogungbamila Olamide</h6>
       			<p>Front Desk Officer</p>
       			</div>
      		 </div>
             <div class="large-4 columns" style="float: left"><div class="border"><img src="staff/Oluwaseyi_Kojah.jpg" />
       		 <h6>Miss Kojah Seyifunmi</h6>
       			<p>Kitchen Officer</p>
       			</div>
      		 </div>
             <div class="large-4 columns" style="float: left"><div class="border"><img src="staff/none.jpg" />
       		 <h6>Mrs. Kemi Olasupo</h6>
       			<p>Child Minder</p>
       			</div>
      		 </div>
             <div class="large-4 columns" style="float: left"><div class="border"><img src="staff/none.jpg" />
       		 <h6>Mrs. Adebimpe Akintimehin</h6>
       			<p>Cleaner</p>
       			</div>
      		 </div>
             <div class="large-4 columns" style="float: left"><div class="border"><img src="staff/none.jpg" />
       		 <h6>Mr. Rueben Oyelakin</h6>
       			<p>Security Officer</p>
       			</div>
      		 </div>
       </div>
        <div class="large-12 columns">
      	 	<h5 class="subheader">Account Staff</h5>  
       	 	<hr>
    		<div class="large-4 columns">
    		  <div class="border"><img src="staff/Aro_Sanya_Adeboye.jpg" />
        		<h6>Mr. Aro Sanya Adeboye</h6>
       			<p>Account Officer</p>
   			  </div>
   		  </div>
          <div class="large-4 columns" style="float: left"><div class="border"><img src="staff/Bunmi_Shobowale.jpg" />
       		 <h6>Miss Shobowale Bunmi</h6>
       			<p>Account Assistant</p>
       			</div>
      		 </div>
             
       </div>
        <div class="large-12 columns">
      	 	<h5 class="subheader">Project Staff</h5>  
       	 	<hr>
    		<div class="large-4 columns">
    		  <div class="border"><img src="staff/Mayokun_Akinlosotu.jpg" />
        		<h6>Mr. Oluwamayokun Akinlosotu</h6>
       			<p>Fresh Foundation Project (FFP) Manager</p>
   			  </div>
   		  </div>
             <div class="large-4 columns">
               <div class="border"><img src="staff/tessy.jpg" />
        		<h6>Mrs Tessy U. Ozobialu</h6>
       			<p>Project Officer</p>
   			   </div>
      		 </div>
             <div class="large-4 columns">
               <div class="border"><img src="staff/Akinosho_Olumide.jpg" />
        		<h6>Mr. Akinosho Olumide</h6>
       			<p>Project Officer</p>
   			   </div>
      		 </div>
             <div class="large-4 columns">
               <div class="border"><img src="staff/Patricia_Michael.jpg" />
        		<h6>Miss Patricia Michael</h6>
       			<p>Project Officer</p>
   			   </div>
      		 </div>
             <div class="large-4 columns">
               <div class="border"><img src="staff/Abiodun_Ogunwole.jpg" />
        		<h6>Mr. Ogunwole Abiodun</h6>
       			<p>Project Officer</p>
   			   </div>
      		 </div>
             <div class="large-4 columns"><div class="border"><img src="staff/none.jpg" />
        		<h6>Mr. Asokle John</h6>
       			<p>Assistant Project Officer</p>
       			</div>
      		 </div>
             <div class="large-4 columns"><div class="border"><img src="staff/Doyin_Soyingbe.jpg" />
        		<h6>Miss Soyingbe Adedoyin</h6>
       			<p>Monitoring and Evaluation Officer</p>
       			</div>
      		 </div>
             <div class="large-4 columns" style="float: left"><div class="border"><img src="staff/Tunde_Patrick.jpg" />
        		<h6>Mr. Tunde Patrick</h6>
       			<p>Monitoring and Evaluation Officer</p>
       			</div>
      		 </div>
       </div>
        
        
       
       
    
    
  </div>
 
	    
        
      </div>
	</div>
<? include 'footer.php' ?>