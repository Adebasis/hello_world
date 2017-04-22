<?php 
  # Om Maa Tara.
	# Om Nama Shivaya.
	# Developed By :-Debasis Acharya
	# BLET INDIA.
	# During the Month of July-2014.
	ob_start();
	session_start();
	include_once 'includes/class.Main.php';
    $mainClassObject=new Main();
	
if(isset($_REQUEST['choice']) && $_REQUEST['choice']=='confirm'){
	
	$actualfare=$_REQUEST['actualfare'];
	

?>
        <div style="text-align:left;margin:20px;width:500px;">
        <div style=" font:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif; font-weight:bold;  text-align:center;font-size:15px;margin-bottom:10px; color:#900">Total Booking Pice is: &pound; <?php echo $actualfare; ?>
        </br>Would you like to Proceed?
        </div>
          <form name="frm" style="text-align:center;"> 
          
          <input style="margin:10px 0; cursor:pointer;" type="button"  class="butn_1 _center" id="yes" value="Yes" onclick="setProcess(this.value)"  />
          
          <input style="margin:10px 0;  cursor:pointer;" type="button" class="butn_1 _center" id="no" value="No" onclick="setProcess(this.value)"  />
         </form>
        </div>
    
<?php }?>
