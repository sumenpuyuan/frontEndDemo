 
<?php 
passthru('xfer_rsync.sh',$returnvalue); 
if ($returnvalue != 0){ 
//we have a problem! 
//add error code here 
echo "wrong";
}else{ 
//we are okay 
//redirect to some other page 
echo "ok";
} 
?> 
