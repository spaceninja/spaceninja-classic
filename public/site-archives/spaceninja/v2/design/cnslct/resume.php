<?
$incoming = "resumes";
if ($REQUEST_METHOD!="POST"){	
	include('employment.php');
}else {
	if($resume == "none") {
		$error = 'you did not include your resume.';
		include('upload_error.php');
	}else{
		$resname = ${resume."_name"};
		$dot = strpos($resname, ".");
		if ($dot){
			$resname = $name.substr($resname,$dot);
		}else{
			$resname = $name;
		}
			if(  copy($resume, $incoming.'/'.$resname ) && unlink($resume)  ){
			include('upload_ok.php');
		}    	else{
    		$error = 'failed to save file in '.$incoming.'.';
    		include ('upload_error.php');
		}
	}
}
?>
